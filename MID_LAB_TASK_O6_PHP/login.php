 <?php	
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if( $username != null &&  $password != null){

			$user = $_SESSION['user'];
			if($user['username'] == $username && $user['password'] == $password){
				
				setcookie('status', 'true', time()+3600, '/');
				header('location: home.php');
			}else{
				echo "invalid user";
			}
		}else{
			echo "null submission";
		}
	}

?>

<html>
<head>
	<title>Login form</title>
</head>


    
    <body>
        <table border="1" width="100%">
            <tr>
                <td ><p align="left">X Company</p>
            <p align="right"><a href="public.html">home</a>
            <a href="login.php">login</a>
            <a href="reg.php">Registration</a>
</p>        </td>
            </tr>
    
    <tr>
    <td>
	<form method="POST" action="loginCheck.php">
		<fieldset> 
			<legend>Login</legend>
		<table>
			<tr>
				
				<td>Username</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td> <a href="forgotpassword.php">Forget Password?</a>  </td>
			</tr>
		</table>
		</fieldset>
    </td>
    </tr>
    <tr>
        <td height="50px" align="center">copyright 2017</td>
    </tr>
    
        </table>
    </body>
</html>



