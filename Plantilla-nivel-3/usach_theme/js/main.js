/**
 * USACH Nivel 3 - Interacciones Nativas Vanilla JS (Sin librerías externas)
 */
document.addEventListener('DOMContentLoaded', function () {
    // 1. Menú móvil
    const menuBtn = document.getElementById('mobileMenuBtnN3');
    const siteNav = document.getElementById('siteNavN3');
    if (menuBtn && siteNav) {
        menuBtn.addEventListener('click', function () {
            siteNav.classList.toggle('is-active');
        });
    }

    // 2. Carrusel Hero interactivo
    const heroSlides = [
        {
            title: 'Revisa las<br>colecciones',
            desc: 'Buscamos fomentar la difusión de ideas y ser un aporte significativo en el avance de los estudios sociales y políticos, las artes y las humanidades.',
            img: 'https://picsum.photos/seed/ideahero/1200/650',
            link: '#colecciones'
        },
        {
            title: 'Investigación de<br>Excelencia',
            desc: 'Generamos conocimiento riguroso e interdisciplinario para abordar los grandes desafíos sociales, culturales e históricos del país.',
            img: 'https://picsum.photos/seed/usachinvestigacion/1200/650',
            link: '#investigacion'
        },
        {
            title: 'Postgrados y<br>Formación Continua',
            desc: 'Conoce nuestros programas de Doctorado y Magíster con un cuerpo académico de primer nivel y enfoque crítico contemporáneo.',
            img: 'https://picsum.photos/seed/usachpostgrado/1200/650',
            link: '#programas'
        }
    ];

    let currentHeroIndex = 0;
    const heroTitle = document.getElementById('heroSlideTitle');
    const heroDesc = document.getElementById('heroSlideDesc');
    const heroImg = document.getElementById('heroSlideImg');
    const heroPrevBtn = document.getElementById('heroPrevBtn');
    const heroNextBtn = document.getElementById('heroNextBtn');

    function updateHeroSlide(index) {
        if (!heroTitle || !heroDesc || !heroImg) return;
        
        // Transición suave
        heroTitle.style.opacity = '0';
        heroDesc.style.opacity = '0';
        heroImg.style.opacity = '0';

        setTimeout(function () {
            heroTitle.innerHTML = heroSlides[index].title;
            heroDesc.textContent = heroSlides[index].desc;
            heroImg.src = heroSlides[index].img;

            heroTitle.style.opacity = '1';
            heroDesc.style.opacity = '1';
            heroImg.style.opacity = '1';
        }, 200);
    }

    if (heroPrevBtn && heroNextBtn) {
        heroPrevBtn.addEventListener('click', function () {
            currentHeroIndex = (currentHeroIndex - 1 + heroSlides.length) % heroSlides.length;
            updateHeroSlide(currentHeroIndex);
        });

        heroNextBtn.addEventListener('click', function () {
            currentHeroIndex = (currentHeroIndex + 1) % heroSlides.length;
            updateHeroSlide(currentHeroIndex);
        });
    }

    // 3. Desplazamiento de Alianzas
    const alianzasContainer = document.querySelector('.alianzas-logos');
    const alianzasPrev = document.getElementById('alianzasPrevBtn');
    const alianzasNext = document.getElementById('alianzasNextBtn');

    if (alianzasContainer && alianzasPrev && alianzasNext) {
        alianzasPrev.addEventListener('click', function () {
            alianzasContainer.scrollBy({ left: -200, behavior: 'smooth' });
        });
        alianzasNext.addEventListener('click', function () {
            alianzasContainer.scrollBy({ left: 200, behavior: 'smooth' });
        });
    }
});
