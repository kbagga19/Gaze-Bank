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
    font-size: 1.5rem;
}

.database1 {
    display: flex;
    justify-content: center;
    font-size: 1.5rem;
}

.cust {
    display: flex;
    justify-content: center;
    font-size: 25px;
    font-family: 'Righteous', cursive;
}

th {
    padding: 30px;
    background-color: red;
    text-align: center;
    font-family: 'Stylish', sans-serif;
}

td {
    padding: 30px;
    text-align: center;
    font-family: 'Stylish', sans-serif;
}

.transfer {
    border: 1px solid lightblue;   
    border-radius: 20px;
    background-color: lightblue;
    cursor: pointer;
}

.transpage {
    border: 1px solid lightblue;
    background-color: lightblue;
    border-radius: 20px;
    text-decoration: none;
    color: black;
    padding: 10px;
}

.numbers {
    text-align: center;
    font-family: 'Stylish', sans-serif;
}

