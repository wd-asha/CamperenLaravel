let late = document.getElementById('late');
let cleaning = document.getElementById('cleaning');
let washer = document.getElementById('washer');
let fridge = document.getElementById('fridge');
let security = document.getElementById('security');
let linen = document.getElementById('linen');

let yourPrice = document.getElementById('yourPrice');
let totalPrice = document.getElementById('totalPrice');

// передача цены в скрытый input при загрузке страницы
totalPrice.value = yourPrice.textContent;

// наблюдение за изменениями цены
const observer = new MutationObserver(() => {
    totalPrice.value = yourPrice.textContent;
});

function servicesReset()
{
    late.checked = false;
    cleaning.checked = false;
    washer.checked = false;
    fridge.checked = false;
    security.checked = false;
    linen.checked = false;
}

function ChangePrice(e)
{
    total = 0;
    yourPriceNumber = Number(yourPrice.innerHTML);
    service = Number(e.target.parentNode.nextElementSibling.firstElementChild.innerHTML);
    if(e.target.checked)
    {
        total = yourPriceNumber + service;
        yourPrice.innerHTML = total;
    }else {
        total = yourPriceNumber - service;
        yourPrice.innerHTML = total;
    }
}

servicesReset();

late.addEventListener("change", ChangePrice);
cleaning.addEventListener("change", ChangePrice);
washer.addEventListener("change", ChangePrice);
fridge.addEventListener("change", ChangePrice);
security.addEventListener("change", ChangePrice);
linen.addEventListener("change", ChangePrice);

// наблюдаем *текстовую ноду* внутри span для изменения значения скрытого input
observer.observe(yourPrice, {
    childList: true,
    characterData: true,
    subtree: true
});

