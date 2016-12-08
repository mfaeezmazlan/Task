<?php
	
	require_once("sqlite_db_connection.php");

	$inID = $_POST['id'];
	$inUpdateName = $_POST['editName'];
	$inUpdateDetail = $_POST['editDetail'];
	$sql =<<<EOF
      UPDATE TASK SET NAME='$inUpdateName', DETAILS='$inUpdateDetail' WHERE ID='$inID';
EOF;

	$ret = $db->exec($sql);
	if($ret){
		echo "\nSuccess updaning record ID : ".$inID;
	}

	$db->close();