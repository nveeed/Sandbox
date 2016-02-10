<?php
/**
 * Created by naveedulhassan.
 * Date: 2/10/16
 * Time: 11:39 AM
 */

require_once "xajax_core/xajaxAIO.inc.php";

$xajax = new xajax();
$xajax->registerFunction("myFunction");
function myFunction($arg)
{
    // do some stuff based on $arg like query data from a database and
    // put it into a variable like $newContent
    $newContent = "Value of \$arg: ".$arg;
    $newContent .= "<br>Double of \$arg: ".$arg*2;

    // Instantiate the xajaxResponse object
    $objResponse = new xajaxResponse();

    // add a command to the response to assign the innerHTML attribute of
    // the element with id="SomeElementId" to whatever the new content is
    $objResponse->assign("SomeElementId","innerHTML", $newContent);

    //return the xajaxResponse object
    return $objResponse;
}
$xajax->processRequest();

?>
<html>
<head>
    <?php $xajax->printJavascript(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body class="container">

    <div id="SomeElementId" class="jumbotron"></div>

    <button onclick="xajax_myFunction(42);" class="btn btn-success">Click me</button>

</body>
</html>
