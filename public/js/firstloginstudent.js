let username=document.querySelector(".username")
let password=document.querySelector(".password")
let btn =document.querySelector(".btn1")
error1=document.querySelector(".erorrus")
error2=document.querySelector(".erorrps")
btn.addEventListener("click",(eo) => {
    eo.preventDefault();
    if(username.value==''||username.value!=388 ){
    error1.classList.add("erorrusunh")
}
else if(password.value==''||password.value!=1998){
error2.classList.add("erorrpsunh")
}
       else if(username.value==388 && password.value==1998 ){
         
          window.location="firstpage.html"
      
        }})