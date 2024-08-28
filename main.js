


/*
This is our ecommerce project And there are the commands with the comments underneath it 
somenew information
(
1- screen.availWidth => checks what is the current width of the device
2- window.location.href = full link , .pathname = the local page , .origin = the root
3- offetX, offsetY => the current x or y value 
4- finds the substring and check this .includes
5- delete a substring from the full string .replaces("string","target")


)
*/

// when you click on the image to let it the new big image
let images = Array.from(document.querySelectorAll(".slider img"));
let bigimg = document.querySelector(".bigImg img");
let newLinkGlobal = ""; // the most important part
let currentImage = 1; // this will be used for traversing through images
let counterPay = 0; // a number that saved to show the data
let pricing = document.querySelector(".price");

// window.onscroll = () => console.log(screen.availWidth);

// this is for the new width of the device

function githubDomain() {
    let url = window.location.origin;
    if (url.includes("github")) {
        return true;
    }
    else {
        return false;
    }
}
let items = [
    {
        data_set: 1,
        quantity: 0,
        price: `150.00`,
        discount: 10,
        url: "./images/image-product-1.jpg"
    },
    {
        data_set: 2,
        quantity: 0,
        price: `200.00`,
        discount: 30,
        url: "./images/image-product-2.jpg"
    },
    {
        data_set: 3,
        quantity: 0,
        price: `300.00`,
        discount: 40,
        url: "./images/image-product-3.jpg"
    },
    {
        data_set: 4,
        quantity: 0,
        price: `250.00`,
        discount: 60,
        url: "./images/image-product-4.jpg"
    }
]
let itemsBought = [

]
//http://127.0.0.1:5500/images/image-product-4.jpg
// https://bodeayman.github.io/SimpleE-Com/imag.jpg
let regex = /((https|http):\/\/(((\d{1,3}\.){3}\d{1,3}(:\d+)?)|(\w+.\w+.\w+))(\/SimpleE-Com)?|.?)\/images\/image-product-[0-4].jpg/
let regtrash = /((https|http):\/\/(((\d{1,3}\.){3}\d{1,3}(:\d+)?)|(\w+.\w+.\w+))(\/SimpleE-Com)?|.?)\/images\/icon-delete.svg/

// items.forEach((e) => console.log(e["url"].match(regex)))



addEventListener("click", function (ele) {

    if (images.includes(ele.target)) {
        let link = ele.target.src;
        images.forEach((img) => img.classList.remove("activited"));
        ele.target.className += " activited";
        newLink = link.match(/images\/image-product-[0-4]-thumbnail.jpg/)[0].replace("-thumbnail", "");

        newLinkGlobal = newLink;
        // console.log(newLink);
        bigimg.src = newLink;
        currentImage = parseInt(newLink.match(/image-product-(\d+)\.jpg/)[1]);
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
let modalImgs = document.querySelectorAll(".modal-footer img");
buttonright.className = "buttonRight btn btn-light";
buttonleft.className = "buttonLeft btn btn-light";
buttonright.innerHTML = ">>";
buttonleft.innerHTML = "<<";

bigimg.addEventListener("click", function () {
    // console.log("Clicked");
    modalBig.children.length = 0;
    modalImg.src = `${window.location.origin}/images/image-product-1.jpg`;

    if (githubDomain()) {
        modalImg.src = `${window.location.origin}/${window.location.pathname}/images/image-product-1.jpg`;

    }

    modalImg.style.cssText = "width:450px;height:400px;object-fit:contain;";

    if (screen.availWidth <= 370) {
        modalImg.style.cssText = "width:300px;height:300px;"
        // modalImgs.forEach((e) => { e.style.setProperty("width", "10px"); e.style.setProperty("height", "10px") })
        console.log(modalImgs);
    }

    modalBig.appendChild(modalImg);

    modalfoo.style.cssText = "display:flex;flex-direction:row;justify-content:space-around; flex-wrap:nowrap;"

    modalBig.appendChild(buttonright);
    modalBig.appendChild(buttonleft);

})
let counter = 1;
buttonright.addEventListener("click", function () {
    modalImg.src = `${window.location.origin}/images/image-product-${(counter % 4) + 1}.jpg`;
    if (githubDomain()) {

        modalImg.src = `${window.location.origin}/${window.location.pathname}/images/image-product-${(counter % 4) + 1}.jpg`;

    }
    counter++;

})
buttonleft.addEventListener("click", function () {
    modalImg.src = `${window.location.origin}/images/image-product-${(counter % 4) + 1}.jpg`;
    if (githubDomain()) {
        modalImg.src = `${window.location.origin}/${window.location.pathname}/images/image-product-${(counter % 4) + 1}.jpg`;
    }

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
        cartIconNot = counterPay;
        quantity.innerHTML = 0;
        counterPay = 0;
    })
    // console.log(cartIconNot);
    cartIconNot.innerHTML = counterPay;
    itemsBought.push(items[currentImage - 1]);
})


// This code is under construction and it's made for navigation changing the color
let NavBars = Array.from(document.querySelector(".navbar-nav").children)
// console.log(NavBars);
addEventListener("click", function (e) {
    // console.log(e.target)
    if (e.target.className === "nav-link") {
        // console.log("CLicked");
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
        // console.log(counterPay);
        dropdownHeader.appendChild(textNode);



        // this is for the bought items category
        dropdownCartItems.style.cssText = `display:flex;flex-direction:column;justify-content:space-between`;
        dropdownCartItems.style.width = "100%";

        dropdownHeader.style.cssText = `margin-left:20px;margin-top:20px;font-size:10px;`;

        dropdownCart.appendChild(dropdownHeader);
        dropdownCart.appendChild(dropdownline);
        dropdownCart.appendChild(dropdownCartItems);
        if (screen.availWidth <= 370) {
            dropdownCart.style.cssText = `float:top;z-index:100;border:2px solid black;
            background-color:rgba(255,255,255,100%);width:300px;border-radius:50px;position:absolute;right:30px;bottom:40%;max-height: 300px; /* Adjust as needed */
                overflow-y: auto;padding:20px;
            
            `
        }
        else {
            dropdownCart.style.cssText = `float:top;z-index:100;border:2px solid black;
            background-color:rgba(255,255,255,100%);width:300px;border-radius:50px;position:absolute;right:150px;bottom:50%;max-height: 300px; /* Adjust as needed */
                overflow-y: auto;padding:20px;
            
            `
        }

        if (itemsBought.length !== 0) {
            itemsBought.forEach((obj) => {
                if (obj["quantity"] > 0) {
                    let singleItemInDrop = document.createElement("div");
                    singleItemInDrop.style.cssText = "display:flex;flex-direction:row;justify-content:space-between;align-items:center;";

                    let imageInCart = document.createElement("img");
                    imageInCart.src = obj["url"].match(regex)[0];
                    imageInCart.style.cssText = `width:100px;height:100px;object-fit:contain;`;
                    singleItemInDrop.appendChild(imageInCart);
                    singleItemInDrop.innerHTML += `<div>
                    <p>Sneakers</p>
                     <p>${obj["quantity"]} * ${obj["price"]} = ${obj["quantity"] * parseInt(obj["price"])}</p>
                    </div>`;
                    let trash = document.createElement("img");

                    trash.src = `${window.location.origin}/images/icon-delete.svg`;
                    if (githubDomain()) {
                        trash.src = `${window.location.origin}/${window.location.pathname}/images/icon-delete.svg`;

                    }
                    trash.addEventListener("click", function () {
                        this.parentElement.remove();
                    })
                    singleItemInDrop.appendChild(trash);


                    dropdownCartItems.appendChild(singleItemInDrop);

                }




            })
        }
        else {


        }


        dropdownCart.appendChild(dropdownButton);


        document.body.appendChild(dropdownCart);

        cartingActiv = true;
    }
    else if (cartingActiv) {
        itemsBought.length = 0;
        document.body.removeChild(dropdownCart);
        cartingActiv = false;
    }

})


