// alert("asdfasdf");
var noData = document.querySelector("#noData");
var tableData = document.querySelector("#table-data");
var searchId = document.querySelector("#searchId");
searchId.oninput = function(){ //if output should comes after clicking button than use btn.click 
  searchFun();
}
function searchFun(){
  var tr = tableData.querySelectorAll("tr");
  var filter = searchId.value.toLowerCase();
  var i;
  for(i = 0; i<tr.length;i++){
    var td = tr[i].getElementsByTagName("td")[1];
    var id = td.innerHTML;
    if(id.toLowerCase().indexOf(filter) > -1){
      tr[i].style.display = "";
      
    }else{
        tr[i].style.display = "none";
    }
    var tbody = document.querySelector('table tbody');
    var trs = tbody.querySelector('tr');

    // Check if the tbody is displayed
    if (getComputedStyle(trs).display === 'none') {
        noData.style.display = 'flex';
    }
    else{
        noData.style.display = 'none';
    }
}
}
if (getComputedStyle(trs).display === 'none') {
  noData.style.display = 'flex';
}