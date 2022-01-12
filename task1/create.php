<?php 
include_once "../connect-to-sql.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$sv = $_POST;
	$sql = "INSERT INTO UserDB (email, username, password) VALUES 
	('".$sv['email']."','".$sv['username']."', '".$sv['pass']."')";
		header('Content-type: application/json');
	if ($connection->query($sql) === TRUE){
		echo json_encode(['is' => 'success', 'complete' => 'Đã thêm!']);
	}
	else {
		echo json_encode(['is' => 'fails', 'uncomplete' => 'Thất bại!']);	
	}
}
?>
