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
						<td>Title</td>
						<td>Author</td>
						<td>Price</td>
					</tr>
					<?php 
					if(isset($_POST['search']))
					{
						$item = $_POST['item'];
						
						$sel = "SELECT * FROM book WHERE title LIKE '%$item%' OR author LIKE '%$item%'";
						
						$run = mysql_query($sel);
						
						while($row = mysql_fetch_row($run))
						{
								$id = $row[0];
					?>
					<tr class="danger" style="text-align:center;">
						<td><?php echo $row[1];?></td>
						<td><?php echo $row[2];?></td>
						<td><?php echo $row[3];?></td>
					</tr>
					<?php
						}
					}
					?>
				</table>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
	</body>
</html>