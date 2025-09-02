
window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    if (window.scrollY > 50) { // لما تنزل أكتر من 50px
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
const menuToggle = document.querySelector(".menu-toggle");
const navMenu = document.querySelector("header ul");

menuToggle.addEventListener("click", () => {
    navMenu.classList.toggle("active");
    menuToggle.classList.toggle("active");
});

window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    if (window.scrollY > 50) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
var owl = $('.owl-carousel');
owl.owlCarousel({
    margin: 10,
    loop: true,
    autoplay: true,
    autoplayTimeout: 1000,
        autoplayHoverPause: true, // توقف عند الهوف
    smartSpeed: 1000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

new WOW().init();
