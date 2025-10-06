import "@popperjs/core";
window.$ = window.jQuery = require("jquery");
window.bootstrap = require("bootstrap");

$(document).ready(function () {
    console.log("ready!");

    $("span").click(function () {
        let url = $(this).attr("onclick");
        window.location.href = url;
    });
});
