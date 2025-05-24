<?php 

require_once 'config.php';

$users = htmlspecialchars(trim(strip_tags($_POST['accUser'])));
$pswd = htmlspecialchars(trim(strip_tags($_POST['accPswd'])));

$Account = "SELECT accName AS Name, accUser AS Users, accPswd AS PSWD, is_active AS Actv FROM tblaccountinfo";
$stmtAcc = $conn->prepare($Account);
$stmtAcc->execute();

$Acc = $stmtAcc->rowCount();
if($Acc > 0){
    $rows = $stmtAcc->fetch();
    // $Users = $rows['Users'];
    // $PSWD = $rows['PSWD'];

    if($rows['Users'] == $users && $rows['PSWD'] == $pswd){
        if($rows['Actv'] == 1){
            session_start();
            $_SESSION['LogCheck'] = 1;
            $_SESSION['accName'] = $rows['Name'];
            $_SESSION['accUser'] = $rows['Users'];
            header("Location: ../index.php");
        }else{
            header("Location: ../login.php?error=Account is inactive");
        }
}
}

?>