<?php require 'helper.php' ?>
<?php $pengaturan = getWhere("SELECT * FROM pengaturan WHERE id_pengaturan = 1 "); ?>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = getWhere("SELECT * FROM user WHERE username = '$username'");
    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['role'] = $user['role'];
            redirectTo('admin/dashboard');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $pengaturan['appname']; ?></title>
    <meta content="<?= $pengaturan['description']; ?>" name="description">
    <meta content="<?= $pengaturan['keyword']; ?>" name="keywords">
    <meta content="<?= $pengaturan['author']; ?>" name="author">

    <!-- Favicons -->
    <link href="<?= $base_url; ?>assets/img/<?= $pengaturan['logo']; ?>" rel="icon">
    <link href="<?= $base_url; ?>assets/img/<?= $pengaturan['logo']; ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Plugins CSS Files -->
    <link href="<?= $base_url; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/plugins/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/plugins/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/plugins/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/plugins/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/plugins/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= $base_url; ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="<?= $base_url; ?>assets/img/<?= $pengaturan['logo']; ?>" alt="">
                                    <span class="d-none d-lg-block"><?= $pengaturan['appname']; ?></span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate action="" method="post">

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="username" class="form-control" id="yourUsername" required>
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <!-- <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div> -->
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit" name="submit">Login</button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <?= $pengaturan['copyright']; ?>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Plugins JS Files -->
    <script src="<?= $base_url; ?>assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="<?= $base_url; ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url; ?>assets/plugins/chart.js/chart.umd.js"></script>
    <script src="<?= $base_url; ?>assets/plugins/echarts/echarts.min.js"></script>
    <script src="<?= $base_url; ?>assets/plugins/quill/quill.js"></script>
    <script src="<?= $base_url; ?>assets/plugins/simple-datatables/simple-datatables.js"></script>
    <script src="<?= $base_url; ?>assets/plugins/tinymce/tinymce.min.js"></script>
    <script src="<?= $base_url; ?>assets/plugins/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= $base_url; ?>assets/js/main.js"></script>

</body>

</html>