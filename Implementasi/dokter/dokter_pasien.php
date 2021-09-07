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
                        class="collapse navbar-collapse d-flex" id="navcol-1">
                        <ul class="nav navbar-nav d-flex">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Dashboard</a></li>
                        </ul>
                        <ul class="nav navbar-nav d-flex ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Logout</a></li>
                        </ul>
                </div>
    </div>
    </nav>
    </header>
    </div>
    <div>
        <h1 class="text-center" style="margin-top: 20px;">Pasien</h1>
        <div class="container">
            <div class="row" style="margin-bottom: 40px;">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <form>
                        <div class="form-row">
                            <div class="col text-right"><button class="btn btn-primary border rounded-0 shadow-lg" type="button">Cari</button></div>
                            <div class="col"><input class="border rounded-0 form-control" type="search"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="border rounded-0 shadow-lg">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                    </tr>
                                    <tr>
                                        <td>Cell 3</td>
                                        <td>Cell 4</td>
                                    </tr>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                    </tr>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                    </tr>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                    </tr>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                    </tr>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <nav class="d-flex justify-content-center" style="background-color: #ffffff;">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item"><a class="page-link">1</a></li>
                                <li class="page-item"><a class="page-link">2</a></li>
                                <li class="page-item"><a class="page-link">3</a></li>
                                <li class="page-item"><a class="page-link">4</a></li>
                                <li class="page-item"><a class="page-link">5</a></li>
                                <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
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