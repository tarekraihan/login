<?php session_start();
include_once("../classes/class_Admin.php");
$admin= new Admin();
$admin->login_ridirect();
if(isset($_POST["btnSubmit"]))
{
    $userName=$_POST["txtUserName"];
    $password=md5($_POST["txtPassword"]);
    echo $admin->CheckAdmin($userName,$password);
    /*if($result)
    {
        header("location:index.php");
    }
    else
    {
        $feedback="<div class=\"error\">Password or user name incorrect !!</div>";
    }*/
}
?>

<!DOCTYPE html>

<html>
<head>
	
	<meta charset="utf-8" />
	
	<title>Magistrate, All Bangladesh Airports</title>
	<link rel="stylesheet" href="../css/flexi-background_login.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="../css/styles_login.css" type="text/css" media="screen" />

	
</head>
<body>
	<script src="../js/flexi-background.js" type="text/javascript" charset="utf-8"></script>
	<div id="box">
		<img src="../images/magistrate.png" width="280" class="logo" alt="yourlogo" />
		<h1>Admin Login</h1>
		<form action="" method="post">
			<input type="text" name="txtUserName" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Username':this.value;" value="Username" />
			<input type="password" name="txtPassword" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Password':this.value;" value="Password">
			<input type="checkbox" id="remember" value="Remember" />
			<div class="hover-opacity"><label for="remember">Remember me</label></div>
			<input type="submit" name="btnSubmit" value="Log In" />
		</form>
	</div>
	<a href="#" class="forgot">Forgot your username or password?</a>
</body>
</html>