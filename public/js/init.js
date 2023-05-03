var version = document.currentScript.getAttribute("attr-cache-version");
var language = document.currentScript.getAttribute("attr-lang");
// get css links
var css_links = document.querySelector('.css-links').value;
console.log(css_links);
// get js links
var js_links = document.querySelector('.js-links').value;
console.log(js_links);

function loadCss(url) {
    var link = document.createElement("link");
    link.type = "text/css";
    link.rel = "stylesheet";
    link.href = url;
    document.getElementsByTagName("head")[0].appendChild(link);
}

loadCss("https://pro.fontawesome.com/releases/v5.10.0/css/all.css");

for(var i =0; i < css_links.length; i++){
    loadCss(css_links[i]);
}



requirejs.config({
    waitSeconds: 200, paths: {
        functions: "/js/functions.js?v=" + version,
        jquery: "/js/jquery/dist/jquery.min.js?v=" + version
        },

    shim: {
        functions: {
            deps: ["jquery"],
        }
    },
});

//Define dependencies and pass a callback when dependencies have been loaded
require(["jquery"], function ($) {
    jQuery.event.special.touchstart = {
        setup: function (_, ns, handle) {
            this.addEventListener("touchstart", handle, {passive: true});
        },
    };
});

require(["functions"], function () {
    try {
        initFunctions();
    }catch (e) {
        console.log(e);
    }
});
