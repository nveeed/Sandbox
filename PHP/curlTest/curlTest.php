<?php

function postViaCurl( $data, $url ){
    // Create a curl handle to domain 2
    $ch = curl_init($url);

    //configure a POST request with some options
    curl_setopt($ch, CURLOPT_POST, true);

    //put data to send
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    //this option avoid retrieving HTTP response headers in answer
    curl_setopt($ch, CURLOPT_HEADER, 0);

    //we want to get result as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //execute request
    return curl_exec($ch);

}

if( isset( $_POST['submit'] ) && $_POST['sendViaCurl'] == "Yes" )
{
    if( $_POST['sendViaCurl'] == "Yes" )
    $data = [
        'name' => 'naveed',
        'email' => 'naveed@dl.com',
    ];
    $result = postViaCurl($data,"http://localhost/PHP-SandBox/curlTest/curlHandler.php");
    header("Location: testfile.php");
    //$result = postViaCurl($data,"http://www.expressestateagency.co.uk/exprestimate/resultpage" , true);
    echo "U chose Yes";
    print_r($result);
}
else
{
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php require_once '../assets/php/comp_head.php'; ?>
</head>
<body id='about' class="container">

    <h1>curl Test</h1>

    <section class="row">
        <form method="post" class="col-sm-4">
            <label>Send Via Curl?</label>
            <select name="sendViaCurl" id="sendViaCurl" class="form-control">
                <option>No</option>
                <option>Yes</option>
            </select>
            <input type="submit" id="submit" name="submit" class="form-control btn btn-primary"/>
        </form>
    </section>

    <?php require_once '../assets/php/comp_js_import.php'; ?>
</body>
</html>

<?php } ?>