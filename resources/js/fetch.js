const { forEach } = require("lodash");

    const mini_basket_batton_all_price_wraper = document.querySelector('.mini_basket_batton_all_price_wraper');
    const order_details = document.querySelector('#order_details');
    const all_price_wrapper = document.querySelector('#all_price_wrapper');
    const all_style = document.querySelector('#all_style');
    const mini_basket_catalog_wrapper = document.querySelector('.mini_basket_catalog_wrapper')
    const wraper_basket = document.querySelector('#wraper_basket');
    const wrapper = document.querySelector('#wrapper');
    const catalog = document.querySelector('#catalog');
    const block = document.querySelector('#block');
    const targets = ["count_btn", "close_btn", "add_btn"];

    function sendMain_GET(){
        if(wraper_basket){
            var route = `/fetch_vieu/wraper_basket/no`;
            sendView_GET(route, wraper_basket);
            var route = `/fetch_vieu/main/order_details/no`;
            sendView_GET(route, order_details);
        }
        var route = `/fetch_vieu/main.mini_basket_catalog_wrapper/no`;
        sendView_GET(route, mini_basket_catalog_wrapper);
        var route = `/fetch_vieu/main.all_style/no`;
        sendView_GET(route, all_style);
        var route = `/fetch_vieu/main.mini_basket_batton_all_price_wraper/no`;
        sendView_GET(route, mini_basket_batton_all_price_wraper);
        var route = `/fetch_vieu/main.all_price_wrapper/no`;
        sendView_GET(route, all_price_wrapper);
    }
    function close_and_countClick(e){
        countClick(e);
        targets.forEach( async function(element){
            if(e.target.id == element){
                block.classList.remove('display_none');
                // setTimeout(() => block.classList.add('display_none'), 1000);
                // let start = new Date().getTime();
                let id = e.target.id;
                let val = e.target.value;
                let name = e.target.name;
                let route = `/fetch_data/${val}/${name}/${id}`;
                await sendData_GET(route);
                sendVieuMenu_GET(val);
                sendMain_GET();
                // var end = new Date().getTime();
                // var time = end - start;
                // console.log('Время выполнения = ' + time);
                block.classList.add('display_none');
            }

        });

    }
    function countClick(e){
        if(e.target.id == 'count_btn'){
            let id = e.target.id;
            let val = e.target.value;
            let name = e.target.name;
            let basket_count_result = document.querySelector(`#basket_count_result_${val}`);
            let basket_count_result_all = document.querySelectorAll(`#basket_count_result_${val}`);
            if(name == 'plus'){
                var content_result = Number(basket_count_result.innerHTML) + 1;
            }
            if(name == 'minus'){
                if(Number(basket_count_result.innerHTML) > 1){
                    var content_result = Number(basket_count_result.innerHTML) - 1;
                }else{
                    var content_result = Number(basket_count_result.innerHTML);
                }
            }
            basket_count_result_all.forEach(function(element){
                element.innerHTML = content_result;
            });
        }
    }
    if(wrapper){
        wrapper.addEventListener('click', close_and_countClick);
    }
    async function sendView_GET(route, element) {
        fetch(route)
        .then(res => {
            if(!res.ok){
                console.log('Problem');
                return;
            }
            return res.text();
        })
        .then(data => {
            if(element.length > 1){
                element.forEach(function(e){
                    e.innerHTML = data;
                    console.log(data);
                });
            }
            element.innerHTML = data;
            console.log(data);
        })
        .catch((error => {
            console.log(error);
        }));
    };
    async function sendData_GET(route) {
        await fetch(route)
        .then(res => {
            if(!res.ok){
                console.log('Problem');
                return;
            }
            return res.text();
        })
        .then(data => {
            console.log(data);
        })
        .catch((error => {
            console.log(error);
        }));
    };
    function sendVieuMenu_GET(id){
        if(catalog){
            let catalog_niz_right = document.querySelectorAll(`#catalog_niz_right_${id}`);
            let route = `/fetch_vieu/main.catalog/${id}`;
            sendView_GET(route, catalog_niz_right)

        }
    }

















        // if(test){
    //     test.addEventListener("click", function(){
    //         route = "/fetch_post";
    //         sendRequest_POST(route, test_form);
    //     });
    // }
    // function sendRequest_POST(route, element) {
    //     const metaElements = document.querySelectorAll('meta[name="csrf-token"]');
    //     const csrf = metaElements.length > 0 ? metaElements[0].content : "";
    //     fetch(route, {
    //         method: "POST",
    //         headers: {
    //             "Content-Type": "application/json",
    //             "X-CSRF-Token": csrf
    //         },
    //         body: JSON.stringify({'1':'test'}),

    //     })
    //     .then(res => {
    //         if(!res.ok){
    //             console.log('Problem');
    //             return;
    //         }
    //         return res.json();
    //     })
    //     .then(data => {

    //         console.log(data);
    //         var result = JSON.stringify(data);
    //         console.log(result);
    //         console.log(JSON.parse(result));
    //     })
    //     .catch((error => {
    //         console.log(error);
    //     }));
    // };

 // if(basket_catalog_close){
    //     basket_catalog_close.forEach(function(button) {
    //         button.addEventListener('click', () => {
    //             let id = button.value;
    //             let route = `/fetch_get/${id}`;
    //             console.log(route);
    //             sendRequest_GET(route);
    //         });
    //     });
    // };
        // function serializeForm(formNode) {
    //     const { elements } = formNode
    //     const data = Array.from(elements)
    //         .filter((item) => !!item.name)
    //         .map((element) => {
    //         const { name, value } = element

    //         return { name, value }
    //         })
    //     return data;
    // }
