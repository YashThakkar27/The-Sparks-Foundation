<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Create User</title>

  <style>
    .navbar-custom {
      background-color: rgb(50, 72, 145);
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text {
      color: white;
    }
  </style>
</head>

<body>
  <?php
  include 'dbconnect.php';
  include 'navbar.php';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    $sql = "Insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<div class='alert alert-success' role='alert'>
                <h5><b>User Added Successfully.</b></h5>
              </div>";
    }
  }
  ?>

  <div class="background">
    <div class="container">
      <br><br>
      <div>
        <h2 style="color: rgb(50,72,145); font-size: 38px; border-bottom: 10px solid; padding-bottom: 20px;">Add New User</h1>
      </div>
      <br><br>
      <div>
        <form method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Enter Balance</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="balance" placeholder="Enter Balance" required>
          </div>
          <input type="submit" class="btn btn-primary" value="Create User" name="submit"></input>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>