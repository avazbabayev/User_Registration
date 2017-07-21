<?php

/**
 * @author avaz
 * @copyright 2017
 */
 
 DEFINE ('DB_USER','avazbabayev');
 DEFINE ('DB_PASSWORD','301669');
 DEFINE ('DB_NAME','USER_REGISTRATION');
 DEFINE ('DB_HOST','localhost');
 
 
 $dbc = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
 // die('Couldn\'t connect to mysql   ' .mysqli_connect_error() );
if(!$dbc){
    trigger_error('Could not connect to mysql database'.mysqli_connect_error());
}else{
    set_charset($dbc,'utf8');
}

?>