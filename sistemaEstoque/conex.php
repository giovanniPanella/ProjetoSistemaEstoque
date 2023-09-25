<?php

$host = 'localhost';
$user = 'root';
$senha = '';
$bdname= 'dbtag';

$con = mysqli_connect($host,$user,$senha,$bdname);

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>