<?php 
	$query = "select * from user where id = 1";
	@ $db = new mysqli('localhost','root','root','yueting');
	if(mysqli_connect_errno()){
		echo 'Error: Could not connect to databases. Please try again later.';
		exit;
	}

	$result = $db->query($query);
	$num_results = $result->num_rows;
	echo "<p>Number of user found: ".$num_results."</p>";

	for($i=0;$i<$num_results;$i++){
		$row = $result->fetch_assoc();
		echo "<p><strong>".($row['id']).".</strong></p>";
		echo "Name:";
		echo stripslashes($row['name']);
		echo "<br/>mobile:".stripslashes($row['mobile']);
		echo "<br/>startTime:".stripslashes($row['start_time']);
		echo "<br/>endTime:".stripslashes($row['end_time']);
	}
?>