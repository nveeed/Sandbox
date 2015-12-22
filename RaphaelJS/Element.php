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

        function log($obj){ console.log($obj) }

        var paper = Raphael("paper",800, 300);
        // path
        var rect = paper.rect( 70, 10, 60, 60, 10 ).attr({fill:"#0c6"});
        var curvePath = paper.path("M25,40s40,10 0,-40Z").attr({fill:"#06c"});
        var circle = paper.circle( 40, 130, 30 ).attr({fill:"#c03"});

        var pinPath = "M36.439,12.646c0-6.919-5.608-12.527-12.528-12.527S11.384,5.727,11.384,12.646c0,9.913,12.527,24.582,12.527,24.582S36.439,22.508,36.439,12.646z M17.733,11.898c0-3.413,2.767-6.179,6.179-6.179s6.179,2.766,6.179,6.179c0,3.413-2.767,6.179-6.179,6.179S17.733,15.311,17.733,11.898z";

        // animate
        curvePath.transform({x: 200, y: 200});
        curvePath.click(function () {
            curvePath.animate({path: pinPath}, 1000, 'linear');
        });

        // drag
        var dragger = function () {
                this.ox = this.type == "rect" ? this.attr("x") : this.attr("cx");
                this.oy = this.type == "rect" ? this.attr("y") : this.attr("cy");
                this.animate({"fill-opacity": .2}, 500);
            },
            move = function (dx, dy) {
                var att = this.type == "rect" ? {x: this.ox + dx, y: this.oy + dy} : {cx: this.ox + dx, cy: this.oy + dy};
                this.attr(att);
            },
            up = function () {
                this.animate({"fill-opacity": 1}, 500);
            };
        rect.drag( move, dragger, up );



    })();

</script>
</body>
</html>