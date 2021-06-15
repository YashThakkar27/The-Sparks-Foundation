<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Transfer Money</title>

    <style type="text/css">
        button {
            transition: 1.5s;
        }

        button:hover {
            background-color: #616C6F;
            color: white;
        }

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
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>

    <?php
    include 'navbar.php';
    ?>

    <div class="container">
        <br>
        <div>
            <h2 style="color: rgb(50,72,145); font-size: 38px; border-bottom: 10px solid; padding-bottom: 20px;">Transfer Money</h1>
        </div>
        <br>
        <b>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-sm table-striped  table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center py-3">#</th>
                                    <th scope="col" class="text-center py-3">Name</th>
                                    <th scope="col" class="text-center py-3">E-Mail</th>
                                    <th scope="col" class="text-center py-3">Balance</th>
                                    <th scope="col" class="text-center py-3">Transfer Money</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $cnt = 1;
                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td class="text-center py-2"><?php echo $cnt ?></td>
                                        <td class="text-center py-2"><?php echo $rows['name'] ?></td>
                                        <td class="text-center py-2"><?php echo $rows['email'] ?></td>
                                        <td class="text-center py-2"><?php echo $rows['balance'] ?></td>
                                        <td class="text-center py-2"><a href="makeOperation.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn btn-success" class="btn">Transfer</button></a></td>
                                    </tr>
                                <?php
                                    $cnt++;
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>