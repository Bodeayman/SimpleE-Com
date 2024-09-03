
// This following variable is used to distinguish between the different types of elements in E-Commerce 
/*
<div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
This is the loader that i want to create */
let loaderDiv = document.createElement("div");
let ShownElements = document.createElement('div');

function createLoader() {
    loaderDiv.style.cssText = "text-align:center;margin-left:50%;margin-top:10%;"
    loaderDiv.className = "spinner-border";
    // loaderDiv.setAttributeNode("role");
    loaderDiv.setAttribute("role", "status");
    let spanning = document.createElement("span");
    spanning.className = "visually-hidden text-warning";
    spanning.appendChild(document.createTextNode("Loading..."));
    loaderDiv.appendChild(spanning);
    document.body.appendChild(loaderDiv);


}


async function callElements(regex) {
    createLoader(); // this is the beginning of the loading in the page

    ShownElements = document.createElement('div');
    ShownElements.style.cssText = "display:flex;flex-direction:row;flex-wrap:wrap;"
    const url = 'https://ali-express1.p.rapidapi.com/categories';
    const options = {
        method: 'GET',
        headers: {
            'x-rapidapi-key': '787daaab33msh8a34d6f0372e10ep156dabjsn66a7904e1365',
            'x-rapidapi-host': 'ali-express1.p.rapidapi.com'
        }
    };

    try {
        const response = await fetch(url, options);
        const result = await response.text();
        console.log(result);
    } catch (error) {
        console.error(error);
    }
    fetch('https://ali-express1.p.rapidapi.com/categories', { method: "GET", })
        .then(data => console.log(data))
        .then(res => res.json())
        .catch(err => console.error(`Error: ${err.message}`))
        .then(json => {
            console.log(json["products"]);
            // this will fetch the data and put them in the e-Commerce store
            loaderDiv.remove(); // if the json files are loaded the loader icon will be removed

            for (let i = 0; i < json["products"].length; i++) {
                if (json["products"][i]["title"].match(regex) !== null) {
                    let singleItem = document.createElement("div")
                    let imageItem = (document.createElement("img"));
                    let allSingleItem = document.createElement("div");
                    let availableWidth = screen.availWidth;
                    try {
                        if (json["products"][i]["images"][0] === undefined) {
                            throw (Error("This Image is Invalid"))
                        }
                        imageItem.src = json["products"][i]["images"][0];
                        imageItem.style.cssText = `width:100%;height:${(availableWidth / 5) - 5}px;object-fit:contain;`

                    }
                    catch (e) {
                        console.log(e);
                    }

                    /*
                    // singleItem.style.cssText = `transition:0.3s ease;`;
                    // singleItem.addEventListener("mousedown", function () {
                    //     singleItem.style.filter = `brightness(1.1);`;
                    //     singleItem.style.scale = 1.1;
                    // })
                    This is the section that related to the shit
                    */
                    singleItem.appendChild(imageItem);

                    allSingleItem.appendChild(singleItem);
                    let itemHeaderDiv = document.createElement("div")

                    itemHeaderDiv.appendChild(document.createTextNode(json["products"][i]["title"]));

                    itemHeaderDiv.style.cssText = `text-wrap: wrap;`
                    allSingleItem.style.cssText = `border:2px solid grey; margin:40px; width:20%; height:${availableWidth / 5}px; transition:0.3s ease;`;

                    allSingleItem.appendChild(itemHeaderDiv);

                    ShownElements.appendChild(allSingleItem);
                }

            }
        })

    document.body.appendChild(ShownElements);

}
callElements(/\w+/); // this will call the function by default

let searchButton = document.querySelector("form button");
let searchBar = document.querySelector("form input");
searchButton.addEventListener("click", function (e) {
    e.preventDefault();
    ShownElements.remove();
    callElements(new RegExp(String.raw`${searchBar.value}`, "g"));
    // this is how to insert a string inside the Regular Expression

});

