import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination, Scrollbar } from 'swiper/modules';
// // import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import 'swiper/css/autoplay';

const swiper_menu = new Swiper('.Swiper_menu', {
    modules: [Navigation, Pagination, Scrollbar, Autoplay],
    spaceBetween: 30,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    // pagination: {
    //     el: '.swiper-pagination',
    //     clickable: true,
    //     dynamicBullets: true,
    // },
    // mousewheel: true,
    // scrollbar: {
    //     el: '.swiper-scrollbar',
    //     draggable: true
    // },
    grabCursor: true,
    // autoHeight: true,
    slidesPerView: 1,
    // если меньше слайдов
    // watchOverflow: true,
    // бесконечность
    loop: true,
    //Кол дублируюших слайдов
    // loopedslides
    // freeMode: true,
    // autoplay:{
    //     delay:1000,
    //     // stopOnLastSlide: true,
    //     // disableOnInteraction:false
    // },
    speed: 800,
    breakpoints: {
        1500: {
            slidesPerView: 4,
        },
        1100: {
            slidesPerView: 3,
        },
        740: {
            slidesPerView: 2,
        },
        300: {
            slidesPerView: 1,
        }
    }
});

const swiper_promo = new Swiper('.Swiper_promo', {
    modules: [Navigation, Autoplay],
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true,
    speed: 10000,
    autoplay:{
        delay:3000,
        disableOnInteraction:true,
    },
});