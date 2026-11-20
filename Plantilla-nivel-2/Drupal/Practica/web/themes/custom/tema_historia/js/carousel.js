(function (Drupal) {
  Drupal.behaviors.customCarousel = {
    attach: function (context) {
      // Soporta tanto la clase .custom-carousel como el id tradicional
      const carousels = context.querySelectorAll ? context.querySelectorAll('.custom-carousel') : [];

      // Si no encuentra por clase, busca el carrusel clásico por ID
      if (carousels.length === 0) {
        const track = context.querySelector ? context.querySelector('#carouselTrack') : null;
        if (track && !track.dataset.initialized) {
          initSingleCarousel(track, context.querySelector('#carouselPrev'), context.querySelector('#carouselNext'), track.parentElement);
        }
        return;
      }

      carousels.forEach(function (carousel) {
        const track = carousel.querySelector('.carousel-track') || carousel.querySelector('#carouselTrack');
        const prevBtn = carousel.querySelector('.carousel-btn.prev') || carousel.querySelector('#carouselPrev');
        const nextBtn = carousel.querySelector('.carousel-btn.next') || carousel.querySelector('#carouselNext');
        if (track && prevBtn && nextBtn && !track.dataset.initialized) {
          initSingleCarousel(track, prevBtn, nextBtn, carousel);
        }
      });

      function initSingleCarousel(track, prevBtn, nextBtn, container) {
        track.dataset.initialized = 'true';

        function slideNext() {
          const slideWidth = track.clientWidth;
          if (track.scrollLeft + slideWidth >= track.scrollWidth - 15) {
            track.scrollTo({ left: 0, behavior: 'smooth' });
          } else {
            track.scrollBy({ left: slideWidth, behavior: 'smooth' });
          }
        }

        function slidePrev() {
          const slideWidth = track.clientWidth;
          if (track.scrollLeft <= 15) {
            track.scrollTo({ left: track.scrollWidth, behavior: 'smooth' });
          } else {
            track.scrollBy({ left: -slideWidth, behavior: 'smooth' });
          }
        }

        nextBtn.addEventListener('click', slideNext);
        prevBtn.addEventListener('click', slidePrev);

        let timer = setInterval(slideNext, 6000);
        if (container) {
          container.addEventListener('mouseenter', () => clearInterval(timer));
          container.addEventListener('mouseleave', () => {
            timer = setInterval(slideNext, 6000);
          });
        }
      }
    }
  };
})(Drupal);
