
$(document).ready(function(){

    function createNews(title, bodytext) {

        let cardtitle = document.createElement("h4");
        cardtitle.className = "card-title";
        cardtitle.innerHTML = title;

        let cardtext = document.createElement("p");
        cardtext.className = "card-text";
        cardtext.innerText = bodytext;

        let cardbody = document.createElement("div");
        cardbody.className = "card-body";

        cardbody.appendChild(cardtitle);
        cardbody.appendChild(cardtext);

        let card = document.createElement("div");
        card.className = "card";

        card.appendChild(cardbody);

        return card;
    }

    request("api/info/getExtNews/20/300/3/" + webdomain(), "GET", "", function (result) {

        const output = $("#news-output");
        output.html("");

        for (let i = 0; i<result.news.length; i++){

            output.append(createNews(result.news[i].title, result.news[i].description));
        }


    })



});

