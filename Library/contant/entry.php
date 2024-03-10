<?php
extract($_GET);
$hostname = "localhost";
$username = "root";
$password = "";
$link = mysqli_connect($hostname, $username, $password);
$qry="SELECT * FROM `library`.`admin2` WHERE LID='$lid' and password='$pwd';";
$resultSet=mysqli_query($link,$qry);
$row= mysqli_fetch_assoc($resultSet);
    error_reporting(E_ERROR | E_PARSE); 
    if("$row[LID]"==$lid && "$row[password]"==$pwd){
    include("./adding_book.php");
    }
    else{
        include("./login.php");
    }
?>