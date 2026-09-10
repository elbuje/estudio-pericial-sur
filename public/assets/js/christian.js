/**
 * Christian Cencherle — Speaker & Business Mentor
 * Frontend Interactivity & WhatsApp Generator
 */

document.addEventListener('DOMContentLoaded', function () {
  // 1. Mobile Menu Toggle
  const mobileToggle = document.getElementById('mobileMenuToggle');
  const mainNav = document.getElementById('mainNav');

  if (mobileToggle && mainNav) {
    mobileToggle.addEventListener('click', function () {
      mainNav.classList.toggle('active');
      const isOpen = mainNav.classList.contains('active');
      mobileToggle.innerHTML = isOpen ? '✕' : '☰';
    });

    // Close menu when clicking nav link
    mainNav.querySelectorAll('.nav-link').forEach(link => {
      link.addEventListener('click', () => {
        mainNav.classList.remove('active');
        mobileToggle.innerHTML = '☰';
      });
    });
  }

  // 2. FAQ Accordion
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    if (question) {
      question.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        // Close all
        faqItems.forEach(other => other.classList.remove('active'));
        // Open clicked if wasn't active
        if (!isActive) {
          item.classList.add('active');
        }
      });
    }
  });

  // 3. Interactive Booking Form -> Direct WhatsApp
  const bookingForm = document.getElementById('christianBookingForm');
  if (bookingForm) {
    bookingForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const name = document.getElementById('bookingName')?.value.trim() || '';
      const phone = document.getElementById('bookingPhone')?.value.trim() || '';
      const email = document.getElementById('bookingEmail')?.value.trim() || '';
      const city = document.getElementById('bookingCity')?.value.trim() || '';
      const service = document.querySelector('input[name="booking_service"]:checked')?.value || 'Conferencia / Charla';
      const message = document.getElementById('bookingMessage')?.value.trim() || '';

      if (!name || !phone) {
        alert('Por favor, completá al menos tu Nombre y WhatsApp para que Christian y su equipo puedan contactarte.');
        return;
      }

      // Build WhatsApp message
      const officialPhone = '5491124541470';
      let waText = `¡Hola Christian! 👋 Mi nombre es *${name}*.\n\n`;
      waText += `📌 *Interés:* ${service}\n`;
      waText += `📍 *Ciudad / Localidad:* ${city || 'Argentina'}\n`;
      waText += `📱 *WhatsApp de Contacto:* ${phone}\n`;
      if (email) waText += `✉️ *Email:* ${email}\n`;
      if (message) waText += `💬 *Consulta:* ${message}\n\n`;
      waText += `Quiero coordinar una fecha / asesoría. ¡Muchas gracias!`;

      const encodedText = encodeURIComponent(waText);
      const waUrl = `https://wa.me/${officialPhone}?text=${encodedText}`;

      // Open WhatsApp in new tab
      window.open(waUrl, '_blank');

      // Visual feedback
      const submitBtn = bookingForm.querySelector('.form-submit-btn');
      if (submitBtn) {
        const origHtml = submitBtn.innerHTML;
        submitBtn.innerHTML = '✅ ¡Abriendo WhatsApp con tu consulta!';
        submitBtn.style.background = '#25d366';
        setTimeout(() => {
          submitBtn.innerHTML = origHtml;
          submitBtn.style.background = '';
        }, 4000);
      }
    });
  }

  // 4. Video Modal Handler
  const videoThumb = document.getElementById('videoTrigger');
  const videoModal = document.getElementById('videoModal');
  const videoFrame = document.getElementById('videoIframe');
  const videoClose = document.getElementById('videoModalClose');

  if (videoThumb && videoModal && videoFrame) {
    videoThumb.addEventListener('click', function () {
      const videoId = this.getAttribute('data-video-id') || 'Z70IaTNwt7M';
      videoFrame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
      videoModal.style.display = 'flex';
    });

    const closeModal = () => {
      videoFrame.src = '';
      videoModal.style.display = 'none';
    };

    if (videoClose) videoClose.addEventListener('click', closeModal);
    videoModal.addEventListener('click', (e) => {
      if (e.target === videoModal) closeModal();
    });
  }
});
