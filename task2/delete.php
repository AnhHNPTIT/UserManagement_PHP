<?php 
include_once "../connect-to-sql.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $sv = $_POST;
  $connection->query("DELETE FROM UserDB1 WHERE id = '" . $sv['id'] . "'");
  echo json_encode(['is' => 'success', 'complete' => 'Đã xóa!']);
}
?>
