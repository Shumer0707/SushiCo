{{-- <div class="language-selector">
    <select id="language-dropdown" onchange="changeLanguage()">
        <option value="ro" selected>Română</option>
        <option value="ru"><img src="img/flags/ru.png" alt=""></option>
    </select>
</div>
<style>
    .language-selector {
position: absolute;
top: 10px;
right: 10px;
z-index: 10;
}

select {
padding: 5px;
font-size: 16px;
}
</style> --}}

<div class="language-selector">
    <a href="" class="lang_button" name = 'ro'>
        <img src={{asset('img/flags/ro.png')}} alt="Română" title="Română">
    </a>
    <a href="" class="lang_button" name = 'ru'>
        <img src={{asset('img/flags/ru.png')}} alt="Русский" title="Русский">
    </a>
</div>
<style>
.language-selector {
    display: flex;
    gap: 10px;
    z-index: 10;
    position: absolute;
    padding: 10px;
    right: 0;
}
.language-selector img {
    width: 25px;
    height: auto;
    cursor: pointer;
    transition: transform 0.2s ease;
}
.language-selector img:hover {
    transform: scale(1.1);
}
</style>