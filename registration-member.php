<?php 

?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'components/head.php'; ?>

<body class="d-flex flex-column min-vh-100">

  <!-- ======= Header ======= -->
<?php require_once 'components/header.php';
$page = 'payment'; $folder = '';
require_once 'components/sidenav.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Registration Payment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Payment Transaction</a></li>
          <li class="breadcrumb-item active">Member Registration</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 35px;"><strong>Member Payment</strong></h5>
                
                <table class="table table-hover datatable mt-2">
                  <thead style="width : 100%;">
                    <tr>
                      <th scope="col" style="width:5%">#</th>
                      <th scope="col" style="width:10%">Member ID</th>
                      <th scope="col" style="width:35%">Name</th>
                      <th scope="col" style="width:20%">Previous Payment</th>
                      <th scope="col" style="width:25%">Paid</th>
                      <th scope="col" style="width:5%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>25-001</td>
                      <td>John Doe</td>
                      <td>May 01, 2025</td>
                      <td >PHP 100.00</td>
                      <td>
                        <a href="#" class="btn btn-success btn-sm">Pay</a>
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

