// import Tab from "./tab.js";

const menubtn = document.getElementById('menu-btn');
const navLinks = document.getElementById('nav-links');
const menuBtnIcon = menubtn.querySelector('i');

menubtn.addEventListener("click", (e) => {
    navLinks.classList.toggle('open')

    const isOpen = navLinks.classList.contains("open");
    menuBtnIcon.setAttribute("class", isOpen ? " ri-close-line" : "ri-menu-3-line");

});

navLinks.addEventListener("click", (e) => {
    navLinks.classList.remove("open");
    menuBtnIcon.setAttribute("class", "ri-menu-3-line");
});

const scrollRevealOption = {
    distance: '50px',
    origin: "top",
    duration: 1000,
};


    ScrollReveal().reveal(".header__image img", {
        ...scrollRevealOption,
    })
    ScrollReveal().reveal(".header__content h4 , header__content .section__header p", {
        ...scrollRevealOption,
        delay: 500,
    })

    ScrollReveal().reveal(".header__content p", {
        ...scrollRevealOption,
        delay: 1000,
    })
    ScrollReveal().reveal(".header__btn", {
        ...scrollRevealOption,
        delay: 1500,
    })


    // about container

    ScrollReveal().reveal(".about__image img", {
        ...scrollRevealOption,
        origin: "left"
    })
    ScrollReveal().reveal(".about__content .section__header", {
        ...scrollRevealOption,
        delay: 500,
    })
    ScrollReveal().reveal(".about__content .section__description", {
        ...scrollRevealOption,
        delay: 1000,
    })

    ScrollReveal().reveal(".about__card", {
        ...scrollRevealOption,
        delay: 1500,
        interval: 500,
    })
    ScrollReveal().reveal(".trainer__card", {
        ...scrollRevealOption,
        interval: 500,
    })



    ScrollReveal().reveal(".section__header, .section__description", {
        ...scrollRevealOption,
        delay: 500,
    })
    ScrollReveal().reveal(".class__card img", {
        ...scrollRevealOption,
        interval: 300,

    })


    ScrollReveal().reveal(".price__card", {
        ...scrollRevealOption,
        interval: 500,
    })


    ScrollReveal().reveal(".sermon__banner img", {
        ...scrollRevealOption,
        delay: 800,
    })

    ScrollReveal().reveal(".sermon__details div", {
        ...scrollRevealOption,
        interval: 500,
    })

    ScrollReveal().reveal(".gallery-quotes-content", {
        ...scrollRevealOption,
        delay: 1000,
    })


    ScrollReveal().reveal(".contact__image img", {
        ...scrollRevealOption,
        delay: 1500,
    })

    ScrollReveal().reveal(".form", {
        ...scrollRevealOption,
        interval: 1000,
    })
    ScrollReveal().reveal(".footer__col", {
        ...scrollRevealOption,
        interval: 500,
    })

    ScrollReveal().reveal(".gallery", {
        ...scrollRevealOption,
        delay: 800,
    })
    ScrollReveal().reveal(".gallery img", {
        ...scrollRevealOption,
        interval: 500,
    })
    ScrollReveal().reveal(".partners__cards .card", {
        ...scrollRevealOption,
        delay: 1000
    })

    ScrollReveal().reveal(".card img", {
        ...scrollRevealOption,
        interval: 1000,
    })

    ScrollReveal().reveal(".welcome__description", {
        ...scrollRevealOption,
        delay: 700,
    })
    ScrollReveal().reveal(".welcome__video video","thougth-container", {
        ...scrollRevealOption,
        delay: 1000,
    })
    ScrollReveal().reveal(".container-method",
        {
            ...scrollRevealOption,
            delay: 1000,
        })



// const controlTabs = document.querySelector('.js-controls');
// if (controlTabs) {
//     const tabPayement = new Tab();
//     tabPayement.control(controlTabs)
//     tabPayement.content(document.querySelector('.js-content'));
// }


