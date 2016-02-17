<?php
/**
 * User: Engr. Naveed
 * Date: 23-Nov-15
 * Time: 12:08 AM
 */
session_start();
?>
<h2>Session:</h2>
<pre>
    <?php print_r($_SESSION) ?>
</pre>



<script src="../../_libraries/bootstrap+jquery.js"></script>
<button onclick="$('#output').load('ajax-handler.php')">Check Session via Ajax</button>
<div id="output"></div>

