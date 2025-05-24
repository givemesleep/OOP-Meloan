<?php 

?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'components/head.php'; ?>

<body class="d-flex flex-column min-vh-100">

  <!-- ======= Header ======= -->
<?php require_once 'components/header.php';
$page = 'pendingMem'; $folder = 'membership';
require_once 'components/sidenav.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pending Member</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Membership Information</a></li>
          <li class="breadcrumb-item active">Pending Member</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 35px;"><strong>Pending Member</strong></h5>
                
                <table class="table table-hover datatable mt-2"  style="max-width : 100%;">
                  <thead>
                    <tr>
                      <th scope="col" style="width:5%">#</th>
                      <th scope="col" style="width:25%">Name</th>
                      <th scope="col" style="width:45%">Address</th>
                      <th scope="col" style="width:5%">Status</th>
                      <th scope="col" style="width:15%">Schedule</th>
                      <th scope="col" style="width:5%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>John Doe</td>
                      <td>1234 Street Name, City, Province</td>
                      <td><span class="badge bg-warning align-center">Pending</span></td>
                      <td>2021-09-01</td>
                      <td class="align-center">
                        <a href="#" class="btn btn-dark btn-sm">View</a> 
                      </td>
                    </tr>
                  </tbody>
                
                </table>

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <?php require_once 'components/footer.php'; ?>
  <?php require_once 'components/scripting.php'; ?>

</body>

</html>

