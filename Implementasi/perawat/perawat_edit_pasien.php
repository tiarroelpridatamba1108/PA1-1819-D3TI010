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
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Pasien</a></li>
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
        <div class="container border rounded-0 shadow-lg" style="width: 1028px;margin-top: 60px;margin-bottom: 60px;">
            <form style="margin-bottom: 114px;">
                <div class="form-row text-center">
                    <div class="col">
                        <h3>Edit Pasien</h3>
                    </div>
                </div>
                <div class="form-row" style="margin-top: 60px;">
                    <div class="col" style="margin-left: 28px;"><input class="border rounded-0 form-control" type="text" name="nama_pasien" required="" placeholder="Nama Pasien" style="margin-bottom: 14px;"><select class="border rounded-0 form-control" name="Jenis Kelamin" required="" style="margin-bottom: 10px;"><option value="" selected="">Jenis Kelamin</option><option value="13">Perempuan</option><option value="">Laki-laki</option></select>
                        <input
                            class="border rounded-0 form-control" type="text" name="keluhan" required="" placeholder="Keluhan" style="margin-bottom: 20px;"><input class="border rounded-0 form-control" type="text" name="diagnosa" required="" placeholder="Diagnosa Penyakit" style="margin-bottom: 20px;"><input class="border rounded-0 form-control" type="number" name="umur" required=""
                                placeholder="Umur" min="0" max="100" style="margin-bottom: 20px;"><input class="border rounded-0 form-control" type="text" name="No_Id" required="" placeholder="No Identitas" style="margin-bottom: 20px;"><select class="border rounded-0 form-control"
                                name="dokter" required=""><option value="" selected="">Dokter Yang Melayani</option><option value="13">dr. Johannes</option><option value="">dr. Rifka</option></select></div>
                    <div class="col"></div>
                    <div class="col"><select class="border rounded-0 form-control" name="obat" required=""><option value="" selected="">Obat</option><option value="">Paracetamol</option><option value="">Amoxcilin</option></select></div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="text-center"><button class="btn btn-success btn-lg border rounded-0 shadow-lg" type="submit">Lanjut</button></div>
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