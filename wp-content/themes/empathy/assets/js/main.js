import { Sliders } from './sliders';
import { Menu } from './menu';


const anchorScroll = () => {
    document.addEventListener('DOMContentLoaded', function() {
        const menuHeight = 128; // Altezza del menu fisso in pixel
      
        const menuLinks = document.querySelectorAll('.anchor-link'); // Cambia questo selettore con i tuoi link di menu
        menuLinks.forEach(link => {
          link.addEventListener('click', function(event) {
            event.preventDefault();
            
            const targetSectionId = this.getAttribute('href');
            const targetSection = document.querySelector(targetSectionId);
            
            if (targetSection) {
              const targetOffsetTop = targetSection.offsetTop - menuHeight;
              window.scrollTo({
                top: targetOffsetTop,
                behavior: 'smooth' // Scorrimento animato
              });
            }
          });
        });
      });      
}

anchorScroll();

Menu();

Sliders();