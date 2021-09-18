<?php
    include ("connection.php");

    if (isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $pos = $_POST['pas'];
        $name = $_POST['name'];
        $amnt = $_POST['amount'];

        $sql = "INSERT INTO `users`(`email`, `password`, `name`) VALUES ('$email', '$pos', '$name')";
        $query = mysqli_query($conn,$sql);

        if ($query)
        {
            echo '<script type="text/javascript">
            alert("Registration Successful!");
            window.location = "login.php";
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
            alert("Email Already Exists!");
            </script>';
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
    <link rel="stylesheet" href="style4.php">
    <title>Gaze Bank</title>
</head>
<body>
    <div class="continer">
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
        <div class="signup">
        <form class="" method="post" name="">
  <div class="container">
    <h1 class="sign">Sign Up</h1>
    <p class="sign1">Please fill in this form to create an account.</p>
    <div class="form1">
        <label class="name1" for="psw-repeat"><b>Full Name : </b></label>
        <input type="text" placeholder="Enter Your Name" name="name" required>
    </div>
    <br>
    <div class="form2">
        <label class="name2" for="email"><b>Email : </b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
    </div>
    <br>
    <div class="form3">
        <label class="name3" for="psw"><b>Password : </b></label>
        <input type="password" placeholder="Enter Password" name="pas" required>
    </div>
    <br>
    <label class="remember">
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <div class="clearfix">
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
</div>
  </div>
</form>
        </div>
    </div>
</body>
</html>