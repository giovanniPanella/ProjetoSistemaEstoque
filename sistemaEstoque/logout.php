<?php
 include 'protect.php';

session_destroy();
header("Location: index.php");


?>