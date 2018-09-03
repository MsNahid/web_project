<?php
$con = mysql_connect("localhost","root","");
if(!$con)
	die("Could not connect the Database");
mysql_select_db("gsm",$con);


function GetProductNameById($pid)
{
	$q = "select pname from product where pid=$pid";
	$rs = mysql_query($q);
	$row = mysql_fetch_assoc($rs);
	
	return $row["pname"];
}
function GetProductPicById($pid)
{
	$q = "select pic from product where pid=$pid";
	$rs = mysql_query($q);
	$row = mysql_fetch_assoc($rs);
	
	return $row["pic"];
}
function LeftMenu()
{
	$q = "Select * from category order by cname ASC";
	$rs = mysql_query($q);
	echo "<ul id='menu'>";
	while($row=mysql_fetch_assoc($rs))
	{
		echo "<li>
		<table>
		<tr>
		<td>
			<img src='img/li-brandmenu.gif' />
		</td>
		<td>
			<a href='index.php?cid=".$row["cid"]."'>".$row["cname"]."</a>
		</td>
		</table>
		</li>";
	}
	echo "</ul>";
}
?>