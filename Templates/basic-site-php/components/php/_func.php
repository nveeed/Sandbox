<?php
function pr($obj , $label=''){
	echo "<hr>" . $label . ":<br>";
	echo "<pre>";
	print_r($obj);
	echo "</pre><hr>";
}
function redirect( $location = NULL ) {
	// redirects to location
  if ($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}
function formatDate( $dateString , $format = "%a %d %B %Y" ){
	list( $y, $m , $d ) = explode("-", $dateString );
	return strftime( $format , mktime( 0, 0, 0, $m , $d, $y ) );
}