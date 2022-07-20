<!-- <?php

$db_name = 'mysql:host=localhost;dbname=shop_db';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

?> -->

<?php
    $db = array (
        'server' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname' => 'db_ecomerce'
    );
    $conn = mysql_connect($db['server'],$db['username'],$db['password'],$db['dbname']);

    if(!$conn) {
        die('kết nối không thành công'.mysql_connect_error($conn));
    }
    echo "kết nối thành công";

    
?>

