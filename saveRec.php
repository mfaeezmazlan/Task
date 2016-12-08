<?php
	
	require_once("sqlite_db_connection.php");

	$lastID = <<<EOF
      SELECT * from TASK order by ID desc LIMIT 1;
EOF;

	$execSQL = $db->query($lastID);

	while($row=$execSQL->fetchArray(SQLITE3_ASSOC)){
		$idGet=$row['ID'];
	}
	$idGet++;
	$inName = $_POST['inName'];
	$inDetail = $_POST['inDetail'];
	$inStartDate = $_POST['inStartDate'];
	$inEndDate = $_POST['inEndDate'];
	$sql =<<<EOF
      INSERT INTO TASK (ID,NAME,DETAILS,START_DATE,END_DATE) VALUES ('$idGet','$inName','$inDetail','$inStartDate','$inEndDate');
EOF;

	$ret = $db->exec($sql);
	if($ret){
		echo "\nSuccess creating new record. New insert ID : ".$idGet;
	}

	$db->close();