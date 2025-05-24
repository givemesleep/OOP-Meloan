<?php 

require_once "config.php";

// Inputs with Validations
$lname = htmlspecialchars(trim($_POST['lname']));
$fname = htmlspecialchars(trim($_POST['fname']));
$mname = htmlspecialchars(trim($_POST['mname']));
$sname = htmlspecialchars(trim($_POST['suffix']));
$nickname = htmlspecialchars(trim($_POST['nickname']));
$birthdate = htmlspecialchars(trim($_POST['bdate']));
$birthplace = htmlspecialchars(trim(string: $_POST['pob']));
$religion = htmlspecialchars(trim($_POST['relg']));
$citizenID = htmlspecialchars(trim($_POST['citizenship']));
$civilID = htmlspecialchars(trim($_POST['civil']));
$sexID = htmlspecialchars(trim($_POST['sex']));
$street = htmlspecialchars(trim($_POST['street']));
$cityID = htmlspecialchars(trim($_POST['city']));
$brgyID = htmlspecialchars(trim($_POST['brgy']));
$regID = htmlspecialchars(trim($_POST['region']));
$mobnum = htmlspecialchars(trim($_POST['mobile']));
$telenum = htmlspecialchars(trim($_POST['telephone']));
$emailadd = htmlspecialchars(trim($_POST['emailadd']));

$highestID = htmlspecialchars(trim($_POST['highest']));
$program = htmlspecialchars(trim($_POST['program']));
$prevsch = htmlspecialchars(trim($_POST['prev']));
$company = htmlspecialchars(trim($_POST['company']));
$jobpos = htmlspecialchars(trim($_POST['jobpos']));
$jobsal = htmlspecialchars(trim($_POST['jobsal']));
$bustype = htmlspecialchars(trim($_POST['bustype']));
$busmark = htmlspecialchars(trim($_POST['busmark']));
$bussal = htmlspecialchars(trim($_POST['bussal']));
$skills = htmlspecialchars(trim($_POST['skills']));
$hobbies = htmlspecialchars(trim($_POST['hobbies']));
$socialint = htmlspecialchars(trim($_POST['social']));
$resitypeID = htmlspecialchars(trim($_POST['restype']));
$resistatID = htmlspecialchars(trim($_POST['restats']));
$resiyr = htmlspecialchars(trim($_POST['resiyr']));
$othcoop = htmlspecialchars(trim($_POST['othcoop']));

$sssID = htmlspecialchars(trim($_POST['sss']));
$tinID = htmlspecialchars(trim($_POST['tin']));
$othID = htmlspecialchars(trim($_POST['othID']));
$othNoID = htmlspecialchars(trim($_POST['othNo']));
$monthlyIncome = htmlspecialchars(trim($_POST['monthly']));
$trainedby = htmlspecialchars(trim($_POST['trainer']));
$referredby = htmlspecialchars(trim($_POST['memref']));
$pmesSched = htmlspecialchars(trim($_POST['pmes']));

$benname1 = htmlspecialchars(trim($_POST['onename']));
// $benname2 = htmlspecialchars(trim($_POST['twoname']));
// $benname3 = htmlspecialchars(trim($_POST['threename']));
$benmob1 = htmlspecialchars(trim($_POST['onemob']));
// $benmob2 = htmlspecialchars(trim($_POST['twomob']));
// $benmob3 = htmlspecialchars(trim($_POST['threemob']));
$benadd1 = htmlspecialchars(trim($_POST['oneadd']));
// $benadd2 = htmlspecialchars(trim($_POST['twoadd']));
// $benadd3 = htmlspecialchars(trim($_POST['threeadd']));
$benrel1 = htmlspecialchars(trim($_POST['onerel']));
// $benrel2 = htmlspecialchars(trim($_POST['tworel']));
// $benrel3 = htmlspecialchars(trim($_POST['threerel']));
function createEntry($lname, $fname, $mname, $sname, $nickname, $birthdate, $birthplace, $religion, $citizenID, $civilID, $sexID,
$street, $cityID, $brgyID, $regID, $mobnum, $telenum, $emailadd,
$highestID, $program, $prevsch, $company, $jobpos, $jobsal, $bustype, $busmark, $bussal, $skills, $hobbies, $socialint,
$resitypeID, $resistatID, $resiyr, $othcoop,
$sssID, $tinID, $othID, $othNoID, $monthlyIncome, $trainedby, $referredby, $pmesSched,
$benname1, $benmob1,$benadd1, $benrel1,){

    global $conn;

    $BasicInfo = "INSERT INTO tbbasicinfo(lastname, givenname, middlename, suffixname, nickname, birthdate, birthplace, religion, citizenID, civilID, sexID)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $ContactInfo = "INSERT INTO tbcontactinfo(memberID, street, cityID, brgyID, regID, mobnum, telenum, emailadd)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
    $AdditionalInfo = "INSERT INTO tbadditionalinfo(memberID, highestID, program, prevsch, company, jobpos, jobsal, bustype, busmark, bussal, skills, hobbies, socialint, resitypeID, resistatID, resiyr, othcoop)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $pmesInfo = "INSERT INTO tbpmesinfo(memberID, sssID, tinID, othID, othNoID, monthlyIncome, trainedby, referredby, pmesSched, isApproved)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
    $bene1="INSERT INTO tbbeneficiariesinfo(memberID, benname, mobnum, benadd, benrel, identifiedby)
    VALUES(?, ?, ?, ?, ?, ?)";
    // $bene2="INSERT INTO tbbeneficiariesinfo(memberID, benname, mobnum, benadd, benrel, identifiedby)
    // VALUES(?, ?, ?, ?, ?, ?)";
    // $bene3="INSERT INTO tbbeneficiariesinfo(memberID, benname, mobnum, benadd, benrel, identifiedby)
    // VALUES(?, ?, ?, ?, ?, ?)";
    $Status = "INSERT INTO tbstatusinfo(memberID, isActive, isLoan, joinedDate)
    VALUES(?,1,0,CURDATE())";
    
    $BasicDE = array($lname, $fname, $mname, $sname, $nickname, $birthdate, $birthplace, $religion, $citizenID, $civilID, $sexID);
    $Basic = $conn->prepare($BasicInfo);
    $Basic->execute($BasicDE);
    $lastID = $conn->lastInsertId();


    $ContactDE = array($lastID, $street, $cityID, $brgyID, $regID, $mobnum, $telenum, $emailadd);
    $AdditionalDE = array($lastID, $highestID, $program, $prevsch, $company, $jobpos, $jobsal, $bustype, $busmark, $bussal, $skills, $hobbies, $socialint, $resitypeID, $resistatID, $resiyr, $othcoop);
    $pmesDE = array($lastID, $sssID, $tinID, $othID, $othNoID, $monthlyIncome, $trainedby, $referredby, $pmesSched, 0);
    $bene1DE = array($lastID, $benname1, $benmob1, $benadd1, $benrel1, "1");
    // $bene2DE = array($lastID, $benname2, $benmob2, $benadd2, $benrel2, "2");
    // $bene3DE = array($lastID, $benname3, $benmob3, $benadd3, $benrel3, "3");
    $StatusDE = array($lastID);

    $Contact = $conn->prepare($ContactInfo);
    $Additional = $conn->prepare($AdditionalInfo);
    $pmes = $conn->prepare($pmesInfo);
    $benef1 = $conn->prepare($bene1);
    // $benef2 = $conn->prepare($bene2);
    // $benef3 = $conn->prepare($bene3);
    $Status = $conn->prepare($Status);

    $Contact->execute($ContactDE);
    $Additional->execute($AdditionalDE);
    $pmes->execute($pmesDE);
    $benef1->execute($bene1DE);
    // $benef2->execute($bene2DE);
    // $benef3->execute($bene3DE);
    $Status->execute($StatusDE);


}

function updateEntry($entry){
    global $conn;

}

function deleteEntry($MemberID){
    global $conn;

    $SoftDel = "UPDATE tbstatusinfo SET isActive = 0 WHERE memberID = ?";
    $SoftDelDE = array($MemberID);
    $SoftDel = $conn->prepare($SoftDel);
    $SoftDel->execute($SoftDelDE);


}

$Mode = 0;
if(isset($_GET['Action'])){
    $Mode = $_GET['Action'];
}

switch($Mode){
    case 1: 
        createEntry($lname, $fname, $mname, $sname, $nickname, $birthdate, $birthplace, $religion, $citizenID, $civilID, $sexID,
        $street, $cityID, $brgyID, $regID, $mobnum, $telenum, $emailadd,
        $highestID, $program, $prevsch, $company, $jobpos, $jobsal, $bustype, $busmark, $bussal, $skills, $hobbies, $socialint,
        $resitypeID, $resistatID, $resiyr, $othcoop,
        $sssID, $tinID, $othID, $othNoID, $monthlyIncome, $trainedby, $referredby, $pmesSched,
        $benname1,  $benmob1,  $benadd1,  $benrel1);
        header("Location: ../pending-member.php?success=1");
        break;
    case 2:
        // updateEntry($lname, $fname, $mname, $sname, $nickname, $birthdate, $birthplace, $religion, $citizenID, $civilID, $sexID,
        // $street, $cityID, $brgyID, $regID, $mobnum, $telenum, $emailadd,
        // $highestID, $program, $prevsch, $company, $jobpos, $jobsal, $bustype, $busmark, $bussal, $skills, $hobbies, $socialint,
        // $resitypeID, $resistatID, $resiyr, $othcoop,
        // $sssID, $tinID, $othID, $othNoID, $monthlyIncome, $trainedby, $referredby, $pmesSched,
        // $benname1, $benname2, $benname3, $benmob1, $benmob2, $benmob3, $benadd1, $benadd2, $benadd3, $benrel1, $benrel2, $benrel3);
        // header("Location: ../index.php?success=2");
        break;
    case 3:
        deleteEntry($MemberID);
        header("Location: ../pending-member.php?success=3");
        break;
    }




?>