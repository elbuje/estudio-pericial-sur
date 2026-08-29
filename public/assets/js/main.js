/**
 * Estudio Pericial Sur - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {
  // Mobile Menu Drawer
  const mobileBtn = document.getElementById('mobileMenuBtn');
  const mobileNav = document.getElementById('mobileNav');
  const mobileClose = document.getElementById('mobileMenuClose');

  if (mobileBtn && mobileNav) {
    mobileBtn.addEventListener('click', () => {
      mobileNav.classList.add('open');
      mobileBtn.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
    });

    const closeMenu = () => {
      mobileNav.classList.remove('open');
      mobileBtn.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    };

    if (mobileClose) {
      mobileClose.addEventListener('click', closeMenu);
    }

    // Close when clicking any mobile link
    const mobileLinks = mobileNav.querySelectorAll('.mobile-link');
    mobileLinks.forEach(link => {
      link.addEventListener('click', closeMenu);
    });
  }

  // Header scroll shadow effect
  const mainHeader = document.getElementById('mainHeader');
  if (mainHeader) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 20) {
        mainHeader.style.boxShadow = '0 4px 20px rgba(21, 40, 54, 0.08)';
      } else {
        mainHeader.style.boxShadow = 'none';
      }
    });
  }

  // FAQ Accordion - Close others when one opens (optional smooth accordion)
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    item.addEventListener('toggle', (e) => {
      if (item.open) {
        faqItems.forEach(otherItem => {
          if (otherItem !== item && otherItem.open) {
            otherItem.removeAttribute('open');
          }
        });
      }
    });
  });

  // Auto-hide WhatsApp tooltip after 8 seconds
  const waTooltip = document.getElementById('waTooltip');
  if (waTooltip) {
    setTimeout(() => {
      waTooltip.style.opacity = '0';
      waTooltip.style.transition = 'opacity 0.5s ease';
      setTimeout(() => {
        waTooltip.style.display = 'none';
      }, 500);
    }, 8000);
  }
});
