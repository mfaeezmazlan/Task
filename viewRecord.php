<?php
	require_once("sqlite_db_connection.php");
	$sql =<<<EOF
SELECT * from TASK order by ID asc;
EOF;
			
	echo "<table class='table table-bordered table-hover table-striped'><thead><th>ID</th><th>TASK NAME</th><th>TASK DETAIL</th><th>ACTION</th></thead>";
	$ret = $db->query($sql);

	while($row=$ret->fetchArray(SQLITE3_ASSOC)){
		echo "<tr id='tRow_".$row['ID']."''><td>".$row['ID']."</td><td>".$row['NAME']."</td><td>".$row['DETAILS']."</td><td><button class='btn btn-info' onclick='editRecord(\"".$row['ID']."\")'><i class='fa fa-pencil'></i></button> <button onclick='deleteRecord(\"".$row['ID']."\")' class='btn btn-danger' id='del".$row['ID']."' value='".$row['ID']."'><i class='fa fa-trash'></i></button></td></tr>";
	}
	echo "</table>";

	$db->close();