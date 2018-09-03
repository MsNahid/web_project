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


//Product

if(isset($_POST["pro"])) 
{
	$pname = trim($_POST["pname"]);
	$cid = $_POST["cid"];
	$pic = trim($_POST["pic"]);
	$pid = $_POST["pid"];
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "img/$pic");
	
	$q = "insert into product values(NULL,'$pname',$cid,'$pic')"; //echo $q;
	mysql_query($q);
	
	
}


//Product Details

if(isset($_POST["pdetail"]))
{
	$pid = trim($_POST["pid"]);
	$tech = trim($_POST["tech"]);
	$ann = trim($_POST["ann"]);
	$sta = trim($_POST["sta"]);	
	$dim = trim($_POST["dim"]);
	$wei = trim($_POST["wei"]);
	$sim = trim($_POST["sim"]);	
	$type = trim($_POST["type"]);
	$size = trim($_POST["size"]);
	$res = trim($_POST["res"]);	
	$os = trim($_POST["os"]);
	$chip = trim($_POST["chip"]);
	$cpu = trim($_POST["cpu"]);	
	$gpu = trim($_POST["gpu"]);
	$card = trim($_POST["card"]);
	$int = trim($_POST["int"]);	
	$prim = trim($_POST["prim"]);
	$feat = trim($_POST["feat"]);
	$vid = trim($_POST["vid"]);	
	$secn = trim($_POST["secn"]);
	
	$q = "insert into pdetails values($pid,'$tech','$ann','$sta','$dim','$wei','$sim',
				'$type','$size','$res','$os','$chip','$cpu','$gpu','$card','$int',
				'$prim','$feat','$vid','$secn')";
	mysql_query($q);
	
}


if(isset($_GET["did"]))
{
	$pid = $_GET["did"];
	$q = "delete from product where pid=$pid";
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
		<h1 align="center">Add Product</h1>
		<br />
		
		<form action="add_product.php" method="post" enctype="multipart/form-data">
			
			Product Name: <input type="text" name="pname" /> <br />
			Category :  <select name="cid">
							<?php
								$q = "select * from category";
								$rs = mysql_query($q);
								while($row = mysql_fetch_assoc($rs)) {
								
									echo "<option value='".$row["cid"]."'>".$row["cname"]."</option>";
								}
							?>
						</select><br />
			Select image to upload:<input type="file" name="fileToUpload" id="fileToUpload"> <br />
			Picture Name: <input type="text" name="pic" /> <br /> <br />
			
			<input type="submit" value="Add Product" name="pro" class="btn">
		</form>
		
		
		
	</td>
</tr>
<tr>

	<table>
	<tr>
		<h2 align="center">Add Product Details</h2>
	<td>
	<form action="add_product.php" method="post">		
		<tr>		
			<td>
					<b>Select Product :</b>  <select name="pid">
							<?php
								$q = "select * from product order by pid DESC";
								$rs = mysql_query($q);
								while($row = mysql_fetch_assoc($rs)) {
								
									echo "<option value='".$row["pid"]."'>".$row["pname"]."</option>";
								}
							?>
						</select> <br /> <br />
			</td>
		</tr>
		
		<tr>
			<td>
				<b><i><u>NETWORK</u></i></b>
				
				<tr> 
					<th> Technology: </th>
					<td><input type="text" name="tech" /></td>
				</tr>			
				<tr>
					<th>Announced: </th>
					<td><input type="text" name="ann" />	</td>
				</tr>			
				<tr>
					<th>Status: </th>
					<td><input type="text" name="sta" /></td>
				</tr>
			
			</td>
		</tr>
		
		<tr>
			<td>
				<b><i><u>BODY</u></i></b>
				<tr>
				<th>Dimensions:</th>
				<td><input type="text" name="dim" /></td>
				</tr>
				
				<tr>
				<th>Weight: </th>
				<td> <input type="text" name="wei" /></td>
				</tr>
				
				<tr>
				<th>SIM </th>
				<td><input type="text" name="sim" /></td>
				</tr>
			</td>
		</tr>
		
		<tr>
			<td>
				<b><i><u>DISPLAY</u></i></b>
				<tr>
				<th>Type:</th>
				<td><input type="text" name="type" /></td>
				</tr>
				<tr>
				<th>Size:</th>
				<td><input type="text" name="size" /></td>
				</tr>
				<tr>
				<th>Resulation:</th>
				<td> <input type="text" name="res" /></td>
				</tr>
			</td>
		</tr>
		
		<tr>
			<td>
				<b><i><u>PLATFORM</u></i></b>
				<tr>
				<th>OS:</th>
				<td><input type="text" name="os" /></td>
				</tr>
				<tr>
				<th>Chipset:</th>
				<td><input type="text" name="chip" /></td>
				</tr>
				<tr>
				<th>CPU:</th>
				<td><input type="text" name="cpu" /></td>
				</tr>
				<tr>
				<th>GPU:</th>
				<td><input type="text" name="gpu" /></td>
				</tr>
			</td>
		</tr>
		
		<tr>
			<td>
				<b><i><u>MEMORY</u></i></b>
				<tr>
				<th>Card Slot: </th>
				<td><input type="text" name="card" /></td>
				</tr>
				<tr>
				<th>Internal:</th>
				<td> <input type="text" name="int" /></td>
				</tr>
			</td>
		</tr>
		
		<tr>
			<td>
				<b><i><u>CAMERA</u></i></b>
				<tr>
					<th>Primary:</th>
					<td><input type="text" name="prim" /></td>
				</tr>
				<tr>
				<th>Features:</th>
				<td><input type="text" name="feat" /></td>
				</tr>
				<tr>
				<th>Videos:</th>
				<td><input type="text" name="vid" /></td>
				</tr>
				<tr>
				<th>Secondary:</th>
				<td><input type="text" name="secn" /></td>
				</tr>
			</td>
		</tr>
		
		
		<tr>
			<td>
				<br /> 
				<input type="submit" value="Add Product Details" name="pdetail" class="btn">
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
				<th>SL no</th>
				<th>Category Name</th>
				<th>Delete</th>
			</tr>
		<?php
			$count = 1;
			$q = "SELECT * FROM product order by pid DESC";
			$rs = mysql_query($q);
			while($row = mysql_fetch_assoc($rs))
			{
				if($count % 2 == 0)
					$rcss = 'odd';
				else
					$rcss = 'even';
				echo "<tr>";
					$pid = $row["pid"];
					echo "<td class='$rcss'>".$count."</td>";
					echo "<td class='$rcss'>".$row["pname"]."</td>";
					echo "<td class='$rcss'><a href='add_product.php?did=$pid'>delete</a></td>";
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
