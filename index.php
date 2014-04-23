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
	    background: #eaedf1;
	    margin: 0 auto;
	    width: 600px;
	}
	 
	body, input, textarea {
	    font: 1em/1.5 Arial, Helvetica, sans-serif;
	}
	 
	.container {
	    max-width: 25em;
	    margin: 2em auto;
	    width: 95%;
	     
	}
	 
	h1 {
	    font-size: 1.5em; 
	    padding: .5em 0;
	    text-align: center; 
	    background: #323a45;
	    color: white;
	    border-radius: 5px 5px 0 0;
	}

	button {
	    color: #fff;
	    border-radius: 4px;
	    font-size: 16px;
	    outline: none;
	    padding: 10px;
	    background-color: #2980b9;
	    border: 0;
	    cursor: pointer;
	    position: absolute;
    	left: 46%;
	}
	button:hover {
	    background-color: #3498db;
	}   
	</style>
</head>
<body>

	<div class="container">
		
		<h1>PullDrive</h1>

		<p>Your files have been pulled. Click the button below to download them.</p>


		<?php echo "<a href=./" . $filename . "><button>Download</button></a>"; ?>

	</div>
	
</body>
</html>