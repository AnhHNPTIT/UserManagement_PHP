<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Create User</title>
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
            <p>Create User</p>
          </div>
          <form class="p-3 user" action="">
            <div class="form-group">
              <span>First Name</span>
              <input type="text" class="form-control form-control-user" id="fname" name="fname">
            </div>
            <div class="form-group">
              <span>Last Name</span>
              <input type="text" class="form-control form-control-user" id="lname" name="lname">
            </div>
            <div class="form-group">
              <span>Email</span>
              <input type="text" class="form-control form-control-user" id="email" name="email">
            </div>
            <div class="form-group">
              <span>Contact</span>
              <input type="text" class="form-control form-control-user" id="contact" name="contact">
            </div>
            <div class="form-group">
              <button id="btn-create-user" type="button" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
<script src="../public/js/jquery.min.js"></script>
<script>
  $('#btn-create-user').click(function () {
    var _this = $(this);
    var fname = $('#fname').val().trim();
    var lname = $('#lname').val().trim();
    var email = $('#email').val().trim();
    var contact = $('#contact').val().trim();

    var form_data = new FormData();
    form_data.append("fname", fname);
    form_data.append("lname", lname);
    form_data.append("email", email);
    form_data.append("contact", contact);
    $.ajax({
      type: "POST",
      url: "create.php",
      data: form_data,
      contentType: false,
      processData: false,
      success: function (response) {
        if (response.is === 'success') {
          window.location.href = 'list-user.php';
        }
      }
    })
  })
</script>

</html>