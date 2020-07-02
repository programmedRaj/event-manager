<?php
session_start();
if(isset($_POST['tick'])&&isset($_POST['action'])&&isset($_POST['idea'])){
	$idea=$_POST['idea'];
	
	
	
if(isset($_SESSION['seemail'])){
	require "dbc.php";
	$seEmail  = $_SESSION['seemail'];
	$id = $_SESSION['seid'];


$query = mysql_query("SELECT * FROM register WHERE id=$idea ");
	$numrow = @mysql_num_rows($query);
	
	if($numrow!=0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			
		 
		 $email = $row['email'];
		$confirmed = $row['confirmed'];
		$company = $row['company'];
		$password =$row['password'];
		$reg=$row['reg'];
		 
		}
		
		
		
		



$j=date("Y-m-d")



$myemail="info@sammeyinc.com";
$message="$fname applied at $j ";


$subject="hi";
@mail($email,$subject,$message,"From:".$myemail);
}
}else 
	{
		echo "alert";
	}
}else{
	header("Location:index.php");
}
}