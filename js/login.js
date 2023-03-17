let loginBtn = document.querySelector(".login");
let blurback = document.querySelector(".login_div");
let close = document.querySelector(".btn_close");
let form = document.querySelector("#login");
var allInput = form.querySelectorAll("input[type='text'],input[type='password']");

loginBtn.addEventListener("click", () => {
  blurback.classList.add("active");
});

close.addEventListener("click", () => {
  blurback.classList.remove("active");
//   blurback.style.display = "none";
  var i;
  for(i=0;i<allInput.length;i++){
    allInput[i].value ="";
  }
});
