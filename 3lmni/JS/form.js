var info=document.getElementsByClassName("input");
var error=document.getElementsByClassName("error");
var form=document.getElementsByClassName("form");
var filternom =/^[0-9]+$/;
var filteremail =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
function next(num){
  if (num==0){
  for(let i=0;i<5;i++){
    if(info[i].value==""){
      error[i].style.display="block";;
    }else{
      error[i].style.display="none";
  }
if(filternom.test(info[2].value)==false){
error[2].style.display="block";
}
if(filteremail.test(info[3].value)==false){
error[3].style.display="block";
}else{

  form[1].style.display="inline-block";
}
}
}else {
    for(let i=5;i<10;i++){
      if(info[i].value==""){
        error[i].style.display="block";;
      }else{
        error[i].style.display="none";
          form[2].style.display="inline-block";
    }
}
}
}
