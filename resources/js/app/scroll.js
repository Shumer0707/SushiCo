
    // // Убираем автоматический скроллинг браузера
    // if (window.location.hash) {
    //     // Очищаем якорь из URL, чтобы предотвратить автоматический скроллинг
    //     const noScrollURL = window.location.href.split("#")[0];
    //     window.history.replaceState(null, null, noScrollURL);
    // }

    // // Обрабатываем плавный скроллинг при наличии хэша
    // const hash = window.location.hash;
    // if (hash) {
    //     const targetElement = document.querySelector(hash);
    //     if (targetElement) {
    //         // Прокручиваем плавно только после загрузки
    //         setTimeout(() => {
    //             targetElement.scrollIntoView({ behavior: "smooth" });
    //         }, 10000); // Небольшая задержка для гарантии, что все элементы страницы загрузились
    //     }
    // }

    // // Добавляем обработчик для кликов на ссылки
    // document.querySelectorAll('.smooth-scroll').forEach(link => {
    //     link.addEventListener('click', (e) => {
    //         e.preventDefault(); // Предотвращаем стандартное действие
    //         const targetHash = e.currentTarget.getAttribute('href').split("#")[1];
    //         const targetElement = document.getElementById(targetHash);
    //         if (targetElement) {
    //             targetElement.scrollIntoView({ behavior: "smooth" });
    //             // Обновляем URL без перезагрузки
    //             history.pushState(null, null, `#${targetHash}`);
    //         }
    //     });
    // });

// if (window.my_hash) {
//     console.log(window.my_hash);
// }
window.onload = () => {
    // console.log("window.onload");
    if(window.my_hash){
        document.querySelector(window.my_hash).scrollIntoView({ behavior: "smooth" });
    }
};


// if (window.location.hash) {
//     // Сохраняем якорь
//     const hash = window.location.hash;

//     // Убираем якорь из URL, чтобы отключить автоматическое поведение
//     const noScrollURL = window.location.href.split("#")[0];
//     window.history.replaceState(null, null, noScrollURL);

//     // Выполняем ваш код
//     console.log("Ваш скрипт выполняется до прокрутки!");

//     // Реализуем собственную прокрутку
//     const targetElement = document.querySelector(hash);
//     if (targetElement) {
//         setTimeout(() => {
//             targetElement.scrollIntoView({ behavior: "smooth" });
//         }, 100); // Задержка, чтобы все ресурсы успели загрузиться
//     }
// }

// if ('scrollRestoration' in history) {
//     // history.scrollRestoration = 'manual';
//     console.log('первый');

// }

// document.body.classList.add('prevent-scroll');

//     if (window.location.hash) {
//         const targetElement = document.querySelector(window.location.hash);
//         if (targetElement) {
//             targetElement.scrollIntoView({ behavior: "smooth" });
//         }
//         // Разблокируем прокрутку

//         console.log('prevent-scroll');
//     }
// document.body.classList.remove('prevent-scroll');


