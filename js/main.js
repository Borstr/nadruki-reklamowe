// Header
(function() {
    const nav = document.querySelector('#nav');
    const navBackground = document.querySelector('#navBackground');
    const menuBtn = document.querySelector('#menuBtn');
    const socials = document.querySelector('#socials');
    const menu = document.querySelector('#menu');
    const chevron = document.querySelector('#chevron');

    let lastPageYoffset = 0;

    menuBtn.addEventListener('click', () => {
        if (nav.classList.contains('sidenav--right')) hideNavigation();
        else showNavigation();
    });

    navBackground.addEventListener('click', hideNavigation);

    window.addEventListener('scroll', () => {
        if ((pageYOffset < lastPageYoffset && socials.classList.contains('socials--down') && !socials.classList.contains('socials--up')) || nav.classList.contains('sidenav--right')) hideSocials();
        else if ((pageYOffset - lastPageYoffset) >= 15) showSocials();

        lastPageYoffset = pageYOffset;
    });

    function showNavigation() {
        socials.classList.remove('socials--down');
        menu.classList.remove('menu--down');

        addAndRemoveClasses([{
                el: nav,
                removeClass: 'sidenav--left',
                addClass: 'sidenav--right'
            },
            {
                el: navBackground,
                removeClass: 'sidenav__background--left',
                addClass: 'sidenav__background--right'
            },
            {
                el: chevron,
                removeClass: 'chevron--left',
                addClass: 'chevron--right'
            }
        ]);
    }

    function hideNavigation() {
        addAndRemoveClasses([{
                el: nav,
                removeClass: 'sidenav--right',
                addClass: 'sidenav--left'
            },
            {
                el: navBackground,
                removeClass: 'sidenav__background--right',
                addClass: 'sidenav__background--left'
            },
            {
                el: chevron,
                removeClass: 'chevron--right',
                addClass: 'chevron--left'
            }
        ]);
    }

    function hideSocials() {
        addAndRemoveClasses([{
                el: socials,
                removeClass: 'socials--down',
                addClass: 'socials--up'
            },
            {
                el: menu,
                removeClass: 'menu--down',
                addClass: 'menu--up'
            }
        ]);
    }

    function showSocials() {
        addAndRemoveClasses([{
                el: socials,
                removeClass: 'socials--up',
                addClass: 'socials--down'
            },
            {
                el: menu,
                removeClass: 'menu--up',
                addClass: 'menu--down'
            }
        ]);
    }

    function addAndRemoveClasses(classes) {
        classes.forEach(({ el, removeClass, addClass }) => {
            el.classList.remove(removeClass);
            el.classList.add(addClass);
        });
    }
})();