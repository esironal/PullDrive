<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PullDrive</title>
	<?php 
		include_once "pulldrive.php";
	?>
	<style>
	/* General
	==================================== */
	*, *:before, *:after {
	    -moz-box-sizing: border-box; 
	    -webkit-box-sizing: border-box; 
	    box-sizing: border-box;
	}
	 
	body {
	    background: #3686be;
	    margin: 0 auto;
	    width: 400px;
	    color: #fff;
	}
	 
	body, input, textarea {
	    font: 1em/1.5 Arial, Helvetica, sans-serif;
	}
	 
	.container {
	    max-width: 25em;
	    margin: 0 auto;
	    width: 95%;
	     
	}
	 
	h1 {
	    font-size: 1.5em; 
	    padding: .5em 0;
	    text-align: center; 
	    background: #19486a;
	    color: white;
	    border-radius: 5px;
	}

	button, .form {
	    color: #fff;
	    border-radius: 4px;
	    font-size: 16px;
	    outline: none;
	    padding: 10px;
	    background-color: #7DB461;
	    border: 0;
	    margin-left: 150px;
	    cursor: pointer;
	}
	button:hover, .form:hover {
	    background-color: #6ba44e;
	}
	button#bigger {
    	margin-left: 125px;
	}
	</style>
</head>
<body>

	<div class="container">
		
		<h1>PullDrive</h1>

		<p>Your files have been pulled. Click the button below to download them.</p>


		<?php echo "<a href=./" . $filename . "><button>Download</button></a>"; ?>
		<br />
		<br />
		<a href="javascript:history.go(0)"><button id="bigger">Refresh the page</button></a>
		<br />
		<br />
		<form method="post" action="clear.php">
		<input name="go" type="submit" class="form" value="Refresh" />
		</form>

	</div>
	
</body>
</html>