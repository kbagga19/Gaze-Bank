<?php 
    header('Content-type: text/css; charset:UTF-8');
?>

body {
    margin: 0;
}

* {
    box-sizing: border-box;
}

.container1 {
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

.login {
    padding-top: 40px;
    font-family: 'Righteous', cursive;
    font-size: 35px;
    display: flex;
    justify-content: center;
}

.eml {
    padding-top: 30px;
    display: flex;
    justify-content: center;
    font-size: 25px;
    align-items: center;
    font-family: 'Stylish', sans-serif;
}

.pwd {
    padding-top: 25px;
    display: flex;
    justify-content: center;
    font-size: 25px;
    align-items: center;
    font-family: 'Stylish', sans-serif;
}

.textbox {
    padding-left: 5px;
    border: 1px solid #DEE1EC;
    border-radius: 10px;
    font-size: 25px;
    font-family: 'Stylish', sans-serif;
    background-color: #DEE1EC;
}

.lab {
    padding-right: 75px;
}

.pad {
    padding-right: 30px;
}

.btn {
    padding-top: 50px;
    display: flex;
    justify-content: center;
}

#but_submit {
    font-size: 20px;
    padding: 10px;
    background-color: red;
    border: 1px solid red;
    cursor: pointer;
    border-radius: 10px;
    font-family: 'Stylish', sans-serif;
    color: white;
}

.eml1 {
    padding-top: 7%;
    display: flex;
    justify-content: center;
    font-size: 25px;
    align-items: center;
    font-family: 'Stylish', sans-serif;
}
