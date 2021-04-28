const showMenu = (toggleId, navbarId, mainId) => {
    const toggle = document.getElementById(toggleId),
        navbar = document.getElementById(navbarId),
        mainpadding = document.getElementById(mainId)

    if (toggle && navbar) {
        toggle.addEventListener('click', () => {
                // APARECER MENU
                navbar.classList.toggle('show')
                    // ROTATE TOGGLE
                toggle.classList.toggle('rotate')
                    // PADDING MAIN

                mainpadding.classList.toggle('expander')


            }


        )
    } else {
        mainpadding.classList.toggle('collapse')

    }


}
showMenu('nav-toggle', 'navbar', 'main')

// LINK ACTIVE COLOR



var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4,
    spaceBetween: 10,
    slidesPerGroup: 2,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});





//--------------------------------------------------------------