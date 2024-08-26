// when you click on the image to let it the new big image
let images = Array.from(document.querySelectorAll(".slider img"));
let bigimg = document.querySelector(".bigImg img");
let newLinkGlobal = ""; // the most important part
let currentImage = 1; // this will be used for traversing through images
let counterPay = 0; // a number that saved to show the data
let pricing = document.querySelector(".price");

let items = [
    {
        data_set: 1,
        quantity: 0,
        price: `150.00`,
        discount: 10,
        url: "http://127.0.0.1:5500/images/image-product-1.jpg"
    },
    {
        data_set: 2,
        quantity: 0,
        price: `200.00`,
        discount: 30,
        url: "http://127.0.0.1:5500/images/image-product-2.jpg"
    },
    {
        data_set: 3,
        quantity: 0,
        price: `300.00`,
        discount: 40,
        url: "http://127.0.0.1:5500/images/image-product-3.jpg"
    },
    {
        data_set: 4,
        quantity: 0,
        price: `250.00`,
        discount: 60,
        url: "http://127.0.0.1:5500/images/image-product-4.jpg"
    }
]
let itemsBought = [

]
//http://127.0.0.1:5500/images/image-product-4.jpg
// https://bodeayman.github.io/SimpleE-Com/imag.jpg


// let regex = /https:\/\/(bodeayman.github.io\/SimpleE-Com\/|127.0.0.1:5500\/)images\//


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
        currentImage = newLinkGlobal[43];
        // When you click on images
        quantity.innerHTML = items[currentImage - 1]["quantity"];
        counterPay = items[currentImage - 1]["quantity"];
        pricing.innerHTML = items[currentImage - 1]["price"];
        pricing.innerHTML += `<span 
        class="badge bg-secondary"
        style="position:relative;left:20px;">
        ${items[currentImage - 1]["discount"]}%
        </span>`;
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
inc.addEventListener("click", () => {

    counterPay++;
    quantity.innerHTML = counterPay;
    quantity.innerHTML = counterPay;
    items[currentImage - 1]["quantity"] = counterPay;
})
dec.addEventListener("click", () => {
    if (counterPay > 0) {
        counterPay--;
        quantity.innerHTML = counterPay;
        items[currentImage - 1]["quantity"] = counterPay;

    }


})

// This section is for if you have clicked on Add to the cart the pillar badge will work

let cartIconNot = document.querySelector(".piller");
let CartBut = document.querySelector(".add");
CartBut.addEventListener("click", function () {
    items.forEach(obj => {

        quantity.innerHTML = 0;
        counterPay = 0;
    })
    console.log(cartIconNot);
    cartIconNot.innerHTML = counterPay;
    itemsBought.push(items[currentImage - 1]);
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
        dropdownCartItems.style.cssText = `display:flex;flex-direction:column;justify-content:space-between`;
        dropdownCartItems.style.width = "100%";

        dropdownHeader.style.cssText = `margin-left:20px;margin-top:20px;font-size:10px;`;

        dropdownCart.appendChild(dropdownHeader);
        dropdownCart.appendChild(dropdownline);
        dropdownCart.appendChild(dropdownCartItems);
        dropdownCart.style.cssText = `float:right;z-index:100;border:2px solid black;
        background-color:rgba(255,255,255,100%);width:300px;border-radius:50px;position:absolute;right:150px;bottom:50%;max-height: 300px; /* Adjust as needed */
            overflow-y: auto;
        
        `
        itemsBought.forEach((obj) => {
            if (obj["quantity"] > 0) {
                let singleItemInDrop = document.createElement("div");
                singleItemInDrop.style.cssText = "display:flex;flex-direction:row;justify-content:space-between;align-items:center;";

                let imageInCart = document.createElement("img");
                imageInCart.src = obj["url"];
                imageInCart.style.cssText = `width:100px;height:100px;object-fit:contain;`;
                singleItemInDrop.appendChild(imageInCart);
                singleItemInDrop.innerHTML += `<div>
                <p>Sneakers</p>
                 <p>${obj["quantity"]} * ${obj["price"]} = ${obj["quantity"] * parseInt(obj["price"])}</p>
                </div>`;
                let trash = document.createElement("img");

                trash.src = "./images/icon-delete.svg";

                singleItemInDrop.appendChild(trash);


                dropdownCartItems.appendChild(singleItemInDrop);

            }

            console.log(itemsBought);


        })

        console.log(dropdownCart.style.bottom);



        dropdownCart.appendChild(dropdownButton);
        dropdownCart.style.bottom -= `${itemsBought.length * 2.5}%`;

        document.body.appendChild(dropdownCart);

        cartingActiv = true;
    }
    else if (cartingActiv) {
        itemsBought.length = 0;
        document.body.removeChild(dropdownCart);
        cartingActiv = false;
    }

})

addEventListener("click", (e) => {
    if (e.target == "<img src='./images/icon-delete.svg'>") {
        e.target.parentNode.parentNode.removeChild(e.target.parentNode);
    }
})