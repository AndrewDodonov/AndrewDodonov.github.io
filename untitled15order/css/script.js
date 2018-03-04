
var menu = document.getElementsByClassName('nav_chr')[0];
var burger = document.getElementsByClassName('burger_menu')[0];
menu.addEventListener('click', function () {
    burger.style.display='block';
});

var close = document.getElementsByClassName('nav_close')[0];

close.addEventListener('click', function () {
    burger.style.display='none';
})