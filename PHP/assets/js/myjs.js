$(function () {
    var a = $("body").attr("id");
    $(".navigation li#" + a).addClass("active"), $(".navigation li").click(function () {
        var a = $(this).attr("id");
        $("#content").load(a + ".php"), $(".navigation li").removeClass("active"), $(this).addClass("active"), $("body").attr("id", a)
    })
});