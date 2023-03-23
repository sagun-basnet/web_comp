let togglebtn = document.querySelector(".togglebtn");
let navigation = document.querySelector(".navigation");
let main = document.querySelector("main");
let ul = document.querySelector("ul");
togglebtn.addEventListener("click", () => {
  main.classList.toggle("active");
  navigation.classList.toggle("active");
  ul.classList.toggle("active");
});

// let li = document.querySelectorAll(".navigation ul li");
// li.addEventListener("click", ()=>{
//   li.classList.toggle("hovered");
// })

// const currentloc = location.href;
// const menuItem = document.querySelectorAll(".navigation li");
// const menuItemText = document.querySelectorAll(".navigation span");
// for(let i=0; i<menuItem.length; i++){
//   // alert("what");
//   if(menuItem[i].href === currentloc){
//     menuItem[i].className = "hovered";
//     menuItemText[i].className = "hovered";
//   }
// }