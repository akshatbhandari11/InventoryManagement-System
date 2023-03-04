<?php
/*
|--------------------------------------------------------------------------
| OWSA-INV V2
|--------------------------------------------------------------------------
| Author: Siamon Hasan
| Project Name: OSWA-INV
| Version: v2
| Offcial page: http://oswapp.com/
| facebook Page: https://www.facebook.com/oswapp
|
|
|
*/

    session_start();

    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','inventory_system');

    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($conn));
    $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn));

?>
