<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Verified..</title>
</head>

<body>
<?php

require "dbc.php";

$email = $_GET['email'];
@$code = $_GET['code'];

$query = mysql_query("SELECT * FROM `register` WHERE `email`='$email'");
while($row = mysql_fetch_assoc($query))
{
	$db_code = $row['confirm_code'];
}
if($code == $db_code)
{
	mysql_query("UPDATE `register` SET `confirmed`='1' WHERE `email`='$email'");
	mysql_query("UPDATE `register` SET `confirm_code`='0' WHERE `email`='$email'");
	
	//echo "Thank You. Your email has been confirmed and you may now login";
	?>
	<script>alert('Thank You. Your email has been confirmed and you may now login');</script>
	<script>window.location.href="index.php"</script>
	<?php
}
else
{
	?>
	<script>alert("Username and code dont match");</script>	
<?php
	}

?>
</body>
</html>