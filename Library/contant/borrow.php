<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Library</title>
    <link rel="icon" href="../img & video/ic.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: poppins;
            }
            #about-section {
                width: 100%;
                height: auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 80px 12%;
            }
            .about-left img{
                width: 420px;
                height: auto;
                transform: translateY(50px);
            }
            .about-right {
                width: 54%;
            }

            .about-right ul li {
                display: flex;
                align-items: center;
            }

            .about-right h1 {
                color: #e74d06;
                font-size: 37px;
                margin-bottom: 5px;
            }

            .about-right p {
                color: #444;
                line-height: 26px;
                font-size: 15px;
            }

            .about-right .address {
                margin: 25px 0;
            }

            .about-right .address ul li {
                margin-bottom: 5px;
            }

            .address .address-logo {
                margin-right: 15px;
                color: #e74d06;
            }

            .address .saprater {
                margin: 0 35px;
            }

            .about-right .expertise ul {
                width: 80%;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .expertise h3 {
                margin-bottom: 10px;
            }

            .expertise .expertise-logo {
                font-size: 19px;
                margin-right: 10px;
                color: #e74d06;
            }
            nav{
                background-color: black;
            }
        </style>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="position:sticky; top:0; z-index:100;">
  <a class="navbar-brand" style="color: white;" href="index.php"><span style="color:red">L</span><span style="color:white;">ibrary</span></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
  </div>
</nav>

        <section id="about-section">
            <!-- about left  -->
            <div class="about-left">
                <img style="max-height:60vh ; max-width:20vw;" src="<?php
  extract($_GET);
  include("./connection.php");
  $check=substr($_GET['val'],0,1);
  if($check=='E'){
  $link=mysqli_connect($hostname,$username,$password);
  $qry = "select * from `library`.`e1` where Id='$_GET[val]'";
  $resultSet=mysqli_query($link,$qry);
  $row=mysqli_fetch_assoc($resultSet);
  echo "$row[Pic]";
}
else if($check=='T'){
  $link=mysqli_connect($hostname,$username,$password);
  $qry = "select * from `library`.`t1` where Id='$_GET[val]'";
  $resultSet=mysqli_query($link,$qry);
  $row=mysqli_fetch_assoc($resultSet);
  echo "$row[Pic]";
}
else if($check=='M'){
  $link=mysqli_connect($hostname,$username,$password);
  $qry = "select * from `library`.`m1` where Id='$_GET[val]'";
  $resultSet=mysqli_query($link,$qry);
  $row=mysqli_fetch_assoc($resultSet);
  echo "$row[Pic]";
}



?>" alt="Book_Not_Found-Error(Try Again)"/>
            </div>

            <!-- about right  -->
            <div class="about-right">
                <h4>About</h4>
                <h1><?php
include('./connection.php');
$check=substr($_GET['val'],0,1);

if($check=='E'){
  extract($_GET);
  $link=mysqli_connect($hostname,$username,$password);
  $qry = "select * from `library`.`e1` where Id='$_GET[val]'";
  $resultSet=mysqli_query($link,$qry);
  $row=mysqli_fetch_assoc($resultSet);
  if($row){
  echo "$row[Book_Name]";
  }
  else{
    echo "<script language=\"javascript\">alert(\"Invalid Book_Number\");window.location='./index.php';</script>";
  }
}
if($check=='T'){
  extract($_GET);
  $link=mysqli_connect($hostname,$username,$password);
  $qry = "select * from `library`.`t1` where Id='$_GET[val]'";
  $resultSet=mysqli_query($link,$qry);
  $row=mysqli_fetch_assoc($resultSet);
  if($row){
  echo "$row[Book_Name]";
  }
  else{
    echo "<script language=\"javascript\">alert(\"Invalid Book_Number\");window.location='./index.php';</script>";
  }
}
if($check=='M'){
  extract($_GET);
  $link=mysqli_connect($hostname,$username,$password);
  $qry = "select * from `library`.`m1` where Id='$_GET[val]'";
  $resultSet=mysqli_query($link,$qry);
  $row=mysqli_fetch_assoc($resultSet);
  if($row){
  echo "$row[Book_Name]";
  }
  else{
    echo "<script language=\"javascript\">alert(\"Invalid Book_Number\");window.location='./index.php';</script>";
  }
}
  ?></h1>
                
<div class="address">
<?php
include('./connection.php');
$check=substr($_GET['val'],0,1);

if($check=='E'){
  extract($_GET);
  $link=mysqli_connect($hostname,$username,$password);
  $qry = "select * from `library`.`e1` where Id='$_GET[val]'";
  $resultSet=mysqli_query($link,$qry);
  $row=mysqli_fetch_assoc($resultSet);
  $table=<<<Tab
  <h6>By-$row[Publisher]</h6>
  <p>
Tab ;

  $r="Selected Book have Id number-$row[Id] and the Date of publish $row[Date].
  Book-Type=$row[Type]";
  $table.=$r;
$table.= "</p>";

echo $table;
    }
else if($check=='T'){
  extract($_GET);
  $link=mysqli_connect($hostname,$username,$password);
  $qry = "select * from `library`.`t1` where Id='$_GET[val]'";
  $resultSet=mysqli_query($link,$qry);
  $row=mysqli_fetch_assoc($resultSet);
  $table=<<<Tab
  <h6>By-$row[Publisher]</h6>
  <p>
Tab ;

  $r="Selected Book have Id number-$row[Id] and the Date of publish $row[Date].
  Book-Type=$row[Type]";
  $table.=$r;
$table.= "</p>";

echo $table;
    }
else if($check=='M'){
  extract($_GET);
  $link=mysqli_connect($hostname,$username,$password);
  $qry = "select * from `library`.`m1` where Id='$_GET[val]'";
  $resultSet=mysqli_query($link,$qry);
  $row=mysqli_fetch_assoc($resultSet);
  $table=<<<Tab
  <h6>By-$row[Publisher]</h6>
  <p>
Tab ;

  $r="Selected Book have Id number-$row[Id] and the Date of publish $row[Date].
  Book-Type=$row[Type]";
  $table.=$r;
$table.= "</p>";

echo $table;
    }

?>

<form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="em" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Contact</label>
    <input name="ph" type="text" class="form-control" id="exampleInputPassword1" pattern="[0-9]{10}">
    <small id="emailHelp" class="form-text text-muted">NOTE: After 15 days Charge on Book 20 RS per Day.</small>
  </div>
  <button name="bo" onclick="borrow()" type="submit" class="btn btn-primary">Borrow</button>
</form>
</div>
  </div>
        </section>

        <?php
        extract($_POST);
        include("./connection.php");
        if(isset($bo)){
            $link=mysqli_connect($hostname,$username,$password);
            $qry="INSERT INTO `library`.`borrow` (`Book_Number` , `Email`, `Contact`) VALUES ('$val','$em','$ph' );";
            mysqli_query($link,$qry);
            echo "<script>window.location='./index.php';</script>";
        }
        ?>


<script>
    function borrow(){
    let a=document.getElementById("exampleInputEmail1");
    let b=document.getElementById("exampleInputPassword1");
    if(a.value!="" && b.value!=""){
        alert("Your Borrow Request registered..")
    }        
    else{
        alert("Your Request not register Try Again...");
    }
    // console.log("a.value");
}
</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>