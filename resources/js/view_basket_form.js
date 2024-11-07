
async function viewPopup(e){
    const basket_form_popup = document.querySelector('#basket_form_popup');
    if(e.target.id == 'out_form'){
        basket_form_popup.classList.remove('display_none');
        document.body.classList.toggle('_lock');
        
    }
    if(e.target.id == 'basket_form_plug'){
        basket_form_popup.classList.add('display_none');
        document.body.classList.toggle('_lock');
    }
}
if(wrapper){
    wrapper.addEventListener('click', viewPopup);
}