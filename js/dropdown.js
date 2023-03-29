function dropdownlist(i){
    // const dlist = document.querySelector('.dlist');
    const ddown = document.querySelectorAll('.dropdown');
        let displaySetting = ddown[i].style.display;
        if(displaySetting === 'block'){
            ddown[i].style.display = 'none'
        }
        else{
            ddown[i].style.display = 'block'
            ddown[i].style.transition= '2s ease-in';   
        }
}

function notiDropdownlist(){
    // const clicked = document.querySelector('.noti');
    const dives = document.querySelector('.dropdownNoti');
    if(dives.style.display === 'none'){
        dives.style.display = 'flex';
        dives.style.height = '22rem';
    }
    else{
        dives.style.display = 'none'
    }
}