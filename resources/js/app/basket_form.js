const { values } = require("lodash");

const basket_form_content = document.querySelector('#basket_form_content');
const phone = document.querySelector('#phone');
const basket_form_btn_container_error = document.querySelector('.basket_form_btn_container_error');
const basket_form = document.querySelector('#basket_form');
const out_form = document.querySelector('#out_form');

function formData(){
    let formData = new FormData(document.querySelector('#basket_form'));
    // formData.forEach((value, key) => console.log((`${key}: ${value}`)));
    // const arr = new Object();
    // const arr = new Map();
    arr = {};
    formData.forEach(function(value, key){
        arr[key] = value;
        // arr.set(key, value)
    });
    return arr;
}
function allNameForm(form){
    arr = [];
    for(key in form) {
        arr.push(key);
    }
    return arr;
}
function followLogistics(e){
    const personal_data_address = document.querySelector('#personal_data_address');
    const building_choice = document.querySelector('#building_choice');
    const address = document.querySelector('#address');
    const address_apartment = document.querySelector('#address_apartment');
    const address_home = document.querySelector('#address_home');
    if(e.target.value == 'delivery'){
        personal_data_address.classList.remove('display_none');
        building_choice.classList.remove('display_none');
        address.removeAttribute('disabled');
        address_apartment.removeAttribute('disabled');
        address_home.removeAttribute('disabled');
    }else if(e.target.value == 'self_pickup'){
        personal_data_address.classList.add('display_none');
        building_choice.classList.add('display_none');
        address.setAttribute('disabled', '');
        address_apartment.setAttribute('disabled', '');
        address_home.setAttribute('disabled', '');
    }

    if(e.target.value == 'apartment'){
        address_apartment.classList.remove('display_none');
        address.classList.remove('delivery_home');
        address_apartment.removeAttribute('disabled');
    }else if(e.target.value == 'house'){
        address_apartment.classList.add('display_none');
        address.classList.add('delivery_home');
        address_apartment.setAttribute('disabled', '');
    }
}
function listenOnblurOnfocus(){
    let form_data = formData();
    let all_name_form = allNameForm(form_data);
    all_name_form.forEach(element => {
        var obj = document.querySelector(`[name=${element}]`);
        var obj_error = document.querySelector(`#${element}_error`);
        if(obj.hasAttribute('required')){
            obj.onblur = function() {
                validateOnblur(obj, obj_error);
            };
            obj.onfocus = function() {
                if (this.classList.contains('error')) {
                    this.classList.remove('error');
                    if(obj_error != null){
                        obj_error.innerHTML = '';
                    }
                }
            };
        }
    });
}
function validateOnblur(obj, obj_error){
    obj.classList.remove('success');
    if(!obj.value && obj.type !== 'number'){
        obj.classList.add('error');
        obj_error.innerHTML = 'Обязательно к заполнению.';
    }else if(obj.value.length < 2 && obj.type == 'text'){
        obj.classList.add('error');
        obj_error.innerHTML = 'Не менее двух символов.';
    }else if(obj.type == 'email' && !obj.value.includes('@', '.')){
        obj.classList.add('error');
        obj_error.innerHTML = 'Некоректный email.';
    }else if(obj.type == 'tel' && obj.value.length < 8){
        obj.classList.add('error');
        obj_error.innerHTML = 'Не менее восьми символов.';
    }else if(obj.type == 'number' && obj.value.length < 1){
        obj.classList.add('error');
    }else if(obj.name == 'phone_confirm' && obj.value != phone.value){
        obj.classList.add('error');
        obj_error.innerHTML = 'Проверьте правельность номера.';
        // console.log('phone_confirm');
    }else{
        obj.classList.add('success');
        return 'ok';
    }
}
function listenClick(e){
    followLogistics(e);
    if(e.target.id == 'basket_form_btn'){
        let form_data = formData();
        let all_name_form = allNameForm(form_data);
        res = [];
        all_name_form.forEach(element => {
            var obj = document.querySelector(`[name=${element}]`);
            var obj_error = document.querySelector(`#${element}_error`);
            if(obj.hasAttribute('required')){
                res.push(validateOnblur(obj, obj_error));
            }
        });
        if(!res.includes(undefined)){
            var route = `/form_basket`;
            sendRequest_POST(route, form_data);
        }
    }
}
if(basket_form_content){
    wrapper.addEventListener('click', listenClick);
    
    basket_form.addEventListener(
      "focus",
      function (e) {
        listenOnblurOnfocus();
      },
      true,
    );
}
function sendRequest_POST(route, data) {
        const metaElements = document.querySelectorAll('meta[name="csrf-token"]');
        const csrf = metaElements.length > 0 ? metaElements[0].content : "";
        fetch(route, {
            method: "POST",
            headers: {
                // "Content-Type": "application/json",
                "accept":"application/json",
                "X-CSRF-Token": csrf
            },
            // body: JSON.stringify(data)
            body: new FormData(basket_form)
            // body: new FormData(document.querySelector('#basket_form')),
            // body: JSON.stringify({'test':'string_test','username' : 'Goga',
            // 'email' : 'aa@mail.ru',}),
        })
        .then(res => {
            if(!res.ok){
                console.log('Problem');
                basket_form_btn_container_error.classList.remove('display_none');
                return;
            }
            // return res.text();
            return res.json();
        })
        .then(data => {
            // if(data == 1){
            //     viewOrderSucces();
            // }
            console.log(data);
        })
        .catch((error => {
            console.error('Fetch error:', error);
            basket_form_btn_container_error.classList.remove('display_none');
        }));   
};
function viewOrderSucces(){
    const basket_form_popup = document.querySelector('#basket_form_popup');
    const succes_order_basket = document.querySelector('#succes_order_basket');
    basket_form_popup.classList.add('display_none');
    succes_order_basket.classList.remove('display_none');
    
}