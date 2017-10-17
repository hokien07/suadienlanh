$(document).ready(function(){
    $("ul.hk-custom li").click(function(){
        $("ul.hk-custom li").removeClass("active");
        $(this).addClass("active");
    });
});