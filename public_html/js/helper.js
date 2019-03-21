
$(document).ready(function () {

    webdomain = function(){
        return "DK";
    }

    weburl= function () {
        return "http://intelrobotics.local/";
    };

    apiurl = function () {
        return "http://api.intelrobotics.local/";
    };

    //Request to API
    request= function (endpoint, method, data, callback) {

        $.ajax({
            type: method,
            url: apiurl() + endpoint,
            data: data,
            success: function (result) {
                callback(result)
            },
            error: function (result) {
                console.log(result);
            }
        })
    }


    $("#mainnavbar> div > ul > li > a").each(function (e, t) {

        if (t.href === window.location.href){
            $($(this).closest("li")).addClass("active");
        }
    })


});