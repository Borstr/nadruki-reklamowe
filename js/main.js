(function() {
    const nav = document.querySelector('#nav');
    const navBackground = document.querySelector('#navBackground');
    const menuBtn = document.querySelector('#menuBtn');
    const socials = document.querySelector('#socials');
    const menu = document.querySelector('#menu');

    let lastPageYoffset = 0;

    menuBtn.addEventListener('click', () => {
        if (nav.classList.contains('sidenav--right')) hideNavigation();
        else showNavigation();
    });

    navBackground.addEventListener('click', hideNavigation);

    window.addEventListener('scroll', () => {
        if ((
                pageYOffset > lastPageYoffset &&
                !socials.classList.contains('socials--up') &&
                socials.classList.contains('socials--down')
            ) ||
            nav.classList.contains('sidenav--right')) {
            hideSocials();
        } else if (pageYOffset < lastPageYoffset) showSocials();

        lastPageYoffset = pageYOffset;
    });

    function showNavigation() {
        hideSocials();

        nav.classList.remove('sidenav--left');
        nav.classList.add('sidenav--right');

        navBackground.classList.remove('sidenav__background--left');
        navBackground.classList.add('sidenav__background--right');
    }

    function hideNavigation() {
        nav.classList.remove('sidenav--right');
        nav.classList.add('sidenav--left');

        navBackground.classList.remove('sidenav__background--right');
        navBackground.classList.add('sidenav__background--left');
    }

    function hideSocials() {
        socials.classList.remove('socials--down');
        socials.classList.add('socials--up');

        menu.classList.remove('menu--down');
        menu.classList.add('menu--up');
    }

    function showSocials() {
        socials.classList.add('socials--down');
        socials.classList.remove('socials--up');

        menu.classList.add('menu--down');
        menu.classList.remove('menu--up');
    }
})();