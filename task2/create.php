<?php 
include_once "../connect-to-sql.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$sv = $_POST;
	$sql = "INSERT INTO UserDB1 (fname, lname, email, contact) VALUES 
	('".$sv['fname']."','".$sv['lname']."', '".$sv['email']."', '".$sv['contact']."')";
		header('Content-type: application/json');
	if ($connection->query($sql) === TRUE){
		echo json_encode(['is' => 'success', 'complete' => 'Đã thêm!']);
	}
	else {
		echo json_encode(['is' => 'fails', 'uncomplete' => 'Thất bại!']);	
	}
}
?>
