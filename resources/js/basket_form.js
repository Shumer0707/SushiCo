const { values } = require("lodash");

// const basket_form_btn = document.querySelector('#basket_form_btn');
const personal_data_address = document.querySelector('#personal_data_address');
const basket_form_wraper = document.querySelector('#basket_form_wraper');
// const list_names = ['details','address','logistics','phone_confirm','phone','email','username'];
const phone = document.querySelector('#phone');
const address = document.querySelector('#address');
const basket_form_btn_container_error = document.querySelector('.basket_form_btn_container_error');

function formData(){
    const formData = new FormData(document.querySelector('#basket_form'));
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
    // for (let pair of form_data) {
    //     console.log(console.log(`Ключ = ${pair[0]}, значение = ${pair[1]}`));
    //   }
}
function followLogistics(e){
    // var logistics = basket_form.logistics.value;
    // if(e.target.id == 'delivery' || e.target.id == 'self_pickup'){
    if(e.target.value == 'delivery'){
        personal_data_address.classList.remove('display_none');
        // personal_data_address.setAttribute('required');
        address.removeAttribute('disabled');
    }else if(e.target.value == 'self_pickup'){
        personal_data_address.classList.add('display_none');
        // personal_data_address.removeAttribute('required');
        address.setAttribute('disabled', '');
    }
}
async function onblurOnfocus(){
    let form_data = formData();
    let all_name_form = allNameForm(form_data);
    // console.log(all_name_form);
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
                    obj_error.innerHTML = '';
                }
            };
        }
    });
}
function validateOnblur(obj, obj_error){
    if(!obj.value){
        obj.classList.add('error');
        obj_error.innerHTML = 'Обязательно к заполнению.';
    }else if(obj.value.length < 2){
        obj.classList.add('error');
        obj_error.innerHTML = 'Не менее двух символов.';
    }else if(obj.type == 'email' && !obj.value.includes('@', '.')){
        obj.classList.add('error');
        obj_error.innerHTML = 'Некоректный email.';
    }else if(obj.type == 'number' && obj.value.length < 8){
        obj.classList.add('error');
        obj_error.innerHTML = 'Не менее восьми символов.';
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

if(basket_form_wraper){
    wrapper.addEventListener('click', listenClick);
    onblurOnfocus();
}

function sendRequest_POST(route, data) {
        const metaElements = document.querySelectorAll('meta[name="csrf-token"]');
        const csrf = metaElements.length > 0 ? metaElements[0].content : "";
        fetch(route, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-Token": csrf
            },
            body: JSON.stringify(data),
            // body: JSON.stringify({'test':'string_test','username' : 'Goga',
            // 'email' : 'aa@mail.ru',}),
        })
        .then(res => {
            if(!res.ok){
                console.log('Problem');
                return;
            }
            return res.json();
        })
        .then(data => {
            console.log(data);
        })
        .catch((error => {
            console.log(error);
            basket_form_btn_container_error.classList.remove('display_none');
        }));   
    };