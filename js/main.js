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

//  modal window
var modal = document.querySelector(".modal");
var trigger = document.querySelector(".trigger");
var closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);