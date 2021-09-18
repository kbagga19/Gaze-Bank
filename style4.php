<?php 
    header('Content-type: text/css; charset:UTF-8');
?>

body {
    margin: 0;
}

* {
    box-sizing: border-box;
}

.container {
    height: 100vh;
    position: relative;
}

.main {
    width: 100%;
    margin: 0;
}

.header {
    display: flex;
    align-items: center;
    padding-left: 10%;
    padding-top: 0.5%;
}

.top-line {
    margin-top: 0;
    height: 1.3vh;
    margin-bottom: 0;
    background-color: red;
}

.bank-logo {
    height: 15vh;
}

.bank-name {
    font-size: 65px;
    font-family: 'Righteous', cursive;
}

.line {
    width: 85%;
    height: 0.6vh;
    background-color: red;
}

/* Full-width input fields */
  input[type=text], input[type=password], input[type=email] {
  width: 30%;
  padding: 10px;
  border: none;
  border: 1px solid #DEE1EC;
  border-radius: 10px;
  background: #DEE1EC;
}

input[type=text]:focus, input[type=password]:focus {
  <!-- background-color: #ddd; -->
  outline: none;
}


/* Set a style for all buttons */
button {
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 10%;
  border-radius: 10px;
  font-family: 'Stylish', sans-serif;
  font-size: 20px;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

.clearfix {
    display: flex;
    justify-content: center;
    padding-top: 2%;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}

.sign {
    display: flex;
    justify-content: center;
    font-family: 'Righteous', cursive;
    font-size: 35px;
}

.sign1 {
    display: flex;
    justify-content: center;
    font-family: 'Stylish', sans-serif;
    font-size: 20px;
}

.form1, .form2, .form3, .form4 {
    display: flex;
    font-size: 20px;
    align-items: center;
    justify-content: center;
    font-family: 'Stylish', sans-serif;
}

.name1 {
    padding-right: 30px;
}

.name2 {
    padding-right: 70px;
}

.name3 {
    padding-right: 40px;
}

.name4 {
    padding-right: 55px;
}

.remember {
    display: flex;
    justify-content: center;
    font-family: 'Stylish', sans-serif;
    
    padding-bottom: 5px;
}
