<?php include 'config.php';?>
<?php
	if(isset($_POST['update']))
	{
		echo $update = $_GET['edit_id'];
		
		echo $title = $_POST['title'];
		
		echo $author = $_POST['author'];
		
		echo $price = $_POST['price'];
		
		$sql = "UPDATE book set title='$title',author='$author',price='$price'WHERE id='$update'";
		
		$run = mysql_query($sql);
		
		if(isset($run))
		{
			header("location:view.php");
		}
	}
?>