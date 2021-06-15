<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Transaction History</title>

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

    <div class="container">
        <br>
        <div>
            <h2 style="color: rgb(50,72,145); font-size: 38px; border-bottom: 10px solid; padding-bottom: 20px;">Transaction History</h1>
        </div>
        <br>
        <b>
            <br>
            <div class="table-responsive-sm">
                <table class="table table-hover table-sm table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center py-3">#</th>
                            <th class="text-center py-3">Sender</th>
                            <th class="text-center py-3">Receiver</th>
                            <th class="text-center py-3">Amount</th>
                            <th class="text-center py-3">Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include 'dbconnect.php';

                        $sql = "select * from transaction";

                        $query = mysqli_query($conn, $sql);
                        $cnt = 1;
                        while ($rows = mysqli_fetch_assoc($query)) {
                        ?>

                            <tr>
                                <td class="text-center py-2"><?php echo $cnt ?></td>
                                <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
                                <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
                                <td class="text-center py-2"><?php echo $rows['balance']; ?> </td>
                                <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>
                            <?php
                            $cnt++;
                        }

                            ?>
                    </tbody>
                </table>

            </div>
            
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>