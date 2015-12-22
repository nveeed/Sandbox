<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php require_once '../assets/php/comp_head.php'; ?>
</head>
<body id='about' class="container">

    <h1>Javascript Detection Test</h1>

    <section id="jsRequiredContent" class="row">
        <?php require_once "no-js.php"; ?>
    </section>

    <div>
        <p>This form can only be submitted if javascript is enabled</p>
        <form id="form">
            <input id="ip1" name="ip2">
            <input type="submit" name="submit" value="submit">
        </form>
    </div>


    <?php require_once '../assets/php/comp_js_import.php'; ?>
    <script>
        $(function () {
            $("#jsRequiredContent").load("jsReqContent.php");
        });
    </script>
</body>
</html>
