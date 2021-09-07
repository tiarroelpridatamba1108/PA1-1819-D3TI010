<?php
    include "../assets/php/function.php";
    if(!$_SESSION['is_logged_PERAWAT']){
        redirect('../index.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PA1_1819_D3TI10</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700">
    <link rel="stylesheet" href="../assets/css/Article-List.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="../assets/css/mystyle.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Registration-Form.css">
</head>

<body>
    <div>
        <header class="background_header">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#"><strong>Sistem Informasi Klinik Del</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse d-flex" id="navcol-1">
                        <ul class="nav navbar-nav d-flex">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Dashboard</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Obat</a></li>
                        </ul>
                        <ul class="nav navbar-nav d-flex ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Logout</a></li>
                        </ul>
                </div>
    </div>
    </nav>
    </header>
    </div>
    <div style="margin-bottom: 200px;">
        <div class="container border rounded-0 shadow-lg" style="width: 600px;margin-top: 60px;margin-bottom: 60px;">
            <form>
                <div class="form-row text-center">
                    <div class="col">
                        <h3 style="margin-top: 20px;margin-bottom: 20px;">Edit Obat</h3>
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nama Obat</label></div>
                    <div class="col-sm-6 input-column"><input class="border rounded-0 form-control" type="text" name="nama_obat" required=""></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Stok Obat</label></div>
                    <div class="col-sm-6 input-column"><input class="border rounded-0 form-control" type="number" name="stok obat" required=""></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Jumlah Obat Yang Ditambah</label></div>
                    <div class="col-sm-6 input-column"><input class="border rounded-0 form-control" type="number" name="jumlah_obat" required=""></div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <p class="text-center"><button class="btn btn-primary border rounded-0 shadow-lg" type="button">Button</button></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="footer-basic" style="background-color: #dbdbdb;">
        <footer>
            <p class="copyright" style="background-color: #dbdbdb;">Sistem Informasi Klinik Del © 2019</p>
        </footer>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Bold-BS4-Jumbotron-with-Particles-js.js"></script>


</body>

</html>