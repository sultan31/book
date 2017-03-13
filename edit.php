<?php include 'config.php';?>
<?php 
	$edit = $_GET['edit'];
	
	$sql = "SELECT * FROM book WHERE id = '$edit'";
	
	$run = mysql_query($sql);
	
	while($row = mysql_fetch_row($run))
	{
		$id = $row[0];
?>
<html>
	<head>
		<title>Edit Records</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<style>
				td{padding:10px;}
				#demo{color:red;}
		</style>
	</head>
	<body>
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6">
			<form action="update.php?edit_id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
			<table align="center">
				<tr>
					<td colspan="5" style="text-align:center;color:red;">Edit Records</td>
				</tr>
				<tr>
					<td align="right">Title</td>
					<td><input type="text" name="title" value="<?php echo $row[1];?>"></td>
				</tr>
				<tr>
					<td align="right">Author</td>
					<td><input type="text" name="author" value="<?php echo $row[2];?>"></td>
				</tr>
				<tr>
					<td align="right">Price</td>
					<td><input type="text" name="price" value="<?php echo $row[3];?>"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td align="center">
						<input type="submit" name="update" value="Update" class="btn btn-success">
					</td>
				</tr>
			</table>
		 </form>
		</div>
		<div class="col-sm-3">
		</div>
	</body>
</html>
<?php
	}
?>