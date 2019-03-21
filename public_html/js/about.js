$(document).ready(function () {

    request("api/info/getAbout/" + webdomain(), "GET", "", function (result) {

        $("#abouttext").html(result.about.description);

        console.log(result);
    });

})