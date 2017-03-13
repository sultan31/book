<?php include 'config.php';?>
<html>
	<head>
		<title>Book</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<style>
				td{padding:10px;}
				#demo{color:red;}
		</style>
		<script>
			function myFunc()
			{
				window.location.href="view.php";
			}
		</script>
		<script>
				function validation()
				{
					var result = true;
					
					var x = document.getElementById('item').value.length;
					
					if(x == 0)
					{
						result = false;
						
						alert("please enter search item");
						
						return result;
					}
				}
		</script>
	</head>
	<body>
		<div class="col-sm-3">
			<form action="search.php" method="post" enctype="multipart/form-data" onsubmit="return validation()">
				<table>
					<tr>
						<td><input type="text" name="item" id="item" placeholder="Search Here"></td>
					</tr>
					<tr>
						<td><input type="submit" name="search" value="Search" class="btn btn-info"></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="col-sm-6">
			<form action="insert.php" method="post" enctype="multipart/form-data">
			<table align="center">
				<tr>
					<td colspan="5" style="text-align:center;color:red;">Insert New Books</td>
				</tr>
				<tr>
					<td align="right">Title</td>
					<td><input type="text" name="title"></td>
				</tr>
				<tr>
					<td align="right">Author</td>
					<td><input type="text" name="author"></td>
				</tr>
				<tr>
					<td align="right">Price</td>
					<td><input type="text" name="price"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td align="center">
						<input type="submit" name="insert" value="Insert" class="btn btn-success">
						<input type="button" onclick="myFunc()" value="View" class="btn btn-danger">
					</td>
				</tr>
			</table>
		 </form>
		</div>
		<div class="col-sm-3" id="demo">
		</div>
	</body>
</html>
<?php
	if(isset($_POST['insert']))
	{
		$title = $_POST['title'];
		
		$author = $_POST['author'];
		
		$price = $_POST['price'];
		
		$sql = "INSERT INTO book(title,author,price)VALUES('$title','$author','$price')";
		
		$run = mysql_query($sql);
		
		if(isset($run))
		{
				echo "<script>document.getElementById('demo').innerHTML='<h1>Record is inserted</h1>'</script>";
		}
	}
?>

