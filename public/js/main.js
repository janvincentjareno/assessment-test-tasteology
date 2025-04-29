document.addEventListener('DOMContentLoaded', () => {

  // Capture all <a> clicks and show console.log
  document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault(); // Prevent default action to avoid scrolling on empty links
      console.log('Anchor clicked:', e.currentTarget);
    });
  });

  // Modal functionality
  const modal      = document.getElementById('img-modal');
  const imgEl      = document.getElementById('modal-img');
  const closeBtn   = document.getElementById('modal-close');
  const overlay    = modal.querySelector('.modal-overlay');
  const triggers   = document.querySelectorAll('.img-modal');

  triggers.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const fullSrc = link.dataset.modalimg;
      imgEl.src = fullSrc;
      modal.classList.remove('hidden');
    });
  });

  const hideModal = () => {
    modal.classList.add('hidden');
    imgEl.src = '';
  };

  closeBtn.addEventListener('click', hideModal);
  overlay.addEventListener('click', hideModal);

  // Animation
  // Scroll-reveal for elements with .fade-in class
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('loaded');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1
  });

  document.querySelectorAll('.fade-in').forEach(el => {
    observer.observe(el);
  });
});
