<?php 

if (!isset($_SESSION['LogCheck']) == 1) {
    header('Location: login.php');
    exit();
}else{
    $user = $_SESSION['accName'];
    // $userID = $_SESSION['accUser'];
} 

?>