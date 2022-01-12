<?php
session_start();
unset($_SESSION["username"]);
echo json_encode(['is' => 'success']);
?>