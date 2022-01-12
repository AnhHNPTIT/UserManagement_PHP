<?php 
include_once "../connect-to-sql.php";
$data = $connection->query("select * from UserDB1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="public/css/back-top.css"/>
  <link rel="stylesheet" type="text/css" href="public/css/back-down.css"/>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center text-primary"><b>Management</b></h2>
      </div>
      <div class="col-md-12">
        <a href="index.php" type="button" class="btn btn-success">Add</a>
      </div>
    </div>
    <legend></legend>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-striped dataTable" id="myTable">
          <thead>
            <tr>
             <th>#</th>
             <th>Image</th>
             <th>FirstName</th>
             <th>LastName</th>
             <th>Email</th>
             <th>Contact</th>
             <th>Edit</th>
             <th>Delete</th>
           </tr>
         </thead>
        <tbody>
         <?php
         if ($data->num_rows > 0) {
          while ($row = $data->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><img src="https://i1-vnexpress.vnecdn.net/2021/12/28/IMG31422JPG-1640702351.jpg?w=100&h=100&q=100&dpr=2&fit=crop&s=yp_B4cxWsHWcK9xecqRZ1g" style= "width: 100px; height: auto;"/></td>
              <td><?= $row['fname'] ?></td>
              <td><?= $row['lname'] ?></td>
              <td><?= $row['email'] ?></td>
              <td><?= $row['contact'] ?></td>
              <td>
                  <a href="#" type="button" class="btn btn-success btn-edit" title="Edit">Edit</a>
              <td>
                  <button type="button" data-id="<?= $row['id'] ?>"
                    id="btn-delete" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <?php
              }
            }
            ?>
          </tbody>
        </table>
        <style>
          tr th{
            text-align: center;
          }
          tr td{
            text-align: center;
          }
        </style>
      </div>
    </div>
  </div>             
 </body>
  <script src="../public/js/sweetalert.min.js"></script>
  <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/datatables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();
    });

    $('#myTable').dataTable( {
    "searching": false
    } );

    $('#btn-delete').click(function(){
      var _this = $(this);
      var id = $(this).attr('data-id');
      var form_data = new FormData();
      form_data.append("id", id);
      swal({
        title: "Bạn chắc chắn?",
        text: "Bạn có thực sự muốn xóa không?",
        icon: "warning",
        buttons: true,
        buttons: ["Hủy", "Đồng ý"]
      })
      .then(confirm => {
        if(confirm){
          $.ajax({
            type: 'POST',
            url : 'delete.php',
            data: form_data,
            contentType: false,
            processData: false,
            success: function (response) {
                response = JSON.parse(response);
              if(response.is == 'success'){
                swal({
                  title: response.complete,
                  text: "Đã xóa thành công",
                  icon: "success"
                })
                setTimeout(function () {
                    window.location.href = '';
                },500);
              }
              if(response.is === 'fails'){
                swal({
                  title: response.uncomplete,
                  text: "Xóa không thành công",
                  icon: "error"
                })
              }
            }
          })
        }
      })
    })
  </script>

</html>

