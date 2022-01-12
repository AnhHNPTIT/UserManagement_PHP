<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login_page.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Home</title>
</head>

<body>
<div class="container">
    <div class="p-5">
        <h1>welcome <?php echo $_SESSION['username']; ?></h1>
      <div class="row justify-content-center">
      <button id="btn-logout" type="button" class="btn btn-primary">Logout</button>
      </div>
    </div>
  </div>
</body>
</html>
<script src="../public/js/jquery.min.js"></script>
<script>
  $('#btn-logout').click(function () {
    var _this = $(this);
    var form_data = new FormData();
    $.ajax({
      type: "POST",
      url: "logout.php",
      data: form_data,
      contentType: false,
      processData: false,
      success: function (response) {
        window.location.href = 'index.php';
      }
    })
  })
</script>