const selectElement = function(element){
    return document.querySelector(element);
};

let menuToggler = selectElement('.menu-toggle');
let body = selectElement('body');
let navItem = selectElement('.nav-item')

menuToggler.addEventListener('click',function(){
    body.classList.toggle('open');
})


window.sr = ScrollReveal();

sr.reveal('.animate-left',{
    origin:'left',
    duration: 1000,
    distance: '25rem',
    delay:300
});

sr.reveal('.animate-right',{
    origin:'right',
    duration: 1000,
    distance: '25rem',
    delay:600
});

sr.reveal('.animate-up',{
    origin:'up',
    duration: 1000,
    distance: '25rem',
    delay:600
});

sr.reveal('.animate-bottom',{
    origin:'bottom',
    duration: 1000,
    distance: '25rem',
    delay:600
});