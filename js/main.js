window.addEventListener('scroll',()=>{
    document.querySelector('nav').classList.toggle('window-scrolled',window.scrollY>0);
});
window.addEventListener('scroll',()=>{
    document.querySelector('nav').classList.toggle('window-scrolled-stop',window.scrollY>5750);
});

// typing animation script..................................
var typing = new Typed(".typing", {
    strings: ["A Face of Future"],
    typeSpeed: 100,
    backSpeed: 80,
    loop: true
});

// loading Animation............ 
let loader = document.querySelector('#preloader');


function pre_loading(){
    loader.style.display = 'none';
}
