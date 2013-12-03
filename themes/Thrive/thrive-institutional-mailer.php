<?php 
	$link = mysql_connect('localhost', 'nickdonald', '');

	$db = mysql_select_db('bitnami_wordpress', $link);

	if ($db) {
    	echo "connected to wp";
	}

	$queryName = 'SELECT element_value from wp_formmaker_submits WHERE element_label=1';

	$resultName = mysql_query($queryName, $link);

	
	$columns = array(
		1 => 'name',
		2 => 'email',
		3 => 'type'
	);
	$table_rows = array();
	// echo $columns[1];
	for ($i=1; $i < 4; $i++) { 
	   	$query = sprintf("SELECT element_value FROM wp_formmaker_submits WHERE element_label=%s", $i);
	   	echo $query;
	   	$result = mysql_query($query, $link);
	   	$c = 0;

	   	while ($row = mysql_fetch_assoc($result)) {
	   		if (isset($table_rows[$c])) {
	   			$table_rows[$c][$columns[$i]] = $row['element_value'];
	   		} else {
	   			$table_rows[$c] = [];
	   			$table_rows[$c][$columns[$i]] = $row['element_value'];
	   		}
	   		$c++;
	   	}
	}
	$message = "
	<html>
	<head>
	  <title>Thrive Stuff</title>
	</head>
	<body>
	  <p>Thrive Stuff</p>
	  <table border='3' style='border-collapse:collapse;'>
	    <tr>
	      <th>Name</th><th>Email</th><th>Institution Type</th>
	    </tr>
	    <tr>";

	foreach ($table_rows as $row) {
    	$message .= sprintf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['name'], $row['email'], $row['type']); 
    }

	$message .= "</tr></table></body></html>";

	echo $message;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'From: Thrive Ice Cream <no-reply@thriveicecream.com>';

	try {
		mail('nickjdonald@gmail.com', 'Thrive DB Test', $message, $headers);
		echo "success";
	} catch (Exception $e) {
		echo 'Caught Exception: ', $e->getMessage(), "\n";
	}
?>