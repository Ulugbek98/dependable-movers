var viewportwidth = window.innerWidth;

 /* ++++++++++++++++++++++++++++  1920px - Start ++++++++++++++++++++++++++++ */

if (viewportwidth === 1920) {
    $('.moverspackers-simple-btn').click(function () {
        $("html, body").animate({
            scrollTop: 1478
        }, 750);
        return false;
    });
    $('.servic').click(function () {
        $("html, body").animate({
            scrollTop: 790
        }, 750);
        return false;
    });
    $('.proc').click(function () {
        $("html, body").animate({
            scrollTop: 2170
        }, 750);
        return false;
    });
    $('.prov').click(function () {
        $("html, body").animate({
            scrollTop: 2872
        }, 750);
        return false;
    });
    $('.galler').click(function () {
        $("html, body").animate({
            scrollTop: 3840
        }, 750);
        return false;
    });
    $('.tea').click(function () {
        $("html, body").animate({
            scrollTop: 4648
        }, 750);
        return false;
    });
} 
 /* ++++++++++++++++++++++++++++  1920px - END ++++++++++++++++++++++++++++ */

 /* ++++++++++++++++++++++++++++  1280 - Start ++++++++++++++++++++++++++++ */

else if (viewportwidth == 1280) {

    $('.moverspackers-simple-btn').click(function () {
        $("html, body").animate({
            scrollTop: 1374
        }, 750);
        return false;
    });
    $('.servic').click(function () {
        $("html, body").animate({
            scrollTop: 700
        }, 750);
        return false;
    });
    $('.proc').click(function () {
        $("html, body").animate({
            scrollTop: 2088
        }, 750);
        return false;
    });
    $('.prov').click(function () {
        $("html, body").animate({
            scrollTop: 2768
        }, 750);
        return false;
    });
    $('.galler').click(function () {
        $("html, body").animate({
            scrollTop: 3744
        }, 750);
        return false;
    });
    $('.tea').click(function () {
        $("html, body").animate({
            scrollTop: 4582
        }, 750);
        return false;
    });
} else if (viewportwidth <= 768) {
    $('.moverspackers-simple-btn').click(function () {
        $("html, body").animate({
            scrollTop: 1642
        }, 750);
        return false;
    });
} 
else if (viewportwidth >= 400) {
    $('.moverspackers-simple-btn').click(function () {
        $("html, body").animate({
            scrollTop: 2276
        }, 750);
        return false;
    });
} 

else {
    alert("else".viewportwidth)
}