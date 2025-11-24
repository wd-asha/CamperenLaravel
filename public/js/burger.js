let burger = document.getElementById("burger");
let mobile = document.getElementById("mobile");
let mobileClose = document.getElementById("mobileClose");
let mobileLinks = document.getElementsByClassName("mobile__menu_link");
const arr = Array.from(mobileLinks);

burger.addEventListener("click", function () {
    mobile.classList.add("mobile__open");
});
mobileClose.addEventListener("click", function () {
    mobile.classList.remove("mobile__open");
});

arr.forEach((item) => {
    item.addEventListener("click", function () {
        mobile.classList.remove("mobile__open");
    });
});