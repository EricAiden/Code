const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const cartBtn = $('.btn-cart')
const header = $('.header-search');

const notifyBtn = $('.btn-notify');
const containerNotify = $('.container-notify');

const userBtn = $('.img-user');
const userMenu = $('.header-user');

window.addEventListener('load', () => {

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


