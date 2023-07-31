<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>e-ASSESSMENT</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container"><br><br><br>

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="<?php echo base_url('assets/img/mipa.png'); ?>" alt="Logo" class="logo-left ml-4 mb-4 ">
                                        <h1 class="h4 text-gray-900 mr-5 mb-2">Login</h1>
                                        <h1 class="h4 text-gray-900 mr-5 mb-2"> <b>e-Assessment</b></h1>
                                    </div>

                                    <form method="post" action="<?php echo base_url('administrator/auth/proses_login') ?>" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Your NIP" name="username">
                                            <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Your Password" name="password">
                                            <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>') ?>
                                        </div>


                                        <button class="btn btn-primary btn-user btn-block">LOGIN</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <style>
        .logo-left {
            width: 55px;
            /* Ubah ukuran sesuai kebutuhan */
            height: auto;
            float: left;
            margin-right: 2px;
            /* Atur jarak antara logo dengan teks */
            margin-top: 5px;
            /* Atur jarak antara logo dengan atas card-body */
        }

        .card-body-content {
            margin-left: 40px;
            /* Atur jarak antara logo dengan konten card-body */
        }

        .h4-text {
            margin-left: 35px;
            /* Atur jarak antara teks dengan logo */
            margin-right: 20px;
            /* Atur jarak antara teks dengan kanan card-body */
        }

        .form-group {
            margin-bottom: 15px;
            /* Atur jarak antara form-group dengan elemen di atasnya */
        }
    </style>
</body>

</html>