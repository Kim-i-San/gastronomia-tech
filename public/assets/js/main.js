document.addEventListener('DOMContentLoaded', () => {

    const header = document.querySelector('.site-header');
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const menuLinks = document.querySelectorAll('.main-nav a, .nav-contact');

    if (!header || !menuToggle) {
        return;
    }

    menuToggle.addEventListener('click', () => {

        const isOpen = header.classList.toggle('menu-open');

        menuToggle.setAttribute(
            'aria-expanded',
            isOpen ? 'true' : 'false'
        );

    });

    menuLinks.forEach((link) => {

        link.addEventListener('click', () => {

            header.classList.remove('menu-open');
            menuToggle.setAttribute('aria-expanded', 'false');

        });

    });

});