<?php
	
	require_once("sqlite_db_connection.php");

	$inID=$_POST['id'];

	$query = <<<EOF
      DELETE FROM TASK WHERE ID="$inID";
EOF;

	$execSQL = $db->exec($query);

	if($execSQL){
		echo "Successfully delete record with id: ".$inID;
	}else{
		echo "Fail to delete record with id: ".$inID;
	}

	
	$db->close();