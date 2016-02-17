<?php
/**
 * Created by naveedulhassan.
 * Date: 2/12/16
 * Time: 6:45 PM
 */

require_once "vendor/autoload.php";

use ElephantIO\Client as Elephant;

$elephant = new Elephant('http://localhost:8000', 'socket.io', 1, false, true, true);

$elephant->init();
$elephant->send(
    ElephantIOClient::TYPE_EVENT,
    null,
    null,
    json_encode(array('name' => 'foo', 'args' => 'bar'))
);
$elephant->close();

echo 'trying to send `bar` to the event `foo`';