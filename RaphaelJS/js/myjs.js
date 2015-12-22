(function () {

    // Paths
    var paper = Raphael("paper",800, 300);
    var rectPath = paper.path("M10,10L10,90L90,90L90,10Z");
    var curvePath = paper.path("M100,10s60,10 80,80Z");

    rectPath.attr({fill:"green"});
    curvePath.attr({fill:"blue"});

    // Text
    var t = paper.text(50, 100, "HTML5ROCKS");
    // for unknown reasons, print() does not work :(
    //var letters = paper.print(500, 150, "Here we go", paper.getFont("Times", 800), 40);
    //letters.attr({fill:"green"});

    // Animate
    var scaledDown = false;
    rectPath.click(function () {
        if(!scaledDown){
            // without a callback function
            rectPath.animate({transform: "s0.3"},1000,"bounce");
            scaledDown = true;
        }else{
            // with callback
            rectPath.animate({transform: "s1"},1000,"bounce", function () {
                rectPath.animate({transform: "s0.3"},1000,"bounce");
            });
        }
    });


})();