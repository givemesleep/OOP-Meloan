<?php 
require_once "../cruds/config.php";

$cit = "";

if(!empty($_POST['citID'])){
    $cit = htmlspecialchars(trim($_POST['citID']));

    $sqlcit = "SELECT citymunDesc, citymunCode FROM tbmuni WHERE citymunDesc = ? LIMIT 1000";
    $datacit = array($cit);
    $stmtcit = $conn->prepare($sqlcit);
    $stmtcit->execute($datacit);
    $rowcit = $stmtcit->fetch();
    $citID = $rowcit['citymunCode'];

    $sqlbg = "SELECT brgyDesc, citymunCode FROM tbbrgys WHERE citymunCode = ? LIMIT 1000";
    $databg = array($citID);
    $stmtbg = $conn->prepare($sqlbg);
    $stmtbg->execute($databg);
    if($stmtbg->rowCount() > 0){
        echo '<option value="">Select Barangay</option>';
        while($rowbg=$stmtbg->fetch()){
            echo '<option value="'.$rowbg['brgyDesc'].'">'.$rowbg['brgyDesc'].'</option>';
        }
    }else {
        echo '<option value="">No Barangay</option>';
    }
}
?>