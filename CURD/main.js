let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector("main");
let ul = document.querySelector("ul");
toggle.addEventListener("click", () => {
  main.classList.toggle("active");
  navigation.classList.toggle("active");
  ul.classList.toggle("active");
});

let list = document.querySelectorAll(".navigation li");
function activeLink() {
  list.forEach((item) => item.classList.remove("hovered"));
  this.classList.add("hovered");
}
list.forEach((item) => item.addEventListener("mouseover", activeLink));
// alert("hey")