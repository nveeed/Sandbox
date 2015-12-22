<!DOCTYPE html>
<html>
<head>
    <title>RaphaelJS Demo</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <style>
        #paper>svg{
            background-color: lightcyan;
        }
    </style>
</head>
<body>

<div id="paper"></div>

<script src="js/bootstrap+jquery.js"></script>
<script src="js/raphael-min.js"></script>
<script>

    (function () {

        var paper = Raphael("paper",800, 300);
        // path
        var rectPath = paper.path("M10,10L10,50L50,50L50,10Z").attr({fill:"green"});
        var curvePath = paper.path("M60,10s30,10 40,40Z").attr({fill:"blue"});

        // add
        paper.add([
            { type: "circle", cx: 110, cy: 20, r: 15 },
            { type: "rect", x: 140, y: 10, width: 50, height: 50, fill: "#fc0", r: 10 }
        ]);


        // custom attributes
        paper.ca.size = function (w, h) { return { width: w, height: h }; };
        paper.ca.pos = function (x, y) { return { x: x, y: y }; };

        var rect = paper.rect(0,0,10,10);
        rect.attr({size: [100,100], pos: [10,60], fill: "#099",text: "Rectangle"});

        // forEach
        console.log("running forEach():");
        paper.forEach(function (el) {
            console.log(el.type);
            /*var bbox = el.getBBox(),
                tx = bbox.x,
                ty = bbox.y2 + 5
                ;
            this.text(50, 50, "Raphaël\nkicks\nbutt!");*/
        });
        console.log("forEach() complete.");

        // getElementByPoint
        $("#paper").click(function (evt) {
            var el = paper.getElementsByPoint(evt.offsetX, evt.offsetY);
            if(el){
                el.animate({transform: "s1.5"}, 200, "<>", function(){
                    el.animate({transform: "s1"}, 200, "<>");
                });
            }
        });

        // set()
        var setOfRectangles = paper.set();
        setOfRectangles.push(
            rect, rectPath
        );
        setOfRectangles.attr({"stroke-width": 0, text: "Rectangle"});

        // bottom
        paper.bottom.attr({fill: "red"});

    })();

</script>
</body>
</html>