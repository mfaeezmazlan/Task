<?php
	require_once("sqlite_db_connection.php");
	$sql =<<<EOF
SELECT * from TASK;
EOF;
			
	echo "<table class='table table-bordered table-hover table-striped'><thead><th>ID</th><th>TASK NAME</th><th>TASK DETAIL</th><th>START DATE</th><th>END DATE</th><th>ACTION</th></thead>";
	$ret = $db->query($sql);

	while($row=$ret->fetchArray(SQLITE3_ASSOC)){
		echo "<tr id='tRow_".$row['ID']."''><td>".$row['ID']."</td><td>".$row['NAME']."</td><td>".$row['DETAILS']."</td><td>".$row['START_DATE']."</td><td>".$row['END_DATE']."</td><td><button type='button' class='btn btn-info' data-toggle='modal' onclick='editRecord(\"".$row['ID']."\")' data-target='#editModal'><i class='fa fa-pencil'></i></button> <button onclick='deleteRecord(\"".$row['ID']."\")' class='btn btn-danger' id='del".$row['ID']."' value='".$row['ID']."'><i class='fa fa-trash'></i></button></td></tr>";
	}
	echo "</table>";

	$db->close();