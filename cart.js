
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
        if (screen.availWidth <= 700) {
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




export default cart;