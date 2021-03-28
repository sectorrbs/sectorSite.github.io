'use strict'

let burger = document.querySelector('.burger__btn');
let nav = document.querySelector('.nav');
let scrollTop = document.querySelector('.scroll__top');
let shadow = document.querySelector('.block__shadow');
let btnCall = document.querySelector('.header__btn');
let popup = document.querySelector('.header__popup');
let popupBtn = document.querySelector('.header__popup-btn');


burger.addEventListener('click', (e) => {
    nav.classList.toggle('open')
    burger.classList.toggle('active')
    if (burger.classList.contains('active')) {
        shadow.style.visibility = 'visible'
        shadow.style.opacity = '0.5'
        document.body.style.overflow = 'hidden'
    } else {
        shadow.style.visibility = 'hidden'
        shadow.style.opacity = '0'
        document.body.style.overflow = 'auto'
    }

});

scrollTop.addEventListener('click', (e) => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
});

shadow.addEventListener('click', (e) => {
    burger.classList.remove('active')
    nav.classList.remove('open')
    if (burger.classList.contains('active')) {
        shadow.style.visibility = 'visible'
        shadow.style.opacity = '0.5'
        document.body.style.overflow = 'hidden'
    } else {
        shadow.style.visibility = 'hidden'
        shadow.style.opacity = '0'
        document.body.style.overflow = 'auto'
    }

});

btnCall.addEventListener('click', (e) => {
    popup.classList.toggle('open')
});

popupBtn.addEventListener('click', () => {
    popup.classList.toggle('open')
    clearPopup()
});

window.addEventListener('click', (e) => {
    if (!e.target.parentNode.classList.contains('header__requestcall') && !e.target.parentNode.classList.contains('header__popup')) {
        popup.classList.remove('open')
    }
});

function clearPopup() {
    let inputs = popup.querySelectorAll('input[type="text"]');
    inputs.forEach(element => {
        setTimeout(function () {
            element.value = ''
        }, 1000)
    });
}