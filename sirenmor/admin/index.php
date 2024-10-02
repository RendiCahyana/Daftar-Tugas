<?php
include_once '../config/Config.php';
$con = new Config();
if ($con->auth()){
    switch (@$_GET['mod']) {
        case 'tugas': 
            include_once 'controller/motor.php';
            break;
        default: 
            include_once 'controller/login.php';
            break;
    }
} else {
    include_once  'controller/login.php';
}
?>