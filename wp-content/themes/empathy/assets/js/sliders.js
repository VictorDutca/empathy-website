// Importa Swiper JS
import Swiper from 'swiper/bundle';


export function Sliders() {
    if(document.querySelector('[data-slider="related"]')){

        var swiper = new Swiper('[data-slider="related"]', {
            slidesPerView:'1',
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                992: {
                    spaceBetween: 30,
                    slidesPerView:'4.2',
                },
            }
        });
    }

    if(document.querySelector('.single-project__images-slider__fullimage')){

        var swiper = new Swiper(".single-project__images-slider__fullimage", {
            slidesPerView:'auto',
            spaceBetween: 15,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
        });
    }

    if(document.querySelector('#slider2')){
        // Inizializza il primo swiper slider
        const slider1 = new Swiper('#slider1', {
            slidesPerView: 1,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
        });
        // Inizializza il secondo swiper slider
        const slider2 = new Swiper('#slider2', {
            // Opzioni del secondo swiper slider
            slidesPerView: "auto",
            spaceBetween: 15,
            breakpoints: {
                992: {
                spaceBetween: 30,
                },
            }
        });
        
            // Sincronizza gli swiper sliders
            slider1.controller.control = slider2;
            slider2.controller.control = slider1;
            
            // Gestisci l'evento del clic sul pulsante "next"
            const nextBtn = document.getElementById('nextBtn');
            nextBtn.addEventListener('click', () => {
                slider1.slideNext();
            });
            
            // Gestisci l'evento del clic sul pulsante "prev"
            const prevBtn = document.getElementById('prevBtn');
            prevBtn.addEventListener('click', () => {
                slider1.slidePrev();
            });
    }   
}