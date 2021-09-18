<?php
    include("connection.php");
    $sql = "SELECT * FROM `customers`";
    $result = mysqli_query($conn,$sql);
?>

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
        <h1 class="customers">Our Customers</h1>
    </div>

    <div class="database">


<div class="cust_table">
<table>
    <tr>
        <th class="names">Name</th>
        <th class="names">Account No.</th>
        <th class="names">Balance</th>
        <th class="names">Last Transaction Date And Time</th>
        <th class="names">Transact</th>
    </tr>
    <?php 
        while ($row = mysqli_fetch_assoc($result)) 
        {
    ?>
        <tr>
            <td class="names" ><?php echo $row['Name'] ?></td>
            <td class="numbers"><?php echo $row['accnum'] ?></td>
            <td class="numbers">Rs.<?php echo $row['Balance'] ?></td>
            <td class="numbers"><?php echo $row['datetime'] ?></td>
            <td class="names">
                <a class="transpage" href="transfer.php?accnum= <?php echo $row['accnum']; ?>">
                Transfer</a></div>
            </td>
        </tr>
<?php }
?>
</div>
<script src="script.js"></script>
</body>
</html>
