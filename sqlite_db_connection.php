<?php
	class Db extends SQLite3{
		function __construct(){
			$this->open('Task.db');
		}
	}

	$db = new Db();

	if(!$db){
		echo $db->lastErrorMsg();
	}else{
		echo "<script>console.log('Database opened successfully\n');</script>";
		if(filesize('Task.db')==0){
			$sql=<<<EOF
			CREATE TABLE TASK
			(ID INT PRIMARY KEY NOT NULL,
			NAME VARCHAR2(50) NOT NULL,
			DETAILS VARCHAR2(100),
			START_DATE DATE,
			END_DATE DATE);
EOF;
			
			$exec = $db->exec($sql);
			if(!$exec){
				echo $db->lastErrorMsg();
			}else{
				echo "<script>console.log('Table create successfully\n')</script>";
			}
		}
	}
?>