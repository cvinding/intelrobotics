
$(document).ready(function () {

    let products;

    function createProducts(title, id) {


        let cardimg = document.createElement("img");
        cardimg.className = "productimg card-img-bottom";
        cardimg.src = "/assets/productimg.png";

        let card = document.createElement("div");
        card.className = "card";

        let button = document.createElement("button");
        button.className = "products btn btn-success";
        button.type = "button";
        button.innerHTML = title;
        button.id = "product-" + id;

        card.appendChild(cardimg);

        button.appendChild(card);

        return button;

    }

    request("api/info/getProducts/" + webdomain(), "GET", "", function (result) {

        const output = $("#products-output");
        output.html("");

        products = result.products;

        for (let i = 0; i<result.products.length; i++){

            let product = createProducts(result.products[i].title, i);
            output.append(product);

        }
        $(".products").on("click", showModal);

    })


    function showModal() {

        const productid = $(this)[0].id.split("-")[1];

        $("#modaltitle").html(products[productid].title);
        $("#modalbody").html(products[productid].description);

        $("#productmodal").modal('show');



    }
})