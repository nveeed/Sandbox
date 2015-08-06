<?php
//this file is required because it includes username and password of Wordpress database
require_once "wp-config.php";

session_start();
$messaage ="";

//the default login url of the wordpress website
$actual_link = str_replace("addadmin.php","wp-login.php", 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);

//this code do the login part, so only developer who knows the password can create the administrator account.
if(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == false && isset($_POST['loginpass']) && $_POST['loginpass'] == 'somepass123'){
    $_SESSION['isLogin'] = true;
}else if(!isset($_SESSION['isLogin'])){
    $_SESSION['isLogin'] = false;
}

//This part of code actually creates the administrator account only if logged in and set username and password
if($_SESSION['isLogin'] == true && isset($_POST['username']) && isset($_POST['pass']) && !empty($_POST['username']) && !empty($_POST['pass'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['pass']);
    //$localhost = trim($_POST['host']);
    //$database_name = trim($_POST['dbname']);
    //$mysql_user = trim($_POST['dbuser']);
    //$mysql_password = trim($_POST['dbpass']);

    //connecting to database using default wordpress credentials.
    $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }else{
        mysql_select_db(DB_NAME, $link) or die('Could not select database.');
    }

    if(!isUserAlreadyExists($username)){
        $messaage = createAdminAccount($username, $password);
        if($messaage == ""){
            $messaage =  'Administrator Account is created you can login now using the password you set. <a href="'.$actual_link.'">Login Now</a>';
            session_destroy();
        }
    }else{
        $messaage = "The username you provided already exists.";
    }
}else{
    $messaage = "Please Login to add administrator account";
}

//this function create an account with the specified username and password.
function createAdminAccount($username, $password){
    $errors = "";
    $username = mysql_real_escape_string($username);
    $password = md5($password);
    $sql = "INSERT INTO `wp_users` (`user_login`, `user_pass`, `user_nicename`, `user_email`, `user_status`) VALUES ('$username', '$password', 'firstname lastname', 'email@example.com', '0');";
    $rs = mysql_query($sql);
    $errors = mysql_error();
    $sql = "INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`)
            VALUES (NULL, (Select max(id) FROM wp_users), 'wp_capabilities', 'a:1:{s:13:".'"administrator"'.";b:1;}');";
    $rs = mysql_query($sql);
    $errors = mysql_error();
    $sql = "INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`)
            VALUES (NULL, (Select max(id) FROM wp_users), 'wp_user_level', '10');";
    $rs = mysql_query($sql);
    $errors = mysql_error();

    if($errors == ""){
        return "";
    }else{
        return $errors;
    }
}

//check if admin account with same username exists.
function isUserAlreadyExists($username){
    $username = mysql_real_escape_string($username);
    $sql = "SELECT id FROM wp_users WHERE user_login = '$username'";
    $rs = mysql_query($sql);
    if(mysql_num_rows($rs)> 0){
        return true;
    }else{
        return false;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Admin Account</title>

    <!-- Bootstrap Core CSS -->
    <link href="admin-style.css" rel="stylesheet">
    <![endif]-->

</head>

<body>

<div id="wrapper">

<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard <small>Admin Account Creation</small></h1>
        <div class="alert alert-success" role="alert"><?php echo $messaage;?></div>
        <?php if($_SESSION['isLogin'] == true){?>
            <div class="col-lg-4">
                <form method="post">
                    <div class="form-group">
                        <label for="username">Enter Administrator Username</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter Administrator Username" required>
                    </div>
                    <div class="form-group">
                        <label for="pass">Enter Administrator Password</label>
                        <input type="text" id="pass" name="pass" class="form-control" placeholder="Enter Administrator Password" required>
                    </div>
                    <button type="submit" class="btn btn-default">Create Admin Account</button>
                </form>
            </div>
        <?php }else{?>
            <div class="col-lg-4">
                <form method="post">
                    <div class="form-group">
                        <label for="loginpass">Enter Password</label>
                        <input type="password" id="loginpass" name="loginpass" class="form-control" placeholder="Enter Password" required>
                    </div>
                    <button type="submit" class="btn btn-default">Sign In</button>
                </form>
            </div>
        <?php }?>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>

</body>

</html>
