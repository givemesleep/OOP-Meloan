<?php 

require_once 'controller/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<?php 
require_once 'components/head.php'; 
?>

<body class="d-flex flex-column min-vh-100">

  <!-- ======= Header ======= -->
<?php require_once 'components/header.php';
$page = 'createMem'; $folder = 'member';
require_once 'components/sidenav.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>New Member</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">New Member</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 35px;"><strong>New Member</strong></h5>
              <!-- <p class="card-text">Please fill out the form below to create a new member.</p> -->
              <form method="post" id="NewMemForm" class="form" action="controller/process-membership.php?Action=1">

                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <strong>Personal Information</strong>
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                        <div class="personal-info row g-2">

                          <h4 style="background: #b1dd9e;" class="text-white"><b>Basic Information</b></h4>

                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Last Name</b></label>
                              <input type="text" class="form-control" id="lname" name="lname" >
                            </div>
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>First Name</b></label>
                              <input type="text" class="form-control" id="fname" name="fname" >
                            </div>
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Middle Name</b></label>
                              <input type="text" class="form-control" id="mname" name="mname" >
                            </div>
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Suffix</b></label>
                              <input type="text" class="form-control" id="suffix" name="suffix" >
                            </div>

                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Nickname</b></label>
                              <input type="text" class="form-control" id="nickname" name="nickname" >
                            </div>
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Birthdate</b></label>
                              <input type="date" class="form-control" id="bdate" name="bdate" >
                            </div>
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Place of Birth</b></label>
                              <input type="text" class="form-control" id="pob" name="pob" >
                            </div>
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Religion</b></label>
                              <input type="text" class="form-control" id="relg" name="relg" >
                            </div>

                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Citizenship</b></label>
                              <select id="inputState" class="form-select" id="citizenship" name="citizenship">
                                <option selected value="0">Choose...</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Civil Status</b></label>
                              <select id="inputState" class="form-select" id="civil" name="civil">
                                <option selected value="0">Choose...</option>
                                <option value="">...</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Sex</b></label>
                              <select id="inputState" class="form-select" id="sex" name="sex">
                                <option selected value="0">Choose...</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="col-md-3"></div>
                            
                          <h4 style="background: #b1dd9e;" class="text-white mt-5"><b>Contact Information</b></h4>
                            
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Street</b></label>
                              <input type="text" class="form-control" id="street" name="street" >
                            </div>

                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>City</b></label>
                              <select id="inputState" class="form-select" id="cit" name="city">
                                <option selected value="0">Choose City</option>
                                <?php 
                                  $sqlCity="SELECT citID, citymunDesc AS City, citymunCode FROM tbmuni";
                                  $stmtCity=$conn->prepare($sqlCity);
                                  $stmtCity->execute();
                                  if($stmtCity->rowCount() > 0){
                                    while($rowCity=$stmtCity->fetch()){
                                      echo '<option value="'.$rowCity['City'].'">'.$rowCity['City'].'</option>';
                                    }
                                  }

                                ?>
                              </select>
                            </div>

                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Barangay</b></label>
                              <select id="inputState" class="form-select" id="bar" name="brgy">
                                <option selected value="0">Choose...</option>
                                <option>...</option>
                              </select>
                            </div>
                            
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Province</b></label>
                              <select id="inputState" class="form-select" id="region" name="region">
                                <option selected value="0">Choose Province</option>
                                <?php 
                                  $sqlProvince="SELECT provDesc AS Province FROM tbprovince";
                                  $stmtProvince=$conn->prepare($sqlProvince);
                                  $stmtProvince->execute();
                                  if($stmtProvince->rowCount() > 0){
                                    while($rowProvince=$stmtProvince->fetch()){
                                      echo '<option value="'.$rowProvince['Province'].'">'.$rowProvince['Province'].'</option>';
                                    }
                                  }
                                ?>
                              </select>
                            </div>
                            
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Mobile No.</b></label>
                              <input type="text" class="form-control" id="mobile" name="mobile" >
                            </div>
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Telephone No.</b></label>
                              <input type="text" class="form-control" id="telephone" name="telephone" >
                            </div>
                            <div class="col-md-3">
                              <label for="fname" class="form-label"><b>Email Address</b></label>
                              <input type="text" class="form-control" id="emailadd" name="emailadd" >
                            </div>

                        </div>
                        <!-- end of personal information -->

                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>Additional Information</strong>
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                        <div class="additional-info row g-2">
                          
                          <h4 style="background: #b1dd9e;" class="text-white"><b>Experience Information</b></h4>

                              <div class="col-md-3">
                                <label for="fname" class="form-label"><b>Highest Educational Attainment</b></label>
                                <select id="inputState" class="form-select" id="highest" name="highest">
                                  <option selected value="0">Choose...</option>
                                  <option value="">...</option>
                                </select>
                              </div>
                              <div class="col-md-5">
                                <label for="fname" class="form-label"><b>Strand/Program/Major</b></label>
                                <input type="text" class="form-control" id="program" name="program" >
                              </div>
                              <div class="col-md-4">
                                <label for="fname" class="form-label"><b>Previous School</b></label>
                                <input type="text" class="form-control" id="prev" name="prev" >
                              </div>

                              <div class="col-md-3">
                                <label for="fname" class="form-label"><b>Company Name</b></label>
                                <input type="text" class="form-control" id="company" name="company" >
                              </div>
                              <div class="col-md-3">
                                <label for="fname" class="form-label"><b>Job Position</b></label>
                                <input type="text" class="form-control" id="jobpos" name="jobpos" >
                              </div>
                              <div class="col-md-3">
                                <label for="fname" class="form-label"><b>Job Salary(Highest)</b></label>
                                <input type="text" class="form-control" id="jobsal" name="jobsal" >
                              </div>
                              <div class="col-md-3"></div>

                              <div class="col-md-3">
                                <label for="fname" class="form-label"><b>Business Type</b></label>
                                <input type="text" class="form-control" id="bustype" name="bustype" >
                              </div>
                              <div class="col-md-3">
                                <label for="fname" class="form-label"><b>Business Landmark</b></label>
                                <input type="text" class="form-control" id="busmark" name="busmark" >
                              </div>
                              <div class="col-md-3">
                                <label for="fname" class="form-label"><b>Business Salary(Highest)</b></label>
                                <input type="text" class="form-control" id="bussal" name="bussal" >
                              </div>
                              <div class="col-md-3"></div>

                              <div class="col-md-4">
                                <label for="fname" class="form-label"><b>Skills</b></label>
                                <input type="text" class="form-control" id="skills" name="skills" >
                              </div>
                              <div class="col-md-4">
                                <label for="fname" class="form-label"><b>Hobbies</b></label>
                                <input type="text" class="form-control" id="hobbies" name="hobbies" >
                              </div>
                              <div class="col-md-4">
                                <label for="fname" class="form-label"><b>Social Interest</b></label>
                                <input type="text" class="form-control" id="social" name="social" >
                              </div>

                              <div class="col-md-3">
                                <label for="fname" class="form-label"><b>Residency Type</b></label>
                                <select id="inputState" class="form-select" id="restype" name="restype">
                                  <option selected value="0">Choose...</option>
                                  <option value="">...</option>
                                </select>
                              </div>
                              <div class="col-md-3">
                                <label for="fname" class="form-label"><b>Residency Status</b></label>
                                <select id="inputState" class="form-select" id="restats" name="restats">
                                  <option selected  value="0">Choose...</option>
                                  <option value="">...</option>
                                </select>
                              </div>
                              <div class="col-md-3">
                                <label for="fname" class="form-label"><b>Residency Year</b></label>
                                <input type="date" class="form-control" id="resiyr" name="resiyr" >
                              </div>
                              <div class="col-md-3">
                                <label for="fname" class="form-label"><b>Other Cooperative</b></label>
                                <input type="text" class="form-control" id="othcoop" name="othcoop" >
                              </div>
                        </div>
                        <!-- end of additional information -->

                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Pre-Membership Education Seminar</strong>
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                        <div class="pmes-info row g-2">

                          <h4 style="background: #b1dd9e;" class="text-white"><b>Pre-Membership Requisite</b></h4>

                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>SSS No.</b></label>
                            <input type="text" class="form-control" id="sss" name="sss" >
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>TIN ID No.</b></label>
                            <input type="text" class="form-control" id="tin" name="tin" >
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Other ID</b></label>
                            <select id="inputState" class="form-select" id="othID" name="othID">
                              <option selected value="0">Choose...</option>
                              <option value="">...</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Other ID No.</b></label>
                            <input type="text" class="form-control" id="othNo" name="othNo" >
                          </div>

                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Monthly Income</b></label>
                            <input type="text" class="form-control" id="monthly" name="monthly" >
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Trainer In-charge</b></label>
                            <select id="inputState" class="form-select" id="trainer" name="trainer">
                              <option selected value="0">Choose...</option>
                              <option value="">...</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Member Referral</b></label>
                            <select id="inputState" class="form-select" id="memref" name="memref">
                              <option selected value="0">Choose...</option>
                              <option value="">...</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Set PMES Schedule</b></label>
                            <input type="date" class="form-control" id="pmes" name="pmes" >
                          </div>
                          
                          <h4 style="background: #b1dd9e;" class="text-white mt-5"><b>Beneficiaries Information</b></h4>

                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>(1) Name</b></label>
                            <input type="text" class="form-control" id="onename" name="onename" >
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Mobile No.</b></label>
                            <input type="text" class="form-control" id="onemob" name="onemob" >
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Address</b></label>
                            <input type="text" class="form-control" id="oneadd" name="oneadd" >
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Relation</b></label>
                            <input type="text" class="form-control" id="onerel" name="onerel" >
                          </div>

                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>(2) Name</b></label>
                            <input type="text" class="form-control" id="twoname" name="twoname" >
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Mobile No.</b></label>
                            <input type="text" class="form-control" id="twomob" name="twomob" >
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Address</b></label>
                            <input type="text" class="form-control" id="twoadd" name="twoadd" >
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Relation</b></label>
                            <input type="text" class="form-control" id="tworel" name="tworel" >
                          </div>

                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>(3) Name</b></label>
                            <input type="text" class="form-control" id="threename" name="threename" >
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Mobile No.</b></label>
                            <input type="text" class="form-control" id="threemob" name="threemob" >
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Address</b></label>
                            <input type="text" class="form-control" id="threeadd" name="threeadd" >
                          </div>
                          <div class="col-md-3">
                            <label for="fname" class="form-label"><b>Relation</b></label>
                            <input type="text" class="form-control" id="threerel" name="threerel" >
                          </div>

                          <div class="text-end">
                            <input type="submit" class="btn btn-success" value="Save"> 
                          </div>

                        </div>
                        <!-- end of pre-membership education seminar -->

                      </div>
                    </div>
                  </div>
                </div>


              </form>

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  

  <script>
  //Province
  $(document).ready(function(){

  //Baranggay
  $('#cit').on('change', function(){
  var citID = $(this).val();
  if(citID){
      $.ajax({
          type: 'POST',
          url: 'Model/address.php',
          data: 'citID=' + citID,
          success: function(html){
              $('#bar').html(html);
          }
      });
  }else{
      $('#bar').html('<option value="">Select City First</option>');
  }
  });
  });
  </script>

  <?php require_once 'components/footer.php'; ?>
  <?php require_once 'components/scripting.php'; ?>
  <script src="controller/process-membership.js"></script>
</body>

</html>


  