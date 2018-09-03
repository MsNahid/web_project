<?php
require_once("page.php");
require_once("db.php");
PageHeader("GSM Arena");
if(!isset($_SESSION["type"]))
	header('Location: logout.php');
if($_SESSION["type"] != 0)
	header('Location: logout.php');
	
	echo "<table align='right'>";
	echo "<tr>";
	echo "<td id='login'>Welcome ".$_SESSION["fname"]." ".$_SESSION["lname"] . "|";
	echo "<a href='logout.php'> Logout</a>";
	echo  "</td>";
	echo "</tr>";
	echo "</table>"; 

//Product Details

$fname = "";
$mname = "";
$lname = "";
$uname = "";
$pass = "";
$repass = "";
$email = "";


if(isset($_POST["user"])) 
{
	$fname = trim($_POST["fname"]);
	$mname = trim($_POST["mname"]);
	$lname = trim($_POST["lname"]);
	$uname = trim($_POST["uname"]);
	$pass = trim($_POST["pass"]);
	$email = trim($_POST["email"]);
	$utype = trim($_POST["utype"]);
	$pass = md5($pass);
	$q = "insert into user values(NULL,'$fname','$mname','$lname','$uname','$pass','$email','$utype')";
	mysql_query($q);
	
}


if(isset($_GET["did"]))
{
	$uid = $_GET["did"];
	$q = "delete from user where uid=$uid";
	mysql_query($q);
}


?>

<table valign="top">
<tr>
	<td id="search">
		<?php
		SearchOption();		
		?>
		
	</td>
</tr>
</table>


<table width="100%" border="0" >
<tr>
	<td>
		<?php AdminMenu(); ?>
	</td>
</tr>

<tr>

	<table>
	<tr>
			
			<h1 align="center">Add User</h1>
	<td>
	<form action="add_user.php" method="post">	

		<tr>
			<td>
				<tr> 
					<th align="left"> First Name: </th>
					<td><input type="text" name="fname" /></td>
				</tr>			
				<tr>
					<th align="left">Middle Name: </th>
					<td><input type="text" name="mname" />	</td>
				</tr>			
				<tr>
					<th align="left">Last Name: </th>
					<td><input type="text" name="lname" /></td>
				</tr>
				<tr>
					<th align="left">User Name:</th>
					<td><input type="text" name="uname" /></td>
				</tr>
				<tr>
					<th align="left">Password: </th>
					<td> <input type="text" name="pass" /></td>
				</tr>
				<tr>
					<th align="left">Email </th>
					<td><input type="text" name="email" /></td>
				</tr>
				<tr>
					<th align="left">Type:</th>
					<td><input type="checkbox" name="utype" value="1"  /> Regular User <input type="checkbox" name="utype" value="0"  /> Admin <br /></td>
				</tr>
				<tr>
					<th align="left"></th>
					<td><input type="submit" value="Add User" name="user"  class="btn"/></td>
				</tr>
				
			</td>
		</tr>
					
	</form>
	</td>
	</tr>
	</table>

</tr>

<tr>
<h2 align="center">Delete Product</h2>
	<td>
		<div class="pro">
		<table width="100%" border="1" cellpadding="0" cellspacing="0" >
			<tr>
				<th>SL No</th>
				<th>User Name</th>
				<th>Email</th>
				<th>Utype</th>
				<th>Delete</th>
			</tr>
		<?php
			$count = 1;
			$q = "SELECT * FROM user ";
			$rs = mysql_query($q);
			while($row = mysql_fetch_assoc($rs))
			{
				if($count % 2 == 0)
					$rcss = 'odd';
				else
					$rcss = 'even';
				echo "<tr>";
					$uid = $row["uid"];
					echo "<td class='$rcss' align= 'center'>".$count."</td>";
					echo "<td class='$rcss' align= 'center'>".$row["uname"]."</td>";
					echo "<td class='$rcss' align= 'center'>".$row["email"]."</td>";
					echo "<td class='$rcss' align= 'center'>".$row["utype"]."</td>";
					echo "<td class='$rcss' align= 'center'><a href='add_user.php?did=$uid'>delete</a></td>";
				echo "</tr>";
				$count++;
			}
		?>
		</table>
		</div>
	</td>
</tr>
</table>

<?php
PageFooter();
?>
