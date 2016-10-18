<?php
	session_start();
	if(empty($_SESSION['role'])){
		include("logout.php");
	}
?>
<!DOCTYPE html>
	<head>
	<title>Whiteboard - ECU - Group 4</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">	
	<script src="scripts/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="scripts/script.js" type="text/javascript"></script>
	<script>
	$(document).ready(function(){
		
		if(!$("#menuG").next().is(":visible"))
		{
			$("#menuG").next().show();
		}
		$("#menuVS").addClass('highlighted');
	});
	</script>
	</head>
	<body>
	<div id="container">
	<div id="header">
	</div>
		<?php include("menu.php"); ?>
		<div id="viewStudentStatsPanel" class="mainPanel">		
			<h2>Your Statistics</h2>
		</div>
	</div>
	
	</body>
</html>