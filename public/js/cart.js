
const dropDown = $$('.c-dropdown')
const showDropMenu = $$('.c-dropdown-menu');
console.log(showDropMenu);

dropDown.forEach(event => {
    event.addEventListener('click', () =>{
        $('.c-dropdown-menu').classList.toggle('show')
    })
});

