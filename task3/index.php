<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Custom styles for this template-->
  <link href="../public/css/login.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="p-5">
      <div class="row justify-content-center">
        <div class="login-body">
          <div class="title">
            <p>Login Here</p>
          </div>
          <form class="p-3" action="">
            <div class="form-group">
              <p class="content">Username </p>
              <input id="username" type="text" class="content form-control form-control-user">
            </div>
            <div class="form-group">
              <p class="content">Password </p>
              <input id="password" type="password" class="content form-control form-control-user">
            </div>
            <div class="form-group">
              <button id="btn-login" type="button" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
<script src="../public/js/jquery.min.js"></script>
<script>
  $('#btn-login').click(function () {
    var _this = $(this);
    var form_data = new FormData();
    form_data.append("username", $('#username').val());
    form_data.append("password", $('#password').val());
    $.ajax({
      type: "POST",
      url: "login.php",
      data: form_data,
      contentType: false,
      processData: false,
      success: function (response) {
        if (response.is === 'success') {
          window.location.href = 'welcome.php';
        }
      }
    })
  })
</script>

</html>