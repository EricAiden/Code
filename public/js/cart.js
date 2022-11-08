const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const dropDown = $$('.c-dropdown')
const showDropMenu = $$('.c-dropdown-menu');
console.log(showDropMenu);

function showDrop() {
     dropDown.forEach(event => {
        event.addEventListener('click', () =>{
            $('.c-dropdown-menu').classList.toggle('show')
        })
    });

}

