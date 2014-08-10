	<?php
	//Connect to database

	$db = mysql_connect("a2412233_ss","a2412233_ss","Sleepyhead1414");
	
	if (! $db){
		die("Database connection failed: " . mysql_error());
	}
	else
		echo("Success!");
		
	?>
	

<html>
	<head>
	<Title> MySQL Table Connection </Title>
	</head>
	<body>	
	</body>
	
</html>
