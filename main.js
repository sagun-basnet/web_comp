var line = document.querySelector("#line");
var close = document.querySelector("#close");
var nav = document.querySelector(".botton");
var blure = document.querySelector(".blure");

line.addEventListener('click', () =>{
    nav.classList.toggle('active');
    line.style.display = 'none';
    close.style.display = 'block'; 
    blure.style.display = 'block';
});

close.addEventListener('click', ()=>{
    nav.classList.toggle('active');
    line.style.display = 'block';
    close.style.display = 'none'; 
    blure.style.display = 'none';
})
