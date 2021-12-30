<?php
session_start();
session_destroy();
header("location: http://localhost/quiz2/home.php");
$_SESSION['logout'] = true;
setcookie('login[status]', ''); 
setcookie('login[nama]', '');

