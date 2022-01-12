<?php 
session_start();
include_once "../connect-to-sql.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$sv = $_POST;
	$sql = "SELECT * FROM UserDB WHERE username = '".$sv['username']."' AND password = '".$sv['password']."'";
	$result = $connection->query($sql);
	header('Content-type: application/json');
	if ($result->num_rows > 0){
        $_SESSION['username'] = $sv['username'];  
		echo json_encode(['is' => 'success']);
	}
	else{
		echo json_encode(['is' => 'fails']);
	}
}
?>
