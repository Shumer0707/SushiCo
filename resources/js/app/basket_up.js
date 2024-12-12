// const { constant } = require("lodash");
const backToTop = document.querySelector(".up_button");
const mini_basket_batton = document.querySelector(".mini_basket_batton_container");
const header_menu_logo = document.querySelector(".header_menu_logo");
const mini_basket = document.querySelector(".mini_basket");
const mini_basket_plug = document.querySelector(".mini_basket_plug");
const mini_basket_batton_close = document.querySelector(".mini_basket_batton_close");
if(backToTop){
    // document.addEventListener("DOMContentLoaded", function () {
        // console.log("DOMContentLoaded");

        window.addEventListener("scroll", function () {
            // var scroll = window.scrollY;
            if (window.scrollY > 150) {
                // backToTop.style.display = "flex";
                backToTop.classList.add("_active-up");
                header_menu_logo.classList.add("_active-up");
                mini_basket_batton.classList.add("_active-up");
            } else {
                // backToTop.style.display = "none";
                backToTop.classList.remove("_active-up");
                header_menu_logo.classList.remove("_active-up");
                mini_basket_batton.classList.remove("_active-up");
            }
        });
        // Плавная прокрутка при клике на кнопку
        // backToTop.addEventListener("click", function (event) {
        //   event.preventDefault();
        //   window.scrollTo({ top: 0, behavior: "smooth" });
        // });
    // });
}
const array = [mini_basket_batton, mini_basket_batton_close];
if(mini_basket){
    for (let i = 0; i < array.length; i++) {
        // const i = array[i];
        array[i].addEventListener("click", function (){
            document.body.classList.toggle('_lock');
            mini_basket.classList.toggle('_active_right');
            backToTop.classList.toggle('_active_right_button');
            mini_basket_batton.classList.toggle('_active_right_button');
            mini_basket_plug.classList.toggle('_active_right');
            mini_basket_batton_close.classList.toggle('_active_right_button');
        });

    }

}

