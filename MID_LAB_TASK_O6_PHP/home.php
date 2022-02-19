<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome home!</h1> <a href="logout.php">Logout </a>	
</body>
</html>

<?php

	}else{
		echo "invalid request";
	}
?>
<html>
<head>
	<title>Login form</title>
</head>



    <body>
        <table border="1"  align="center" >
            <tr>
                <td colspan="2" ><p align="left">X Company</p>
            <p align="right"><a href="public.html">home</a>
            <a href="login.php">login</a>
            <a href="reg.php">Registration</a>
</p>        </td>
            </tr>
    
    <tr>
    <td width="100px">
        Account
        <ol >
            <li>dasboard</li>
            <li>dasboard</li>
            <li>dasboard</li>
            <li>dasboard</li>
        </ol>
</td>
<td width="250px">
    welcome
</td>
	
		
    <tr>
        <td colspan="2"height="50px" align="center">copyright 2017</td>
    </tr>
    
        </table>
    </body>
</html> 
 