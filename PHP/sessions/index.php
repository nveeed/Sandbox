<?php
session_start();
$_SESSION['name'] = "Naveed";
$_SESSION['password'] = "secret";

setcookie( "my-cookie", "cookie value", time() + 7 * 24 * 3600 );
?>
<a href="check-session.php?<?=SID?>">Go Check the Session</a>

<pre>
    <h2>Session:</h2>
    <?php print_r($_SESSION) ?>
    <?php print_r(session_save_path()) ?>
    <?php print_r(sys_get_temp_dir()) ?>
</pre>