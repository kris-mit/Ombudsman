const hamburger = document.querySelector('#btnHamburger');
let nav = document.getElementById('nav');
let logo = document.getElementById('logo-hamburger');

hamburger.addEventListener('click', function() {
    if(hamburger.classList.contains('open')){
        hamburger.classList.remove('open');
        nav.classList.remove('responsive');
    } else {
        hamburger.classList.add('open');
        nav.classList.add('responsive');
        logo.style.cssText = "display: block; margin-bottom: 30px; width: 160px";
    }
})
