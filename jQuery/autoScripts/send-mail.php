<?php
/**
 * Created by Naveed-ul-Hassan Malik
 * Date: 5/18/2015
 * Time: 3:28 PM
 */
require_once "Mailer.php";
print_r( Mailer::send( "naveed.malik@dynamologic.com", "Just Testing", "hehehe", "Naveed" ) );