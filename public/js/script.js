const hamburger = document.querySelector('.hamburger');
const navbarList = document.querySelector('.navbar__list');
hamburger.addEventListener('click', function(e) {
    e.preventDefault()
    navbarList.classList.toggle('open')
})