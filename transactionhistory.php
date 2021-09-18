<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Stylish&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" type="text/css" href="style2.php">
    <title>Gaze Bank | Users</title>
</head>
<body>
    <div class="continer">
        <hr class= "top-line">
        <div class="main">
            <div class="header"><a href="index.html">
                <img class="bank-logo" src="bank image.jpg" alt="bank-logo"></a>
                <h1 class="bank-name">GAZE BANK</h1>
            </div>
            <hr class="line">
        </div>
    </div>
    <div class="cust">
        <h1 class="customers">Transaction History</h1>
    </div>

    <div class="database1">


<div class="cust_table">
<table>
    <tr>
        <th>From</th>
        <th>To</th>
        <th>Amount</th>
        <th>Transaction Date And Time</th>
    </tr>
    <?php   
        include("connection.php");

        $sql = "SELECT * FROM `transactions`";

        $result = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <tr>
                <td><?php echo $row['sender'] ?>(<?php echo  $row['accountno1'] ?>)</td>
                <td><?php echo $row['receiver'] ?>(<?php echo  $row['accountno2'] ?>)</td>
                <td>Rs.<?php echo $row['Balance'] ?></td>
                <td><?php echo $row['datetime'] ?></td>
            </tr>
<?php
    }
?>