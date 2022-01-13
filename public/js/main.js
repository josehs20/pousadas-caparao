/* trocar a navbar de cor ao rolar a tela */
var navbar = document.getElementById('navbar')
document.onscroll = function () {
    (window.pageYOffset >= 250) 
        ? navbar.style.background = "rgba(27, 27, 27, 1)"
        : navbar.style.background = "rgba(27, 27, 27, 0)"
}

/* ---------------------------- mostrar e esconder menu ---------------------------- */
var toggleMenu = document.getElementById('toggle-menu')
var navItems = document.getElementById('nav-items')
var menuIcon = document.querySelectorAll('.toggle-menu div')

toggleMenu.addEventListener("click", function(){
    navItems.classList.toggle('go-back')
    /* forEach para fazer o menu virar um X */
    menuIcon.forEach((line) => {
        line.classList.toggle(line.id)
    })
})
/* --------------------------- final mostrar e esconder menu --------------------------- */