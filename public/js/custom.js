// Initialisation de AOS
// AOS.init({
//     duration: 800,
//     easing: 'slide',
//     once: true
// });

// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // Masquer le loader et l'overlay
    setTimeout(function() {
        const loader = document.querySelector('.loader');
        const overlayer = document.getElementById('overlayer');
        if (loader) loader.style.opacity = '0';
        if (overlayer) overlayer.style.opacity = '0';
        setTimeout(function() {
            if (loader) loader.style.display = 'none';
            if (overlayer) overlayer.style.display = 'none';
        }, 600); // Correspond à la durée de "slow" en jQuery
    }, 200);

    // Fonction pour cloner le menu
    const siteMenuClone = function() {
        const cloneNavs = document.querySelectorAll('.js-clone-nav');
        cloneNavs.forEach(function(cloneNav) {
            const clone = cloneNav.cloneNode(true);
            clone.className = 'site-nav-wrap';
            const mobileMenuBody = document.querySelector('.site-mobile-menu-body');
            if (mobileMenuBody) mobileMenuBody.appendChild(clone);
        });

        // Ajouter les flèches pour les sous-menus
        setTimeout(function() {
            let counter = 0;
            const hasChildrenItems = document.querySelectorAll('.site-mobile-menu .has-children');
            hasChildrenItems.forEach(function(item) {
                const arrow = document.createElement('span');
                arrow.className = 'arrow-collapse collapsed';
                arrow.setAttribute('data-toggle', 'collapse');
                arrow.setAttribute('data-target', '#collapseItem' + counter);
                item.prepend(arrow);

                const ul = item.querySelector('ul');
                if (ul) {
                    ul.className = 'collapse';
                    ul.id = 'collapseItem' + counter;
                    counter++;
                }
            });
        }, 1000);

        // Gestion du clic sur les flèches
        document.body.addEventListener('click', function(e) {
            if (e.target.classList.contains('arrow-collapse')) {
                e.preventDefault();
                const collapseElement = e.target.closest('li').querySelector('.collapse');
                if (collapseElement && collapseElement.classList.contains('show')) {
                    e.target.classList.remove('active');
                } else {
                    e.target.classList.add('active');
                }
            }
        });

        // Gestion du redimensionnement de la fenêtre
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768 && document.body.classList.contains('offcanvas-menu')) {
                document.body.classList.remove('offcanvas-menu');
            }
        });

        // Gestion du menu mobile (toggle)
        document.body.addEventListener('click', function(e) {
            if (e.target.classList.contains('js-menu-toggle')) {
                e.preventDefault();
                if (document.body.classList.contains('offcanvas-menu')) {
                    document.body.classList.remove('offcanvas-menu');
                    const toggles = document.querySelectorAll('.js-menu-toggle');
                    toggles.forEach(function(toggle) {
                        toggle.classList.remove('active');
                    });
                } else {
                    document.body.classList.add('offcanvas-menu');
                    const toggles = document.querySelectorAll('.js-menu-toggle');
                    toggles.forEach(function(toggle) {
                        toggle.classList.add('active');
                    });
                }
            }
        });

        // Clic en dehors du menu mobile
        document.addEventListener('mouseup', function(e) {
            const container = document.querySelector('.site-mobile-menu');
            if (container && !container.contains(e.target)) {
                if (document.body.classList.contains('offcanvas-menu')) {
                    document.body.classList.remove('offcanvas-menu');
                    const toggles = document.querySelectorAll('.js-menu-toggle');
                    toggles.forEach(function(toggle) {
                        toggle.classList.remove('active');
                    });
                }
            }
        });
    };

    // Appel de la fonction
    siteMenuClone();
});
