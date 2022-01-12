<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Create Account</title>
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Custom styles for this template-->
  <link href="../public/css/create-account.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="p-5">
      <div class="row justify-content-center">
        <div class="create-account-body">
          <div class="title">
            <p>Create Account</p>
          </div>
          <form class="p-3 user" action="">
            <div class="form-group">
              <span>Username</span>
              <input type="text" class="form-control form-control-user" id="username" name="TenDangNhap"
                placeholder="Michael">
              <small hidden="true" id="usernameHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <span>Email</span>
              <input type="text" class="form-control form-control-user" id="email" name="email"
                placeholder="Arnike@gmail.com">
              <small hidden="true" id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <span>Password</span>
              <input type="password" class="form-control form-control-user" id="pass" name="pass"
                placeholder="Password">
                <small hidden="true" id="passHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <span>Password check</span>
              <input type="password" class="form-control form-control-user" id="passCheck" name="passCheck"
                placeholder="Password two">
                <small hidden="true" id="passCheckHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <button id="btn-create-account" type="button" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
<script src="../public/js/jquery.min.js"></script>
<script>
  $('#btn-create-account').click(function () {
    var _this = $(this);
    var username = $('#username').val().trim();
    var email = $('#email').val().trim();
    var pass = $('#pass').val().trim();
    var passCheck = $('#passCheck').val().trim();

    if(!username){
      $("#usernameHelp").text("Username cannot be blank");
      $("#usernameHelp").attr("hidden", false);
      $("#username").css('border','2px solid red');
    }
    else{
      $("#username").css('border','2px solid rgb(14, 129, 0)');
    }

    var flag = true;
    if(!email){
      $("#emailHelp").text("Email cannot be blank");
      $("#emailHelp").attr("hidden", false);
      $("#email").css('border','2px solid red');
      flag = false;
    }
    else{
      $("#email").css('border','2px solid rgb(14, 129, 0)');
    }

    if(!pass){
      $("#passHelp").text("Password cannot be blank");
      $("#passHelp").attr("hidden", false);
      $("#pass").css('border','2px solid red');
      flag = false;
    }
    else{
      $("#pass").css('border','2px solid rgb(14, 129, 0)');
    }

    if(!passCheck){
      $("#passCheckHelp").text("Password2 cannot be blank");
      $("#passCheckHelp").attr("hidden", false);
      $("#passCheck").css('border','2px solid red');
      flag = false;
    }
    else{
      $("#passCheck").css('border','2px solid rgb(14, 129, 0)');
    }

    if(pass != passCheck && passCheck){
      $("#passCheckHelp").text("Password2 different Password");
      $("#passCheckHelp").attr("hidden", false);
      $("#passCheck").css('border','2px solid red');
      flag = false;
    }

    if(flag){
      var form_data = new FormData();
      form_data.append("username", username);
      form_data.append("email", email);
      form_data.append("pass", pass);
      form_data.append("passCheck", passCheck);
      $.ajax({
        type: "POST",
        url: "create.php",
        data: form_data,
        contentType: false,
        processData: false,
        success: function (response) {
          if (response.is === 'success') {
            window.location.href = 'welcome.php';
          }
        }
      })
    };
  })
</script>

</html>