document.getElementById("btn__log-in").addEventListener("click", logIn)
document.getElementById("btn__register").addEventListener("click", register)
window.addEventListener("resize", pageWidth);
//Declaración de variables//

var container_login_register = document.querySelector(".container__login-register");
var form_login = document.querySelector(".form__login");
var form_register = document.querySelector(".form__register");
var behindBox_register = document.querySelector(".behind__box-register");
var behindBox_login = document.querySelector(".behind__box-login");

function pageWidth(){
    if(window.innerWidth > 850){
        behindBox_login.style.display = "block";
        behindBox_register.style.display = "block";
    } else {
        behindBox_register.style.display = "block";
        behindBox_register.style.opacity = "1";
        behindBox_login.style.display = "none";
        form_login.style.display = "block";
        form_register.style.display = "none";
        container_login_register.style.left = "0";
    }
}
pageWidth();

function logIn(){

    if(window.innerWidth > 850){
        form_register.style.display = "none";
        container_login_register.style.left = "10px";
        form_login.style.display = "block";
        behindBox_register.style.opacity = "1";
        behindBox_login.style.opacity = "0";
    } else {
        form_register.style.display = "none";
        container_login_register.style.left = "0px";
        form_login.style.display = "block";
        behindBox_register.style.display = "block";
        behindBox_login.style.display = "none";
    }
    
}

function register(){
    
    if(window.innerWidth > 850){
        form_register.style.display = "block";
        container_login_register.style.left = "410px";
        form_login.style.display = "none";
        behindBox_register.style.opacity = "0";
        behindBox_login.style.opacity = "1";
    } else {
        form_register.style.display = "block";
        container_login_register.style.left = "0px";
        form_login.style.display = "none";
        behindBox_register.style.display = "none";
        behindBox_login.style.display = "block";
        behindBox_login.style.opacity = "1";
    }
}