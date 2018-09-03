<?php
//error_reporting(E_ALL);
require_once("page.php");
require_once("db.php");
PageHeader("Sign UP");
?>
<h1 align="center">Get Register</h1>

<?php

$efname = "";
$elname = "";
$euname = "";
$epass = "";
$erepass = "";
$eemail = "";

$fname = "";
$mname = "";
$lname = "";
$uname = "";
$pass = "";
$repass = "";
$email = "";

if(isset($_POST["submit"]))
{		
	$fname = trim($_POST["fname"]);
	$mname = trim($_POST["mname"]);
	$lname = trim($_POST["lname"]);
	$uname = trim($_POST["uname"]);
	$pass = trim($_POST["pass"]);
	$repass = trim($_POST["repass"]);
	$email = trim($_POST["email"]);

	if($fname == "")
	{
		$efname = "First name can not be left empty";
		
	}
	if($lname == "")
	{
		$elname = "Last name can not be left empty";
		
	}
	if($uname == "")
	{
		$euname = "User Name can not be left empty";
		
	}	
	
	if($pass == "")
	{
		$epass = "*";
		
	}
	else if($pass != $repass)
	{
		$erepass = "Password does not match";
		
	}
	if($email == "")
	{
		$eemail = "email can not be left empty";
		
	}
	
	if($efname == "" && $elname == "" && $euname == "" 
		&& $epass == "" && $erepass == "" && $eemail == "")
		
	{	$pass = md5($pass);
		$q = "insert into user values(NULL,'$fname','$mname','$lname','$uname','$pass','$email',1)";
		//echo $q;
		mysql_query($q);
		echo "<div class='smgs'>Registration Successful</div>";
	}
	else
	{
		echo "<div class='err' align='center'>Try Again</div>";
	}
	
	
}

?>
<form action="signup.php" method="post">
<table border="0" id="t1" align="center" width="100%">
<tr>
	<th width='30%' align="right">First Name:</th>
	<td width='20%'><input type="text" name="fname" value="<?php echo $fname; ?>" class="inp" /></td>
	<td class="err"><?php echo $efname; ?></td>
</tr>
<tr>
	<th align="right">Middle Name:</th>
	<td><input type="text" name="mname" class="inp" value="<?php echo $mname; ?>" /></td>
	<td class="err"></td>
</tr>
<tr>
	<th align="right">last Name:</th>
	<td><input type="text" name="lname" class="inp" value="<?php echo $lname; ?>" /></td>
	<td class="err"><?php echo $elname; ?></td>
</tr>
<tr>
	<th align="right">User Name:</th>
	<td><input type="text" name="uname" class="inp" value="<?php echo $uname; ?>" /></td>
	<td class="err"><?php echo $euname; ?></td>
</tr>
<tr>
	<th align="right">Password:</th>
	<td><input type="password" name="pass" class="inp" /></td>
	<td class="err"><?php echo $epass; ?></td>
</tr>
<tr>
	<th align="right">Retype Password:</th>
	<td><input type="password" name="repass" class="inp" /></td>
	<td class="err"><?php echo $erepass; ?></td>
</tr>
<tr>
	<th align="right">Email:</th>
	<td><input type="text" name="email" class="inp" value="<?php echo $email; ?>" /></td>
	<td class="err"><?php echo $eemail; ?></td>
</tr>
<tr>
	<th align="right">&nbsp;</th>
	<td><input type="submit" name="submit" value="Sign up" class='btn' /></td>
	<td><a href="login.php">Go to Login</a></td>
</tr>
</table>
</form>
<?php
PageFooter();
?>