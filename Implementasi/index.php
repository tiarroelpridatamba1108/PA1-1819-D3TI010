<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PA1_1819_D3TI10</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/mystyle.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
</head>

<body>
    <div>
        <header class="background_header">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#"><strong>Sistem Informasi Klinik Del</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse d-flex flex-row-reverse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="autentikasi/register.php">Register</a></li>
                        </ul>
                </div>
    </div>
    </nav>
    </header>
    </div>
    <div>
        <div class="container" style="margin-top: 40px;">
            <div class="jumbotron border rounded-0 shadow-lg" style="margin-top: 100px;background-color: rgb(158,200,241);font-family: 'Alegreya Sans', sans-serif;">
                <div class="row register-form">
                    <div class="col-md-8 offset-md-2">
                        <form class="custom-form" method="post">
                            <h1>Login</h1>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Username</label></div>
                                <div class="col-sm-6 input-column"><input class="border rounded-0 form-control" type="text" name="username" required=""></div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                                <div class="col-sm-6 input-column"><input class="border rounded-0 form-control" type="password" name="password" required=""><!-- <input class="border rounded-0 form-control" type="password" name="password" required=""> --></div>
                            </div><button class="btn btn-light submit-button" type="submit" name="log">Login</button></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Bold-BS4-Jumbotron-with-Particles-js.js"></script>
    
    <?php
        include_once "assets/php/function.php";
        if(isset($_POST['log'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = getUser($username);
            if($user->num_rows > 0){
                $user1 = $user->fetch_assoc();
                if($password == $user1['password']){
                    set_session("is_logged_" . $user1['role'], TRUE);
                    set_session("name", $user1['nama_user']);
                    
                    if($user1['role'] == 'DOKTER'){
                        redirect('dokter/dokter_dashboard.php');
                    }else{
                        redirect('perawat/perawat_dashboard.php');
                    }
                }
            }else{
    ?>
                <script>
                    alert("Username atau password salah!");
                </script>
    <?php
            }
        }
    ?>

</body>

</html>