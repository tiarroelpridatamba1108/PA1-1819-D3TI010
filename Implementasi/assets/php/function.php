<?php
	
    session_start();

	global $con;

    $con = mysqli_connect("localhost", "root", "");
	if (!$con) {
		die("database connect problem");
    }
    
    $db_use = mysqli_select_db($con, "sikd") or die("selet db problem !!");

    function execQ($strQ){
		global $con;
		$res = mysqli_query($con, $strQ);
		return $res;		
    }
    
    function closeConn()
	{
		global $con;
		$res = mysqli_close($con);
		return $res;		
		
    }
    function redirect($_location){
        header('Location: ' .$_location);
    }

    function destroy_session($_key)
	{
	    unset($_SESSION[$_key]);
	}
        
    function set_session($_key, $_value){
        $_SESSION[$_key] = $_value;
    }

    function get_form_post($_key){
        $value = (isset($_POST[$_key]))? $_POST[$_key]: null;
        return($value);
    }

    function getUser($username){
    	$strQ = "SELECT * FROM user WHERE username='$username'";
    	$user = execQ($strQ);
    	return $user;
    }

    function get_session($_key){
        $value = (isset($_SESSION[$_key]))? $_SESSION[$_key]: null;
        return($value);
    }

    function getRegistrasi(){
        $strQ = "SELECT * FROM user";
        $user = execQ($strQ);
        return $user;
    }

    function registrasi($username, $password, $nama, $email, $role){
        $strQ = "INSERT INTO `user` VALUES('', '$username', '$password', '$nama', '$email', '$role')";
        $user = execQ($strQ);
    }

?>