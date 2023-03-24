let togglebtn = document.querySelector(".togglebtn");
let navigation = document.querySelector(".navigation");
let main = document.querySelector("main");
let ul = document.querySelector("ul");
togglebtn.addEventListener("click", () => {
  main.classList.toggle("active");
  navigation.classList.toggle("active");
  ul.classList.toggle("active");
});