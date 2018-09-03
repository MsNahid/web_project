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


<?php
if(isset($_POST["submit"])) 
{
	$search_value = $_POST['search'];
	if($search_value != "")
	{
	$query = "SELECT * FROM product WHERE pname LIKE '%".$search_value."%'";
	$result = mysql_query($query);
	$check = mysql_fetch_array($result);
	if($check['pname'] !="")
	{

?>

<td>
		
			<div align="center"><h3>Search Result of "<?php echo $search_value; ?>"</h3></div>
			<?php
			echo "<ul id='dec'>";
			while($row = mysql_fetch_array($result)){
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
		
	<?php
	}
	}
}

?>

<table width="100%">
<tr>
<td>
<?php PageFooter(); ?>
</td>
</tr>
</table>
