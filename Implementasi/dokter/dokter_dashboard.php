<?php
    include "../assets/php/function.php";
    if(!$_SESSION['is_logged_DOKTER']){
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
                        class="collapse navbar-collapse d-flex flex-row-reverse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Logout</a></li>
                        </ul>
                </div>
    </div>
    </nav>
    </header>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="font-family: 'Alegreya Sans', sans-serif;">Selamat Datang</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="../assets/img/desk.jpg"></a>
                    <h3 class="name">Cari Obat</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    <p class="text-center" style="margin-top: 20px;margin-bottom: 20px;"><a class="btn btn-primary border rounded-0 border-primary shadow-lg" role="button" href="#">Button</a></p>
                </div>
                <div class="col-sm-6 col-md-4 item"></div>
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="../assets/img/loft.jpg"></a>
                    <h3 class="name">Pasien</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    <p class="text-center" style="margin-top: 20px;"><a class="btn btn-primary border rounded-0 shadow-lg" role="button" href="#">Button</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic" style="background-color: #dbdbdb;">
        <footer>
            <p class="copyright" style="background-color: #dbdbdb;">Sistem Informasi Klinik Del ?? 2019</p>
        </footer>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Bold-BS4-Jumbotron-with-Particles-js.js"></script>
    
    

</body>

</html>