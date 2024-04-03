let app = new Vue ({
    el: "#app",
    data () {
        return {
            message: 'Прив'
        }
    },
});

// burger menu
const burgerButton = document.querySelector('.burger-button');
const burgerMenu = document.querySelector('.burger-menu')

function toggleBurger() {
  burgerButton.classList.toggle('active')
  burgerMenu.classList.toggle('active')
}

burgerButton.addEventListener('click', toggleBurger)