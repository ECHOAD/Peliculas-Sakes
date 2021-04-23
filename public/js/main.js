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
const linkColor = document.querySelectorAll('.nav__link');

function colorLink() {
    linkColor.forEach(l => l.classList.remove('active'));
    this.classList.add('active');
}

linkColor.forEach(l => l.addEventListener('click', colorLink));

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



$(document).ready(function() {
    var zindex = 10;

    $(".container.div.card").click(function(e) {
        e.preventDefault();

        var isShowing = false;

        if ($(this).hasClass("show")) {
            isShowing = true
        }

        if ($("div.cards").hasClass("showing")) {
            // a card is already in view
            $("div.card.show")
                .removeClass("show");

            if (isShowing) {
                // this card was showing - reset the grid
                $("div.cards")
                    .removeClass("showing");
            } else {
                // this card isn't showing - get in with it
                $(this)
                    .css({ zIndex: zindex })
                    .addClass("show");

            }

            zindex++;

        } else {
            // no cards in view
            $("div.cards")
                .addClass("showing");
            $(this)
                .css({ zIndex: zindex })
                .addClass("show");

            zindex++;
        }

    });
});