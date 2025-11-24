let loginTab = document.getElementById("loginTab");
let registerTab = document.getElementById("registerTab");
let resetPasswordTab = document.getElementById("resetPasswordTab");
let popupTextLogin = document.getElementById("popupTextLogin");
let popupTextReset = document.getElementById("popupTextReset");
let popupTextRegister = document.getElementById("popupTextRegister");

resetPasswordTab.addEventListener("click", function () {
    popupTextRegister.classList.remove("display-block");
    popupTextLogin.classList.remove("display-block");
    popupTextReset.classList.add("display-block");
});

loginTab.addEventListener("click", function () {
    popupTextRegister.classList.remove("display-block");
    popupTextLogin.classList.add("display-block");
    popupTextReset.classList.remove("display-block");
});

registerTab.addEventListener("click", function () {
    popupTextRegister.classList.add("display-block");
    popupTextLogin.classList.remove("display-block");
    popupTextReset.classList.remove("display-block");
});