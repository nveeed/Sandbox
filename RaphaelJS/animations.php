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
    <script src="js/bootstrap+jquery.js"></script>
    <script src="js/raphael-min.js"></script>
    <script>

        (function () {

            // Paths
            var paper = Raphael("paper",800, 300);
            var rectPath = paper.path("M10,10L10,90L90,90L90,10Z");
            rectPath.attr({fill:"green"});

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

    </script>
</head>
<body>

<div id="paper"></div>

</body>
</html>