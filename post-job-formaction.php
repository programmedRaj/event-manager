<?php

include ("dbc.php");
if (isset($_POST['action']))

{


$CN=htmlentities($_POST['cn']);

$CNUM=htmlentities($_POST['cnum']);
$CEMAIL=htmlentities($_POST['cemail']);

$CDESC=htmlentities($_POST['cdesc']);
$JOBTITLE=htmlentities($_POST['job-title']);
$JTYPE=htmlentities($_POST['jtype']);


$JLOC=htmlentities($_POST['job-location']);
$JSALARY=htmlentities($_POST['job-salary']);
$JEXPDATE=htmlentities($_POST['expdate']);
$COMPID=htmlentities($_POST['compid']);

$query="INSERT into postjob(compname,phonenumber,email,description,jobtitle,jobtype,
jlocation,salary,expirydate,company_id)VALUES ('$CN','$CNUM','$CEMAIL','$CDESC','$JOBTITLE','$JTYPE','$JLOC'
	,'$JSALARY','$JEXPDATE','$COMPID')";
			$query_run=mysql_query($query);
			if($query_run==1)
		{?>
		<script>alert("success");</script>
		<script>window.location.href="post-job-form_3.php";</script>
		<?php
		
		}
		else
		{
		?>
			<script>alert('something went wrong');</script>	
			
		<?php
		
		}
}
else{
	header("location:index.php");
}
?>