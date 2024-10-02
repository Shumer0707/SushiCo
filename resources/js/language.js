const { forEach } = require("lodash");

const lang_button = document.querySelectorAll('.lang_button');

lang_button.forEach(function(element){
    element.onclick = function (evt) {
    evt.preventDefault();
    var route = `/fetch_lang/${element.name}`;
    send_GET(route)
    // alert(element.name);
  };
});

async function send_GET(route) {
    await fetch(route)
    .then(res => {
        if(!res.ok){
            console.log('Problem');
            return;
        }
        return res.json();
    })
    .then(data => {
        if (data.success) {
            // console.log(data);
            location.reload();
        }
    })
    .catch((error => {
        console.log(error);
    }));
};