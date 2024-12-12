
window.my_hash = null;
// history.replaceState(null, null, " ");


// document.addEventListener("DOMContentLoaded", function () {
//     if (window.location.hash) {
//         // window.my_hash = window.location.hash;
//         window.history.replaceState(null, null, " ");
//         window.scrollTo(0, 0);
//     }
// });

if (window.location.hash) {
    window.my_hash = window.location.hash;
    window.history.replaceState(null, null, " ");
    window.scrollTo(0, 0);
    console.log(window.my_hash);
}
