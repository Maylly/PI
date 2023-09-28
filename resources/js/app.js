console.log("[!] Loading script app.js");

import './header'

import imgLogo from '../img/logo.svg'
document.querySelectorAll('.logo-img').forEach((element) => {
    element.src = imgLogo;
})

import imgUrl from '../img/icons/loupe.svg'
document.querySelectorAll('.lupa-img').forEach((element) => {
    element.src = imgUrl;
})
