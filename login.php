<?php
//error_reporting(E_ALL);
require_once("page.php");
require_once("db.php");
PageHeader("Sign UP");

if(isset($_POST["submit"]))
{
	$uname = trim($_POST["uname"]);
	$pass = md5(trim($_POST["pass"]));
	
	$q = "SELECT * from user where uname='$uname' AND pass='$pass'";
	$rs = mysql_query($q);
	if(mysql_num_rows($rs) == 1)
	{
		$data = mysql_fetch_assoc($rs);
		$_SESSION["uname"] = $data["uname"];
		$_SESSION["fname"] = $data["fname"];
		$_SESSION["lname"] = $data["lname"];
		$_SESSION["type"] = $data["utype"];
		
		if($data["utype"] == 0)
			header('Location: admin.php');
		else
			header('Location: index.php');
	}
	else
	{
		echo "<div align='center' class='err'>Invalid Information</div>";
	}
}

?>
<form action="login.php" method="post">
<table align="center">
<tr>
	<th align="right">User Name:</th>
	<td><input type="text" name="uname" /></td>
</tr>
<tr>
	<th align="right">Password:</th>
	<td><input type="password" name="pass" /></td>
</tr>
<tr>
	<th align="right">&nbsp;</th>
	<td><input type="submit" name="submit" value="Login" class="btn" /></td>
</tr>
</table>
</form>
<?php
PageFooter();
?>