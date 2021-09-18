<?php
include("connection.php");

if (isset($_POST['submit']))
{
    $from = $_GET['accnum'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from `customers` where accnum=$from";
    $query = mysqli_query($conn,$sql);

    // Return output of user from which amount is to be transferred
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from `customers` where accnum=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

    // To check negative value input by user
    if ($amount < 0)
    { 
        echo '<script type"text/javascript">
            alert("Enter a Valid Amount!");
            </script>';
    }
    
    // To check insufficient balance
    else if($amount > $sql1['Balance'])
    { 
        echo '<script type"text/javascript">
            alert("Insufficient Balance");
            </script>';
    }

    // To check zero value entered
    else if($amount == 0)
    { 
        echo '<script type"text/javascript">
            alert("Enter a Valid Amount!");
            </script>';
    }

    else
    {
        // Deducting amount from sender's account
        $newbalance = $sql1['Balance'] - $amount;
        $sql = "UPDATE `customers` set Balance = $newbalance where accnum=$from";
        mysqli_query($conn,$sql);

        // Adding amount to receivers account
        $newbalance = $sql2['Balance'] + $amount;
        $sql = "UPDATE `customers` set Balance = $newbalance where accnum=$to";
        $sql = "UPDATE `customers` set datetime = CURRENT_TIMESTAMP() where accnum=$from";
        mysqli_query($conn,$sql);

        $sender = $sql1['Name'];
        $receiver = $sql2['Name'];
        $accountnumber1 = $sql1['accnum'];
        $accountnumber2 = $sql2['accnum'];
        $sql = "INSERT INTO `transactions`(`sender`, `receiver`, `Balance`, `datetime`, `accountno1`, `accountno2`) VALUES ('$sender', '$receiver', '$amount', CURRENT_TIMESTAMP(), '$accountnumber1', '$accountnumber2')";
        $query = mysqli_query($conn,$sql);


        if ($query)
        {
            echo '<script type"text/javascript">
                alert("Transaction Successful!");
                window.location="transactionhistory.php";
                </script>';
        }

        $newbalance = 0;
        $amount = 0;
    }
}
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
    <link rel="stylesheet" type="text/css" href="style3.php">
    <title>Gaze Bank | Money Transfer</title>
</head>
<body>
    <div class="continer">
        <hr class= "top-line">
        <div class="main">
            <div class="header">
                <a href="index.html">
                <img class="bank-logo" src="bank image.jpg" alt="bank-logo"></a>
                <h1 class="bank-name">GAZE BANK</h1>
            </div>
            <hr class="line">
        </div>
    </div>

    <div class="database">
    <?php
        include("connection.php");
        $saccnum = $_GET['accnum'];
        $sql = "SELECT * FROM customers where accnum=$saccnum";
        $result = mysqli_query($conn, $sql);
        if (!$result)
        {
            echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
        }
        $row = mysqli_fetch_assoc($result);
    ?>

<form class="transfer-form" method="post" name="tcredit">
        <div>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Account No.</th>
                    <th>Balance</th>
                    <th>Last Transaction Date and Time</th>
                </tr>
                <tr>
                    <td><?php echo $row['Name'] ?></td>
                    <td><?php echo $row['accnum'] ?></td>
                    <td>Rs.<?php echo $row['Balance'] ?></td>
                    <td><?php echo $row['datetime'] ?></td>
                </tr>
            </table>
        </div><br>


    <div class="acc-select">
      <label class="trnsf">Transfer To :</label>
      <select name="to" required>
        <option value="" disabled selected class="form-control">Choose</option>
        <?php
           include ("connection.php");
           $saccnum = $_GET['accnum'];
           $sql = "SELECT * FROM customers where accnum!=$saccnum";
           $result = mysqli_query($conn,$sql);
           if(!$result)
           {
               echo "Error " . $sql. "<br>". mysqli_error($conn);
           }

           while ($row = mysqli_fetch_assoc($result)) {
               ?>
               <option class="table1" value="<?php echo $row['accnum']; ?>">

               <?php echo $row['Name']; ?> (Balance: Rs.
               <?php echo $row['Balance']; ?> )

           </option>
           <?php
           }
        ?>
        </select>
        </div>
        <div class="transfer_amount">
        <br>
            <label class="amt">Amount :</label>
            <input type="number" class="inpamt" name="amount" required>   
            <br><br>
        </div>
                <div class="button" >
            <button class="btn btn-primary" name="submit" type="submit" id="btn">Transfer</button>
            </div>
        </form>
</div>
<script src="script.js"></script>
</body>
</html>
