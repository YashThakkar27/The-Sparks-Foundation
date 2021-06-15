<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Basic Banking System</title>

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
  include 'navbar.php';
  ?>
  <br><br>
  <div class="container">
    <div>
      <h2 style="color: rgb(50,72,145); font-size: 38px; border-bottom: 10px solid; padding-bottom: 20px;">Basic Banking System</h1>
    </div>
    <br><br>
    <div class="row activity text-center">
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="createUserImage.jpg" alt="Card image cap">
          <div class="card-body">
            <a href="createUser.php" class="btn btn-primary" style="font-weight: bold; font-size: 15px;">Create a User</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 17rem;">
          <img class="card-img-top" src="transferMoneyImage.jpg" alt="Card image cap">
          <div class="card-body">
            <a href="transferMoney.php" class="btn btn-primary" style="font-weight: bold; font-size: 15px;">Make a Transaction</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="transactionHistoryImage.jpg" alt="Card image cap">
          <div class="card-body">
            <a href="transactionHistory.php" class="btn btn-primary" style="font-weight: bold; font-size: 15px;">Transaction History</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <footer class="bg-dark text-center text-lg-start">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.9);">
      <span style="color: white;">Yash Thakkar &nbsp;&nbsp;&nbsp; || &nbsp;&nbsp;&nbsp; The Sparks Foundation</span>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>