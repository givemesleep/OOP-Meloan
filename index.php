<?php 
// session_start();
require_once 'controller/config.php';
// require_once 'components/sessions.php';

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once 'components/head.php'; ?>

<body class="d-flex flex-column min-vh-100">

    <!-- ======= Header ======= -->
    <?php include_once 'components/header.php';
    $page = 'index'; $folder = 'dashboard'; 
    require_once 'components/sidenav.php';  ?>

    <!-- ======= Sidebar ======= -->
    <!-- End Sidebar-->

    <main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-6" >
                <div class="card info-card sales-card" style="border: solid 1px;">

                <div class="card-body">
                    <h5 class="card-title">Membership Accounts</h5>

                    <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                    </div>
                </div>

                </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card revenue-card" style="border: solid 1px;">

                <div class="card-body">
                    <h5 class="card-title">Membership Pending</h5>

                    <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                        <h6>$3,264</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                    </div>
                </div>

                </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-3 col-xl-12">
                <div class="card info-card customers-card" style="border: solid 1px;">

                <div class="card-body">
                    <h5 class="card-title">Loan Active</h5>

                    <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                    </div>

                </div>
                </div>

            </div><!-- End Customers Card -->

           <!-- Customers Card -->
            <div class="col-xxl-3 col-xl-12">
                <div class="card info-card customers-card" style="border: solid 1px;">

                <div class="card-body">
                    <h5 class="card-title">Loan Pending</h5>

                    <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                    </div>

                </div>
                </div>

            </div><!-- End Customers Card -->

            

            

            </div>
        </div><!-- End Left side columns -->

       

        </div>
    </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require_once 'components/footer.php'; ?>

    <?php require_once 'components/scripting.php'; ?>
  
</body>

</html>