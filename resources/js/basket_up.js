// const { constant } = require("lodash");
const backToTop = document.querySelector(".up_button");
const header_menu_logo = document.querySelector(".header_menu_logo");
if(backToTop){
    document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener("scroll", function () {
            // var scroll = window.scrollY;
        if (window.scrollY > 150) {
            // backToTop.style.display = "flex";
            backToTop.classList.add("_active-up");
            header_menu_logo.classList.add("_active-up");
        } else {
            // backToTop.style.display = "none";
            backToTop.classList.remove("_active-up");
            header_menu_logo.classList.remove("_active-up");
        }
        });
        // Плавная прокрутка при клике на кнопку
        // backToTop.addEventListener("click", function (event) {
        //   event.preventDefault();
        //   window.scrollTo({ top: 0, behavior: "smooth" });
        // });
    });
}

