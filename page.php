<?php
session_start();
function PageHeader($title)
{
?>
<html>
<head>
<title> <?=$title?></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrapper">
<div id="header">
	<h1><a href="index.php">GSM Arena</a></h1>
</div>
<div id="content">

<?php
}
function PageFooter()
{
?>
</div>

<div id="footer">PHP Batch 18</div>

</div>
</body>
</html>
<?php
}
function AdminMenu()
{
?>
<div>
	<ul id="amenu">
		<li><a href="index.php">Home</a></li>
		<li><a href="admin.php">Category</a></li>
		<li><a href="add_product.php">Product</a></li>
		<li><a href="add_user.php">User</a></li>			
	</ul>
</div>
<?php
}
function SearchOption()
{
?>

<table>
<tr>
</td>
<form action="search.php" method="POST">
<input type="search" name="search" placeholder="search..." />
<input type="submit" name="submit"  value="search"/>	
</form>
</td>
</tr>
</table>

<?php
}
?>
