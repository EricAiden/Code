const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const cartBtn = $('.btn-cart')
const noCart = $('.wrap');
const header = $('.header-search');

const notifyBtn = $('.btn-notify');
const containerNotify = $('.container-notify');

const userBtn = $('.img-user');
const userMenu = $('.header-user');

window.addEventListener('load', () => {
    cartBtn.addEventListener('click', () =>{
        noCart.classList.toggle('show');
        containerNotify.classList.remove('show');
        userMenu.classList.remove('show');
    });

    notifyBtn.addEventListener('click', () => {
        containerNotify.classList.toggle('show');
        noCart.classList.remove('show');
        userMenu.classList.remove('show');
    });

    userBtn.addEventListener('click', () => {
        userMenu.classList.toggle('show');
        containerNotify.classList.remove('show');
        noCart.classList.remove('show');
    });
});


