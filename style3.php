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

.database {
    display: flex;
    justify-content: center;
    padding-top: 3%;
}

.row {
    padding-top: 3%;
    font-family: 'Stylish', sans-serif;
}

.transfer-form {
    font-size: 1.5rem;
}

.form-control {
    font-size: 1.5rem;
}

.col-form-label {
    padding-right: 3%;
}

th {
    padding: 30px;
    background-color: red;
    text-align: center;
    font-family: 'Stylish', sans-serif;
}

td {
    text-align: center;
    padding: 5px;
    font-family: 'Stylish', sans-serif;
}

select {
    font-size: 2rem;
}

.acc-select {
    display: flex;
    align-items: center;
    font-family: 'Stylish', sans-serif;
    padding-top: 3%;
}

.trnsf {
    padding-right: 10px;
}

.transfer_amount {
    display: flex;
    align-items: center;
    font-family: 'Stylish', sans-serif;
    padding-top: 3%;
}

.amt {
    padding-right: 50px;
}

.inpamt {
    font-size: 1.5rem;
}

.button {
    padding: 50px;
}

#btn {
    font-size: 1.5rem;
    padding: 10px;
    border: 1px solid red;
    background-color: red;
    cursor: pointer;
    border-radius: 20px;
    color: white;
}