<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
</head>
<body>
	<form method="REQUEST" action="dob.php">

		<fieldset><legend>Date Of Birth</legend> <input type="date" name="dob" value="" /><br>
				<input type="submit" name="submit" value="Submit"></fieldset>
	</form>
</body>
</html>
Tapu Saha
Tapu Saha Orittro
<?php
	
	if(isset($_REQUEST['submit'])){
		
		$dob = $_REQUEST['dob'];

		if($dob == ""){
			echo "invalid email!";
		}else{
			echo $dob;
		}

	}else{
		echo 'invalid request';
	}
?>
