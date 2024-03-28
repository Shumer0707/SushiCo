const isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return(
            isMobile.Android() ||
            isMobile.BlackBerry() ||
            isMobile.iOS() ||
            isMobile.Opera() ||
            isMobile.Windows());
    }
}
// console.log(navigator.userAgent);
// console.log(isMobile.any());
if(isMobile.any()){
    document.body.classList.add('_touch');
}else{
    document.body.classList.add('_pc');
}
var header_menu_body = document.querySelector(".header_menu_body");
const header_steaky = document.querySelector(".header_menu_sticky");
const menuBody = document.querySelector('.header_menu_body');
const iconMenu = document.querySelector('.header_menu_icon');
if(iconMenu){
    iconMenu.addEventListener("click", function(e) {
        document.body.classList.toggle('_lock');
        iconMenu.classList.toggle('_active');
        menuBody.classList.toggle('_active');
        position_y = header_steaky.getBoundingClientRect();
        header_menu_body.style.paddingTop = position_y.y + 100 +'px';
    })
}
const linkMenu = document.querySelector(".header_menu_link");
if(linkMenu){
    linkMenu.addEventListener("click", function(e) {
        document.body.classList.toggle('_lock');
        iconMenu.classList.toggle('_active');
        menuBody.classList.toggle('_active');
    })
}

// if(menuBody){
//     document.addEventListener("DOMContentLoaded", function () {
//         window.addEventListener("scroll", function () {
//             position_y = header_steaky.getBoundingClientRect();
//             header_menu_body.style.paddingTop = position_y.y + 'px';
//             console.log(position_y.y);
//         });

//     });
// }