<?php include 'config.php';?>
<?php
	$del = $_GET['del'];
	
	$sql = "DELETE FROM book WHERE id = '$del'";
	
	$run = mysql_query($sql);
	
	if(isset($run))
	{
		header("location:view.php");
	}
		
?>
