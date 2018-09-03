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
	echo "<td id='login'>Welcome " .$_SESSION["fname"]." ".$_SESSION["lname"] . "|";
	echo "<a href='logout.php'> Logout</a>";
	echo  "</td>";
	echo "</tr>";
	echo "</table>"; 

if(isset($_POST["cat"])) 
{
	$cname = trim($_POST["cname"]);
	$q = "INSERT INTO category values(NULL,'$cname')";
	mysql_query($q);
}

if(isset($_GET["did"]))
{
	$cid = $_GET["did"];
	$q = "delete from category where cid=$cid";
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
	<td width="400" valign="top">
		<h1 align="center">Add Category</h1>
		<br />
		<fieldset>
			<legend>Add Category</legend>
			<form action="admin.php" method="post">
				Category Name: <input type="text" name="cname" />
				<input type="submit" name="cat" />
			</form>
		</fieldset>
	</td>
</tr>
<tr>
	<td>
		<div id="cat">
		<table width="100%" border="1" cellpadding="0" cellspacing="0" >
			<tr>
				<th>SL No</th>
				<th>Category Name</th>
				<th>Delete</th>
			</tr>
		<?php
			$count = 1;
			$q = "SELECT * FROM category order by cid DESC";
			$rs = mysql_query($q);
			while($row = mysql_fetch_assoc($rs))
			{
				if($count % 2 == 0)
					$rcss = 'odd';
				else
					$rcss = 'even';
				echo "<tr>";
					$cid = $row["cid"];
					echo "<td class='$rcss'>".$count."</td>";
					echo "<td class='$rcss'>".$row["cname"]."</td>";
					echo "<td class='$rcss'><a href='admin.php?did=$cid'>delete</a></td>";
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
