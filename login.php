<?php
include "connection.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where email='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: customers.php');
        }else{
            echo '<script type"text/javascript">
                alert("Invalid Details!");
                </script>';
        }
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
    <link rel="stylesheet" href="style5.php">
    <title>Gaze Bank</title>
</head>
<body>
    <div class="continer1">
        <hr class= "top-line">
        <div class="full-body">
            <div class="main">
                <div class="header">
                    <a href="index.html">
                    <img class="bank-logo" src="bank image.jpg" alt="bank-logo"></a>
                    <h1 class="bank-name">GAZE BANK</h1>
                </div>
                <hr class="line">
            </div>
        </div>
        <div class="container">
    <form method="post" action="">
        <div id="div_login">
            <h1 class="login">Login</h1>
            <div class="form">
            <div class="eml"><label class="lab">Email: </label>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Email" />
            </div>
            <div class="pwd"><label class="pad">Password : </label>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div class="btn">
                <button name="but_submit" id="but_submit">Log in</button>
            </div>
            </div>
        </div>
    </form>
</div>
    </div>
</body>
</html>

