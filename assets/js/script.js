document.getElementById("btn__register").addEventListener("click", register)

//Declaración de variables//

var container_login_register = document.querySelector(".container__login-register");
var form_login = document.querySelector(".form__login");
var form_register = document.querySelector(".form__register");
var behindBox_register = document.querySelector(".behind__box-register");
var behindBox_login = document.querySelector(".behind__box-login");


function register(){
    form_register.style.display = "block";
    container_login_register.style.left = "410px";
    form_login.style.display = "none";
    behindBox_register.style.opacity = "0";
    behindBox_login.style.opacity = "1";
}

function register(){
    form_register.style.display = "block";
    container_login_register.style.left = "410px";
    form_login.style.display = "none";
    behindBox_register.style.opacity = "0";
    behindBox_login.style.opacity = "1";
}