//dropdown list


// dlist[0].addEventListener("click", () =>{
//     for(let i=0; i<dlist.length; i++){
//         ddown[i].style.display = "block";
//     }
// })
function dropdownlist(){
    // const dlist = document.querySelector('.dlist');
    const ddown = document.querySelector('.dropdown');

    let displaySetting = ddown.style.display;
    if(displaySetting === 'block'){
        ddown.style.display = 'none'
    }
    else{
        ddown.style.display = 'block'
        ddown.style.transition= '2s ease-in';
        
    }
}