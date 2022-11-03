const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const cartBtn = $('.btn-cart')
const noCart = $('.wrap');
window.addEventListener('load', () => {
    cartBtn.addEventListener('click', () =>{
        noCart.classList.toggle('show');
    });
});
