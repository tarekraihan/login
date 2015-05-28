<?php
	require_once("class_DB_Connection.php");
	
	class Admin extends DB_Connection
	{
		function CheckAdmin($userName,$password){
			$feedback="";			
			$query=mysql_query("SELECT * FROM tbl_user WHERE user_name='$userName' AND password='$password'");
			if(mysql_num_rows($query) > 0){
				while($value=mysql_fetch_array($query))
				{
                    $_SESSION["fullName"]=$value["full_name"];
					$_SESSION["userName"]=$value["user_name"];
					$_SESSION["password"]=$value["password"];
                    $_SESSION["userId"]=$value["user_id"];
					header("location:../index.php");	
				}
				$feedback="incorrect";
				
			}
			return $feedback;
		}
	
		
		function login()
		{
			if(isset($_SESSION["userName"]) && isset($_SESSION["password"]))
			{
				return 1;	
			}else
			{
				return 0;	
			}	
		}
		
		function not_login()
		{
			if(!$this->login())
			{
				header("location:pages/login.php");
			}	
		}
		function login_ridirect(){
			if($this->login()){
				header("location:../index.php");
			}
		}
		function Admin_logout()
		{
			session_unset();
			session_destroy();
			header("location:index.php");
		}
		
		
		
	}
?>