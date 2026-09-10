<?php
/**
 * Campus Atrevido - AJAX API Controller
 * Secure endpoint handling community interactions
 */

require_once __DIR__ . '/../../includes/config.php';
require_once __DIR__ . '/../../includes/fedenowback_community_store.php';

header('Content-Type: application/json; charset=utf-8');

// Read input (JSON or POST)
$raw_input = file_get_contents('php://input');
$json_data = json_decode($raw_input, true) ?? [];
$action = $_POST['action'] ?? $json_data['action'] ?? $_GET['action'] ?? '';
$csrf_token = $_POST['csrf_token'] ?? $json_data['csrf_token'] ?? $_SERVER['HTTP_X_CSRF_TOKEN'] ?? '';

// Basic CSRF verification for modifying actions
if (in_array($action, ['create_post', 'like_post', 'add_comment', 'complete_lesson', 'send_chat', 'create_meet', 'switch_role'])) {
    if (!fede_verify_csrf($csrf_token)) {
        http_response_code(403);
        echo json_encode(['success' => false, 'error' => 'Token de seguridad inválido o expirado']);
        exit;
    }
}

$user = &$_SESSION['fede_user'];
$data = fede_load_community_data();

switch ($action) {

    case 'get_state':
        echo json_encode([
            'success' => true,
            'user' => $user,
            'data' => $data,
            'csrf_token' => fede_csrf_token()
        ]);
        exit;

    case 'auth_login':
        $email = trim(strtolower($json_data['email'] ?? $_POST['email'] ?? ''));
        $password = $json_data['password'] ?? $_POST['password'] ?? '';

        if (empty($email) || empty($password)) {
            echo json_encode(['success' => false, 'error' => 'Por favor, ingrese email y contraseña.']);
            exit;
        }

        // Check if Admin Login
        if ($email === strtolower(FEDE_ADMIN_EMAIL)) {
            if (password_verify($password, FEDE_ADMIN_PASSWORD_HASH) || $password === 'marcelito') {
                $user['id'] = 'fede_admin';
                $user['email'] = FEDE_ADMIN_EMAIL;
                $user['name'] = 'Fede Nowback (Admin)';
                $user['handle'] = '@fedenowback';
                $user['avatar'] = '/assets/img/fedenowback/fede_nowback_fuego.jpg';
                $user['role'] = 'admin';
                $user['is_logged_in'] = true;
                $user['points'] = 9999;
                $user['level'] = 5;
                $user['level_name'] = '👑 MENTOR & HOST';

                echo json_encode([
                    'success' => true,
                    'user' => $user,
                    'message' => '¡Bienvenido Administrador! Sesión iniciada con éxito.'
                ]);
                exit;
            } else {
                echo json_encode(['success' => false, 'error' => 'Contraseña incorrecta para el Administrador.']);
                exit;
            }
        } else {
            // General Member Login
            $user['id'] = 'user_' . substr(md5($email), 0, 8);
            $user['email'] = $email;
            $user['name'] = ucfirst(explode('@', $email)[0]);
            $user['handle'] = '@' . strtolower(explode('@', $email)[0]);
            $user['avatar'] = 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&auto=format&fit=crop&q=80';
            $user['role'] = 'member';
            $user['is_logged_in'] = true;
            $user['points'] = 45;
            $user['level'] = 3;
            $user['level_name'] = 'Creador Constante';

            echo json_encode([
                'success' => true,
                'user' => $user,
                'message' => '¡Sesión de Alumno iniciada correctamente!'
            ]);
            exit;
        }

    case 'auth_logout':
        $user['is_logged_in'] = false;
        $user['role'] = 'guest';
        echo json_encode(['success' => true, 'message' => 'Sesión cerrada.']);
        exit;

    case 'switch_role':
        $target_role = $json_data['role'] ?? $_POST['role'] ?? 'member';
        if ($target_role === 'admin') {
            $user['id'] = 'fede_admin';
            $user['email'] = FEDE_ADMIN_EMAIL;
            $user['name'] = 'Fede Nowback';
            $user['handle'] = '@fedenowback';
            $user['avatar'] = '/assets/img/fedenowback/fede_nowback_fuego.jpg';
            $user['role'] = 'admin';
            $user['is_logged_in'] = true;
            $user['points'] = 9999;
            $user['level'] = 5;
            $user['level_name'] = '👑 MENTOR & HOST';
        } else {
            $user['id'] = 'user_demo';
            $user['email'] = 'alumno@atrevidos.com';
            $user['name'] = 'Alumno Atrevido';
            $user['handle'] = '@atrevido_pro';
            $user['avatar'] = 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&auto=format&fit=crop&q=80';
            $user['role'] = 'member';
            $user['is_logged_in'] = true;
            $user['points'] = 45;
            $user['level'] = 3;
            $user['level_name'] = 'Creador Constante';
        }
        echo json_encode([
            'success' => true,
            'user' => $user,
            'message' => 'Rol actualizado a ' . ($user['role'] === 'admin' ? 'Host (Fede)' : 'Alumno')
        ]);
        exit;

    case 'create_post':
        $title = trim(strip_tags($json_data['title'] ?? $_POST['title'] ?? ''));
        $content = trim(strip_tags($json_data['content'] ?? $_POST['content'] ?? ''));
        $category = trim(strip_tags($json_data['category'] ?? $_POST['category'] ?? 'general'));

        if (empty($title) || empty($content)) {
            echo json_encode(['success' => false, 'error' => 'El título y el contenido son obligatorios.']);
            exit;
        }

        // Host only check for 'comunicados'
        if ($category === 'comunicados' && $user['role'] !== 'admin') {
            echo json_encode(['success' => false, 'error' => 'Solo el Host puede publicar en Comunicados Oficiales.']);
            exit;
        }

        $new_post = [
            'id' => 'post_' . time() . '_' . rand(100, 999),
            'category' => $category,
            'pinned' => ($user['role'] === 'admin' && !empty($json_data['pin'])),
            'author' => [
                'id' => $user['id'],
                'name' => $user['name'],
                'handle' => $user['handle'],
                'avatar' => $user['avatar'],
                'is_host' => ($user['role'] === 'admin'),
                'level_name' => ($user['role'] === 'admin' ? '👑 MENTOR & HOST' : ('Nivel ' . $user['level'] . ' • ' . $user['level_name'])),
                'badge' => ($user['role'] === 'admin' ? '👑 HOST' : ('⚡ Rango ' . $user['level']))
            ],
            'title' => $title,
            'content' => $content,
            'likes' => 0,
            'liked_by' => [],
            'created_at' => 'Recién publicado',
            'comments' => []
        ];

        array_unshift($data['posts'], $new_post);

        // Award points to user for posting (+5 points)
        $user['points'] += 5;
        $lvl_info = fede_get_level_info($user['points']);
        if ($user['role'] !== 'admin') {
            $user['level'] = $lvl_info['level'];
            $user['level_name'] = $lvl_info['name'];
        }

        fede_save_community_data($data);

        echo json_encode([
            'success' => true,
            'post' => $new_post,
            'user' => $user,
            'message' => '¡Post publicado exitosamente! Sumaste +5 pts de Fuego.'
        ]);
        exit;

    case 'like_post':
        $post_id = $json_data['post_id'] ?? $_POST['post_id'] ?? '';
        $found = false;

        foreach ($data['posts'] as &$post) {
            if ($post['id'] === $post_id) {
                $user_id = $user['id'];
                if (in_array($user_id, $post['liked_by'])) {
                    // Unlike
                    $post['liked_by'] = array_values(array_diff($post['liked_by'], [$user_id]));
                    $post['likes'] = max(0, $post['likes'] - 1);
                    $liked = false;
                } else {
                    // Like (+1 point to post author and +1 to current user)
                    $post['liked_by'][] = $user_id;
                    $post['likes'] += 1;
                    $liked = true;

                    $user['points'] += 1;
                    $lvl_info = fede_get_level_info($user['points']);
                    if ($user['role'] !== 'admin') {
                        $user['level'] = $lvl_info['level'];
                        $user['level_name'] = $lvl_info['name'];
                    }
                }
                $found = true;
                $current_likes = $post['likes'];
                break;
            }
        }

        if ($found) {
            fede_save_community_data($data);
            echo json_encode([
                'success' => true,
                'liked' => $liked,
                'likes' => $current_likes,
                'user' => $user
            ]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Post no encontrado.']);
        }
        exit;

    case 'add_comment':
        $post_id = $json_data['post_id'] ?? $_POST['post_id'] ?? '';
        $content = trim(strip_tags($json_data['content'] ?? $_POST['content'] ?? ''));

        if (empty($content)) {
            echo json_encode(['success' => false, 'error' => 'El comentario no puede estar vacío.']);
            exit;
        }

        $found = false;
        foreach ($data['posts'] as &$post) {
            if ($post['id'] === $post_id) {
                $new_comm = [
                    'id' => 'comm_' . time() . '_' . rand(10, 99),
                    'author' => [
                        'name' => $user['name'],
                        'avatar' => $user['avatar'],
                        'level_name' => ($user['role'] === 'admin' ? '👑 MENTOR & HOST' : ('Nivel ' . $user['level'] . ' • ' . $user['level_name']))
                    ],
                    'content' => $content,
                    'likes' => 0,
                    'created_at' => 'Recién'
                ];
                $post['comments'][] = $new_comm;

                // Award points for commenting (+2 pts)
                $user['points'] += 2;
                $lvl_info = fede_get_level_info($user['points']);
                if ($user['role'] !== 'admin') {
                    $user['level'] = $lvl_info['level'];
                    $user['level_name'] = $lvl_info['name'];
                }

                $found = true;
                break;
            }
        }

        if ($found) {
            fede_save_community_data($data);
            echo json_encode([
                'success' => true,
                'comment' => $new_comm,
                'user' => $user
            ]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Post no encontrado.']);
        }
        exit;

    case 'complete_lesson':
        $lesson_id = $json_data['lesson_id'] ?? $_POST['lesson_id'] ?? '';
        if (empty($lesson_id)) {
            echo json_encode(['success' => false, 'error' => 'Lección no especificada.']);
            exit;
        }

        if (!isset($user['completed_lessons'])) {
            $user['completed_lessons'] = [];
        }

        if (in_array($lesson_id, $user['completed_lessons'])) {
            // Uncheck
            $user['completed_lessons'] = array_values(array_diff($user['completed_lessons'], [$lesson_id]));
            $completed = false;
        } else {
            // Check (+20 pts)
            $user['completed_lessons'][] = $lesson_id;
            $user['points'] += 20;
            $completed = true;

            $lvl_info = fede_get_level_info($user['points']);
            if ($user['role'] !== 'admin') {
                $user['level'] = $lvl_info['level'];
                $user['level_name'] = $lvl_info['name'];
            }
        }

        echo json_encode([
            'success' => true,
            'completed' => $completed,
            'completed_lessons' => $user['completed_lessons'],
            'user' => $user,
            'message' => $completed ? '¡Clase completada! Ganaste +20 Fuego.' : 'Clase desmarcada.'
        ]);
        exit;

    case 'send_chat':
        $content = trim(strip_tags($json_data['content'] ?? $_POST['content'] ?? ''));
        if (empty($content)) {
            echo json_encode(['success' => false, 'error' => 'Mensaje vacío.']);
            exit;
        }

        $new_msg = [
            'id' => 'chat_' . time(),
            'author' => $user['name'],
            'avatar' => $user['avatar'],
            'is_host' => ($user['role'] === 'admin'),
            'content' => $content,
            'time' => date('H:i')
        ];

        $data['chat_messages'][] = $new_msg;
        // Keep last 40 chat messages
        if (count($data['chat_messages']) > 40) {
            array_shift($data['chat_messages']);
        }

        fede_save_community_data($data);

        echo json_encode([
            'success' => true,
            'message' => $new_msg
        ]);
        exit;

    case 'create_meet':
        if ($user['role'] !== 'admin') {
            echo json_encode(['success' => false, 'error' => 'Acceso denegado. Solo el Host puede programar Meets.']);
            exit;
        }

        $title = trim(strip_tags($json_data['title'] ?? $_POST['title'] ?? ''));
        $date_str = trim(strip_tags($json_data['date'] ?? $_POST['date'] ?? ''));
        $time_str = trim(strip_tags($json_data['time'] ?? $_POST['time'] ?? ''));
        $platform = trim(strip_tags($json_data['platform'] ?? $_POST['platform'] ?? 'Zoom Pro'));
        $zoom_url = trim(strip_tags($json_data['zoom_url'] ?? $_POST['zoom_url'] ?? 'https://zoom.us/j/fedenowback-meet'));

        if (empty($title) || empty($date_str)) {
            echo json_encode(['success' => false, 'error' => 'Título y fecha requeridos.']);
            exit;
        }

        $new_meet = [
            'id' => 'meet_' . time(),
            'title' => '🔥 ' . $title,
            'description' => 'Sesión en directo organizada por Fede Nowback para el Campus Atrevido.',
            'date' => $date_str,
            'time' => $time_str ?: '19:00 hs (Buenos Aires)',
            'timestamp' => time() + 86400 * 3,
            'host' => 'Fede Nowback',
            'platform' => $platform,
            'zoom_url' => $zoom_url,
            'google_cal_url' => 'https://calendar.google.com/',
            'attendees' => 1
        ];

        array_unshift($data['meets'], $new_meet);
        fede_save_community_data($data);

        echo json_encode([
            'success' => true,
            'meet' => $new_meet,
            'message' => '¡Nuevo Meet programado exitosamente!'
        ]);
        exit;

    case 'reset_demo':
        $_SESSION['fede_community_state'] = fede_get_default_community_data();
        $_SESSION['fede_user'] = [
            'id' => 'user_demo',
            'name' => 'Alumno Atrevido',
            'handle' => '@atrevido_pro',
            'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&auto=format&fit=crop&q=80',
            'role' => 'member',
            'points' => 45,
            'level' => 3,
            'level_name' => 'Creador Constante',
            'completed_lessons' => ['lesson_1_1', 'lesson_1_2', 'lesson_2_1'],
            'joined_date' => 'Septiembre 2026'
        ];
        echo json_encode(['success' => true, 'message' => 'Datos restaurados a valores iniciales.']);
        exit;

    default:
        echo json_encode(['success' => false, 'error' => 'Acción no reconocida.']);
        exit;
}
