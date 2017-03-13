<?php  include 'config.php';?>
<html>
	<head>
		<title>All Records</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
	</head>
	<body>
		<div class="col-sm-12">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<table class="table table-hover">
					<tr class="success" style="text-align:center;font-weight:bold;">
						<td>Sr.NO</td>
						<td>Title</td>
						<td>Author</td>
						<td>Price</td>
						<td>Delete</td>
						<td>Edit</td>
					</tr>
					<?php 
						$sel = "SELECT * FROM book";
						
						$run = mysql_query($sel);
						
						$i = 0;
						
						while($row = mysql_fetch_row($run))
						{
								$id = $row[0];
								$i++;
					?>
					<tr class="danger" style="text-align:center;">
						<td><?php echo $i;?></td>
						<td><?php echo $row[1];?></td>
						<td><?php echo $row[2];?></td>
						<td><?php echo $row[3];?></td>
						<td><a href="delete.php?del=<?php echo $id;?>"><img src="images/delete.png"></a></td>
						<td><a href="edit.php?edit=<?php echo $id;?>"><img src="images/edit.jpg"></a></td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
	</body>
</html>