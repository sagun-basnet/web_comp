const btn = document.querySelectorAll('.btn');
const facultyContainer = document.querySelectorAll('.facultyContainer');
const bca = document.querySelector('.bca');
const bhm = document.querySelector('.bhm');
const bbs = document.querySelector('.bbs');
const bsw = document.querySelector('.bsw');
const bba = document.querySelector('.bba');
for(let i=0; i<btn.length; i++){
    btn[i].addEventListener("click", () => {
        const bname = btn[i].innerHTML;
        btn[i].classList.toggle('on');
        facultyContainer[i].classList.toggle('display');
        for(let j=0; j<btn.length; j++){
            if(j===i){
                continue;
            }
            btn[j].classList.remove('on');
            facultyContainer[j].classList.remove('display');
        }
        if(bca===bname.toLowerCase){
            
        }
    })
}