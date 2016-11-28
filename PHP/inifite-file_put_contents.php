<?php
/**
 * Created by  naveedulhassan
 * Date: 8/26/16
 * Time: 11:35 AM
 */
for( $i = 0; $i < 12; $i ++ ){
    file_put_contents(__DIR__."/log.log",time());
    sleep(1);
}