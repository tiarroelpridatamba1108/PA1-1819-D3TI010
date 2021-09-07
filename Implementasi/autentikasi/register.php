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
    
    <?php
        include "../assets/php/function.php";
        $user = getRegistrasi();
        $ctr = 0;
        if(isset($_POST['register'])){
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password1 = $_POST['password'];
            $password2 = $_POST['repassword'];
            $role = $_POST['role'];
            while($baris = $user->fetch_assoc()){
                if($username == $baris['username']){
                    $ctr++;
                }
            }
            
            if($ctr > 0){
    ?>
                <script>
                    alert("Username sudah terdaftar!Gunakan username lain");
                </script>
    <?php
            }else{
                if($password1 != $password2){
                    set_session('TSama', TRUE);
                }else{
                    registrasi($username, $password1, $nama, $email, $role);
    ?>
                        <script>
                            alert("Akun berhasil di daftarkan!");
                        </script>
    <?php
                }
            }

        }
    ?>

    <div>
        <header class="background_header">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#"><strong>Sistem Informasi Klinik Del</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse d-flex flex-row-reverse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php">Login</a></li>
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
                        <form class="custom-form" method="POST">
                            <h1>Register</h1>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nama</label></div>
                                <div class="col-sm-6 input-column"><input class="border rounded-0 form-control" type="text" name="nama" required="" placeholder="Jarvis Howard"></div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Username</label></div>
                                <div class="col-sm-6 input-column"><input class="border rounded-0 form-control" type="text" name="username" required="" placeholder="Jarvis"></div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                                <div class="col-sm-6 input-column"><input class="border rounded-0 form-control" type="email" name="email" required="" placeholder="example.email@email.com"></div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                                <div class="col-sm-6 input-column"><input cla
                                    ss="border rounded-0 form-control" type="password" name="password" required="" minlength="5"></div>
                                
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Ulangi Password</label></div>
                                
                                <div class="col-sm-6 input-column"><input cla
                                    ss="border rounded-0 form-control" type="password" name="repassword" re
                                quired="" minlength="5"></div>
                            </div>
							<div class="form-row form-group">
								<div class = "col-sm-4 label-column"><label class="col-form-label" for="role">Role</label></div>
								<div class = "col-sm-6 input-column">
									<select class="border rounde
                                    d-0 form-control" name="role" required="">
									<option value="" selected="">Status</option>
									<option value="DOKTER">Dokter</option>
									<option value="PERAWAT">Perawat</option>
									</select>
                                    
								</div>
							</div>
                            
                            <div class="form-check"><input class="form-check-input" type="checkbox" required="" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Saya setuju untuk mengikuti pedoman penggunaan web</label></div>
                            <button class="btn btn-light bg-info border rounded-0 border-primary shadow-lg submit-button" type="submit" name="register">Registrasi</button>
                            <?php
                                if(get_session('TSama')){
                            ?>
                                    <div class="alert alert-warning">Password tidak sama</div>
                            <?php
                                    destroy_session('TSama');
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Bold-BS4-Jumbotron-with-Particles-js.js"></script>
</body>

</html>