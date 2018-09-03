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
	<div id="login"><a href="login.php">Login</a> | <a href="signup.php">Get Register</a></div>
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



<table width="100%" border="0" cellspacing="0" cellpadding="5" >
<tr>
<td valign="top" width="10%" >
	<?php leftMenu(); ?>
</td>
<td valign="top" style="padding: 10px;min-height: 900px;">
<?php
if(isset($_POST["com"])) 
{
	$u = $_SESSION["uname"];
	$pid = $_GET["id"];
	$c = trim($_POST["c"]);
	$q = "insert into comment values('$u',$pid,'$c')";
	mysql_query($q);
}

if(isset($_GET["id"]))
{
	$pid = $_GET["id"];
	$q = "select * from pdetails where pid=$pid";
	$rs = mysql_query($q);
	$row = mysql_fetch_assoc($rs);
	?>
	<h1 class='ptitle'><?php echo GetProductNameById($pid); ?></h1>
	<table width="100%">
	<tr>
	<td valign='top' width="100">
		<div class="pbg"><img src="img/<?php echo GetProductPicById($pid); ?>" width='100' height='200'  /></div>
	</td>
	<td class="pbg" valign='top'>
		<table border="0" cellspacing="10">
		<tr class='rbb'>
			<td valign='top' class="ptitle" class='rbb'>NETWORK</td>
			<td>
				<div class="dbg"><span>Technology</span><?php echo $row["technology"]; ?></div>
				<div class="dbg"><span>Announced</span><?php echo $row["announced"]; ?></div>
				<div class="dbg"><span>status</span><?php echo $row["status"]; ?></div>
			</td>
		</tr>
		<tr>
			<td valign='top' class="ptitle" class='rbb'>BODY</td>
			<td>
				<div class="dbg"><span>dimensions</span><?php echo $row["dimensions"]; ?></div>
				<div class="dbg"><span>weight</span><?php echo $row["weight"]; ?></div>
				<div class="dbg"><span>sim</span><?php echo $row["sim"]; ?></div>
			</td>
		</tr>
		<tr>
			<td valign='top' class="ptitle" class='rbb'>DISPLAY</td>
			<td>
				<div class="dbg"><span>type</span><?php echo $row["type"]; ?></div>
				<div class="dbg"><span>size</span><?php echo $row["size"]; ?></div>
				<div class="dbg"><span>resulation</span><?php echo $row["resulation"]; ?></div>
			</td>
		</tr>
		<tr>
			<td valign='top' class="ptitle" class='rbb'>PLATFORM</td>
			<td>
				<div class="dbg"><span>os</span><?php echo $row["os"]; ?></div>
				<div class="dbg"><span>chipset</span><?php echo $row["chipset"]; ?></div>
				<div class="dbg"><span>cpu</span><?php echo $row["cpu"]; ?></div>
				<div class="dbg"><span>gpu</span><?php echo $row["gpu"]; ?></div>
			</td>
		</tr>
		<tr>
			<td valign='top' class="ptitle" class='rbb'>MEMORY</td>
			<td>
				<div class="dbg"><span>card_slot</span><?php echo $row["card_slot"]; ?></div>
				<div class="dbg"><span>internal</span><?php echo $row["internal"]; ?></div>
			</td>
		</tr>
		<tr>
			<td valign='top' class="ptitle" class='rbb'>CAMERA</td>
			<td>
				<div class="dbg"><span>primary</span><?php echo $row["primary"]; ?></div>
				<div class="dbg"><span>features</span><?php echo $row["features"]; ?></div>
				<div class="dbg"><span>video</span><?php echo $row["video"]; ?></div>
				<div class="dbg"><span>secondary</span><?php echo $row["secondary"]; ?></div>
			</td>
			
		</tr>
		</table>
		
		<div align="center">
		<form action="details.php?id=<?php echo $pid; ?>" method="post">
			<textarea rows="10" cols="50" name="c"></textarea>
			<br />
			<?php
				if(isset($_SESSION["uname"]))
				{
			?>
					<input type="submit" value="Post Comment" class="btn" name="com" />
			<?php
				}
				else
				{
					echo "<div align='center' class='err'>Please login to post any comment(s)</div>";
				}
			?>
		</div>
		<table>
		<?php
			$q = "select * from comment where pid=$pid";
			$rs = mysql_query($q);
			while($row = mysql_fetch_assoc($rs))
			{
				echo "<tr>";
					echo "<th>".$row["uname"]."</th>";
					echo "<td>".$row["desc"]."</td>";
				echo "</tr>";
			}
		?>
		</table>
	</td>
	</tr>
	</table>
	<?php
}
?>
</td>
</tr>
</table>
<?php
PageFooter();
?>