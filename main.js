// when you click on the image to let it the new big image
let images = Array.from(document.querySelectorAll(".slider img"));
let bigimg = document.querySelector(".bigImg img");
let newLinkGlobal = ""; // the most important part
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
// Activitating the modal and the images slideer
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
// this is for decreasing and increasing the items that you buy 
// didn't apply the adding elements or make it reset any way
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

// This section is for if you have clicked on Add to the cart the pillar badge will work
let itemsBought = [];

let cartIconNot = document.querySelector(".piller");
let CartBut = document.querySelector(".add");
CartBut.addEventListener("click", function () {
    console.log(cartIconNot);
    cartIconNot.innerHTML = counterPay;
})


// This code is under construction and it's made for navigation changing the color
let NavBars = Array.from(document.querySelector(".navbar-nav").children)
console.log(NavBars);
addEventListener("click", function (e) {
    console.log(e.target)
    if (e.target.className === "nav-link") {
        console.log("CLicked");
        NavBars.forEach((el) => el.classList.remove("navSelected"));
        e.target.classList.add("navSelected");
    }
})
// Creating a section to activite the cart dropdown menu;
let dropdownCart = document.createElement("div");
let dropdownHeader = document.createElement("h3");
let dropdownCartItems = document.createElement("div");
let textNode = document.createTextNode("Cart");
let dropdownButton = document.createElement("button");
let dropdownline = document.createElement("hr");

let countEle = 0;
dropdownButton.className = "btn btn-warning";
dropdownButton.appendChild(document.createTextNode("Checkout"));
dropdownButton.style.cssText = `
    margin:20px;
    padding:10px;
    text-align:center;
    width:80%;
    align-self:flex-end;

`

let cartingActiv = false;
let carting = document.querySelector(".cartIcon");
carting.addEventListener("click", function () {
    if (!cartingActiv) {
        console.log(counterPay);
        dropdownHeader.appendChild(textNode);



        // this is for the bought items category
        dropdownCartItems.style.cssText = `display:flex;flex-direction:row;justify-content:space-between`;
        dropdownCartItems.style.width = "100%";
        {



        }
        dropdownHeader.style.cssText = `margin-left:20px;margin-top:20px;font-size:10px;`;

        dropdownCart.appendChild(dropdownHeader);
        dropdownCart.appendChild(dropdownline);
        dropdownCart.appendChild(dropdownCartItems);
        dropdownCart.style.cssText = `float:right;z-index:100;border:2px solid black;
        background-color:rgba(255,255,255,50%);width:300px;height:153px;position:absolute;border-radius:50px;
        right:150px;display:flex;flex-direction:column;
        bottom:${65 - counterPay * 2.5}%;
        `


        dropdownCart.style.height = `${153 + counterPay * 20}px`;
        dropdownCart.appendChild(dropdownButton);

        document.body.appendChild(dropdownCart);

        cartingActiv = true;
    }
    else {
        document.body.removeChild(dropdownCart);
        cartingActiv = false;
    }

})