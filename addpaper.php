

<?php

require 'dbconn.php';

	if($_POST['type'] == ""){
		$sql = "SELECT * FROM streams";

		$query = mysqli_query($link,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['sid']}'>{$row['streams_name']}</option>";
		}
	}else if($_POST['type'] == "subjectData"){

		$sql = "SELECT * FROM subjects WHERE stream_id = {$_POST['id']}";

		$query = mysqli_query($link,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		
		  $str .= "<option value='{$row['sn']}'>{$row['Subject_Name']}</option>";
	
		}
	}
	else if($_POST['type'] == "notesData"){

		$sql = "SELECT * FROM papers WHERE subject_id = {$_POST['id']}";

		$query = mysqli_query($link,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		
		  $str .= "<option value='{$row['sn']}'>{$row['paper_name']}</option>";
	
		}
	}
	echo $str;
 ?>
