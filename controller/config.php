<?php 

$serverhost = "localhost";
$serveruser = "husto";
$serverpass = "0730";
$database = "llampcosys";

$dsn = "mysql:host={$serverhost};dbname={$database}";

try{

    // echo "Connected!";
    $conn = new PDO($dsn, $serveruser, $serverpass);
    // echo "Connected!";
}
catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

date_default_timezone_set('Asia/Manila');

?>

