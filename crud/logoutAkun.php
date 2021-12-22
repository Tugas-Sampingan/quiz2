<?php
session_start();
session_destroy();
header("location: http://localhost/quiz2/home.php");
