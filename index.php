<?php
require_once("page.php");
require_once("db.php");
PageHeader("GSM Arena");
if(isset($_SESSION["fname"]))
{
	echo "<table align='right'>";
	echo "<tr>";
	echo "<td id='login'>Welcome " ."<a href='admin.php'>".$_SESSION["fname"]." ".$_SESSION["lname"] ."</a>" . "|";
	echo "<a href='logout.php'> Logout</a>";
	echo  "</td>";
	echo "</tr>";
	echo "</table>"; 

}
else
{
?>
<table align="right">
<tr>
	<td id="login"><a href="login.php">Login</a> | <a href="signup.php">Get Register</a></td>	
</tr>
</table>
<?php
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


<table width="100%" border="0 " >
<tr>
<td valign="top" width="10%" >
<?php
	leftMenu();
?>
</td>
<td>
<?php
$cid=10;
if(isset($_GET["cid"]))
		$cid = $_GET["cid"];

	$q = "Select * from product where cid=$cid";
	$rs = mysql_query($q);
	echo "<ul id='dec'>";
	while($row = mysql_fetch_assoc($rs))
	{
		echo "<li>";
		echo "<a href='details.php?id=".$row["pid"]."'>";
		echo "<div><img src='img/".$row["pic"]."'  width='140px' height='180px' /></div>";
		echo "<div align='center' class='pname'>".$row["pname"]."</div>";
		echo "</a>";
		echo "</li>";
	}
	echo "</ul>";
?>
</td>
</tr>
</table>
<?php
PageFooter();
?>