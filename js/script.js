
function init(){
var d = new Date();
var e= d.getMonth()+1;
var e1 = document.body.getElementsByTagName("p");
for (var i=0; i<e1.length; i++){
if(e1[i].className=="date"){e1[i].innerHTML=("Šodienas datums ir "+d.getDate()+"/"+e+"/"+d.getFullYear());}								
}
}