
<?php 
		
		$sqlddd = "SELECT * FROM `users`"; 
		$abs = $mysqli->query($sqlddd); 

		foreach ($abs as $key=>$value) { 
		echo "<input type = 'text' value = '". $value['username'] . "'><br>"; 
		}
	
?> 