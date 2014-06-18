<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PullDrive</title>
	<?php 
		include_once "./php/pulldrive.php";
	?>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

	<div class="container">
		
		<h1>PullDrive</h1>

		<p>Your files have been pulled. Click the button below to download them.</p>


		<?php echo "<a href=./" . $filename . "><button>Download</button></a>"; ?>
		<br />
		<br />
		<a href="javascript:history.go(0)"><button>Refresh the page</button></a>
		<br />
		<br />
		<form method="post" action="clear.php">
		<input name="go" type="submit" value="Clear Old" />
		</form>
		<p>Click Download to pull through the latest data. It is best if you press Clear Old first too as this removes the old downloads.</p>
		<p>If the Download does not work, try pressing CTRL + R to refresh the page.</p>
		<h2>&copy; Deep Blue Sports <?php echo date("Y");?></h2>

	</div>
	
</body>
</html>