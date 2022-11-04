const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const cartBtn = $('.btn-cart')
const noCart = $('.wrap');
console.log(noCart);
const header = $('.header-search');
console.log(header);

const notifyBtn = $('.btn-notify');
const containerNotify = $('.container-notify');
console.log(containerNotify);

window.addEventListener('load', () => {
    cartBtn.addEventListener('click', () =>{
        noCart.classList.toggle('show');
        containerNotify.classList.remove('show');
    });

    notifyBtn.addEventListener('click', () => {
        containerNotify.classList.toggle('show');
        noCart.classList.remove('show');
    })
});
