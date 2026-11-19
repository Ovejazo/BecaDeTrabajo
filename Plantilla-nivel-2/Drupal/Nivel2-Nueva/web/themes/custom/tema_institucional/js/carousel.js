document.addEventListener('DOMContentLoaded', function () {
  const carrusel = document.querySelector('.carrusel-hero');
  if (!carrusel) return;

  const track = carrusel.querySelector('.view-content') || carrusel.querySelector('.views-view-unformatted');
  if (!track) return;

  const slides = track.querySelectorAll('.views-row');
  if (slides.length <= 1) return;

  // 1. Crear flechas < y >
  const btnPrev = document.createElement('button');
  btnPrev.className = 'carrusel-btn prev';
  btnPrev.innerHTML = '‹';

  const btnNext = document.createElement('button');
  btnNext.className = 'carrusel-btn next';
  btnNext.innerHTML = '›';

  carrusel.appendChild(btnPrev);
  carrusel.appendChild(btnNext);

  // 2. Crear los puntitos inferiores
  const dotsContainer = document.createElement('div');
  dotsContainer.className = 'carrusel-dots';
  slides.forEach((_, idx) => {
    const dot = document.createElement('span');
    dot.className = 'carrusel-dot' + (idx === 0 ? ' is-active' : '');
    dot.addEventListener('click', () => {
      track.scrollTo({ left: slides[idx].offsetLeft, behavior: 'smooth' });
    });
    dotsContainer.appendChild(dot);
  });
  carrusel.appendChild(dotsContainer);

  const dots = dotsContainer.querySelectorAll('.carrusel-dot');

  btnNext.addEventListener('click', () => {
    track.scrollBy({ left: track.clientWidth, behavior: 'smooth' });
  });

  btnPrev.addEventListener('click', () => {
    track.scrollBy({ left: -track.clientWidth, behavior: 'smooth' });
  });

  // Actualizar el puntito activo al deslizar
  track.addEventListener('scroll', () => {
    const index = Math.round(track.scrollLeft / track.clientWidth);
    dots.forEach((dot, i) => {
      dot.classList.toggle('is-active', i === index);
    });
  });
});