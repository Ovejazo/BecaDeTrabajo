(function (Drupal) {
  Drupal.behaviors.customCarousel = {
    attach: function (context) {
      const track = context.querySelector('#carouselTrack');
      const prevBtn = context.querySelector('#carouselPrev');
      const nextBtn = context.querySelector('#carouselNext');

      // Si no están en la página o ya se inicializaron, salimos
      if (!track || !prevBtn || !nextBtn || track.dataset.initialized) return;
      track.dataset.initialized = 'true';

      // Avanzar al siguiente banner
      function slideNext() {
        const slideWidth = track.clientWidth;
        // Si llega al final, vuelve al inicio
        if (track.scrollLeft + slideWidth >= track.scrollWidth - 10) {
          track.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          track.scrollBy({ left: slideWidth, behavior: 'smooth' });
        }
      }

      // Retroceder al banner anterior
      function slidePrev() {
        const slideWidth = track.clientWidth;
        // Si está en el inicio, salta al último
        if (track.scrollLeft <= 10) {
          track.scrollTo({ left: track.scrollWidth, behavior: 'smooth' });
        } else {
          track.scrollBy({ left: -slideWidth, behavior: 'smooth' });
        }
      }

      // Escuchar clics en los botones
      nextBtn.addEventListener('click', slideNext);
      prevBtn.addEventListener('click', slidePrev);

      // Cambio automático cada 6 segundos
      let timer = setInterval(slideNext, 6000);

      // Si el usuario pasa el mouse por encima, se pausa el carrusel
      track.parentElement.addEventListener('mouseenter', () => clearInterval(timer));
      track.parentElement.addEventListener('mouseleave', () => {
        timer = setInterval(slideNext, 6000);
      });
    }
  };
})(Drupal);