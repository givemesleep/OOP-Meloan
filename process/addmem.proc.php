<?php 

//Issets

//Require (Model and Controller)
require_once '../Model/dbh.bd.php'; //Initiate the Database
require_once '../Model/addmem.mod.php'; //Initiate the Model where you manage CRUD Functions
require_once '../Controller/addmem.ctrl.php'; //Initiate the Controller where you manage the Validation and Data Handling

//Instance Controller
$CreateMember = new AddMemCtrl();
$CreateMember->FilterData(); //Call the FilterData Method to Validate and Handle the Data


?>