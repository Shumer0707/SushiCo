//-----------------------------------------Кнопка в промо---------------------------------------------------------------------------------------------------------------
const main = document.getElementById('main');
const scroller = main.querySelector('.scroller');
const nextBtn = main.querySelector('.btn.next');
const prevBtn = main.querySelector('.btn.prev');
const itemWidth = main.querySelector('.item').clientWidth;

nextBtn.addEventListener('click', scrollToNextItem);
prevBtn.addEventListener('click', scrollToPrevItem);
setInterval(scrollToNextItem,10000);
//-----------------------------------------Зациклинность-----------------------------------------------------------------
function scrollToNextItem() {
 if(scroller.scrollLeft < (scroller.scrollWidth - itemWidth)){
     // Позиция прокрутки расположена не в начале последнего элемента
     scroller.scrollBy({left:itemWidth, top: 0, behavior:'smooth'});
   }
 else{
     // Достигнут последний элемент. Возвращаемся к первому элементу, установив для позиции прокрутки 0
     scroller.scrollTo({left: 0, top: 0, behavior:'smooth'});
   }
}
function scrollToPrevItem() {
 if(scroller.scrollLeft != 0)
     // Позиция прокрутки расположена не в начале последнего элемента
     scroller.scrollBy({left: -itemWidth, top: 0, behavior:'smooth'});
 else
     // Это первый элемент. Переходим к последнему элементу, установив для позиции прокрутки ширину скроллера
      scroller.scrollTo({left: scroller.scrollWidth, top: 0, behavior:'smooth'});
}

//-----------------------------------------Кнопка в каталоге---------------------------------------------------------------------------------------------------------------
// const katalog_main_one = '.Katalog_main.one';
// const katalog_main_two = '.Katalog_main.two';
// const katalog_main_three = '.Katalog_main.three';
function KotlogBatton(){
      const katalog_main = document.querySelector('.Katalog_main');
      const katalog_skrol = katalog_main.querySelector('.Katalog_Skrol');
      const nextBtn_kotal = katalog_main.querySelector('.btn_kotal.next');
      const prevBtn_kotal = katalog_main.querySelector('.btn_kotal.prev');
      const katalog_1Width = katalog_main.querySelector('.Katalog').offsetWidth;

      nextBtn_kotal.addEventListener('click', scrollToNextKatalog);
      prevBtn_kotal.addEventListener('click', scrollToPrevKatalog);
      function scrollToNextKatalog(){
      katalog_skrol.scrollBy({left:katalog_1Width,top:0,behavior:'smooth'});
      // console.log(x);
      }
      function scrollToPrevKatalog(){
      katalog_skrol.scrollBy({left:-katalog_1Width,top:0,behavior:'smooth'});
      // console.log(x);
      }
      console.log(katalog_1Width);
}

KotlogBatton();
// KotlogBatton(katalog_main_two);
// KotlogBatton(katalog_main_three);


