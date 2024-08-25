let images = Array.from(document.querySelectorAll(".slider img"));
let bigimg = document.querySelector(".bigImg img");
let newLinkGlobal = "";
addEventListener("click", function (ele) {
    if (images.includes(ele.target)) {
        let link = ele.target.src;
        images.forEach((img) => img.classList.remove("activited"));
        ele.target.className += " activited";
        let list = link.split("");
        list.length = 44;
        let newLink = list.join("");
        newLink += ".jpg";
        newLinkGlobal = newLink;
        console.log(newLink);
        bigimg.src = newLink;
    }

})

let modalBig = document.querySelector(".modal-body");
let modalImg = document.createElement("img")
let modalButton = document.querySelector(".btn.btn-primary.modaling");
let modalfoo = document.querySelector(".modal-footer");
let buttonright = document.createElement("button");
let buttonleft = document.createElement("button");
let modal = document.querySelector(".modal-content");
buttonright.className = "buttonRight btn btn-light";
buttonleft.className = "buttonLeft btn btn-light";
buttonright.innerHTML = ">>";
buttonleft.innerHTML = "<<";

bigimg.addEventListener("click", function () {
    console.log("Clicked");
    modalBig.children.length = 0;
    modalImg.src = "images/image-product-1.jpg";
    modalImg.style.cssText = "width:450px;height:400px;object-fit:contain;";
    modalBig.appendChild(modalImg);
    modalfoo.style.cssText = "display:flex;flex-direction:row;justify-content:space-around; flex-wrap:nowrap;"
    for (let i = 0; i < modalfoo.children.length; i++) {
        modalfoo.children[i].style.cssText = "width:100px;height:100px;margin:10px;";
    }
    modalBig.appendChild(buttonright);
    modalBig.appendChild(buttonleft);

})
let counter = 1;
buttonright.addEventListener("click", function () {
    modalImg.src = `images/image-product-${(counter % 4) + 1}.jpg`;
    counter++;

})
buttonleft.addEventListener("click", function () {
    modalImg.src = `images/image-product-${(counter % 4) + 1}.jpg`;

    counter++;

})

let inc = document.querySelector(".plus");
let dec = document.querySelector(".min");
let quantity = document.querySelector(".payout");
let counterPay = 0;
inc.addEventListener("click", () => {

    counterPay++;
    quantity.innerHTML = counterPay;
})
dec.addEventListener("click", () => {
    if (counterPay > 0) {
        counterPay--;
        quantity.innerHTML = counterPay;
    }


})
let cartIconNot = document.querySelector(".piller");
let CartBut = document.querySelector(".add");
CartBut.addEventListener("click", function () {
    console.log(cartIconNot);
    cartIconNot.innerHTML = counterPay;
})