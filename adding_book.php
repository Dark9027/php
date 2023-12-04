<!-- header -->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Library</title>
  <link rel="stylesheet" href="../css/display.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" href="../img & video/ic.png">
  <script src="../js/add.js">

  </script>
  <style>
    .bx{
      cursor: pointer;
    }

    /* #f:hover{
      color: #3b5998;
    }
    #w:hover{
      color: green;
    }
    #t:hover{
      color: #00acee;
    }
    #y:hover{
      color: #FF0000;
    }
    #i:hover{
      color: #bc2a8d; 
    } */

    .bx:hover{
      color: yellow;
    }


    
    * {
      font-family:poppins;
    }
    footer {
  background-color: black;
  color: #a7a7a7;
  font-size: 16px;
}
footer * {
  box-sizing: border-box;
  border: none;
  outline: none;
}
.row {
  padding: 1em 1em;
  margin: 0px;
}
.row.primary {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 2fr;
  align-items: stretch;
}
.column {
  width: 100%;
  display: flex;
  flex-direction: column;
  padding: 0 1em;
  min-height: 11em;
}
h3 {
  width: 100%;
  text-align: left;
  color: white;
  font-size: 1.4em;
  white-space: nowrap;
}
ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  padding: 0;
  margin: 0;
}
/* li:not(:first-child) {
  margin-top: 0.8em;
} */
ul li a {
  color: #a7a7a7;
  text-decoration: none;
}
ul li a:hover {
  color: #2a8ded;
}
.about p {
  text-align: justify;
  line-height: 2;
  margin: 0;
}
#in,
#bt {
  font-size: 1em;
  padding: 1em;
  width: 100%;
  border-radius: 5px;
  margin-bottom: 5px;
}
#bt {
  background-color: yellow;
  color: black;
}
#bt:hover {
  background-color: black;
  color: white;
  border: solid white;
}
div.social {
  display: flex;
  justify-content: space-around;
  font-size: 2.4em;
  flex-direction: row;
  margin-top: 0.5em;
}
.social i {
  color: #bac6d9;
}

.copyright {
  padding: 0.3em 1em;
  background-color: #25262e;
}
.footer-menu{
  float: left;
    margin-top: 10px;
}

.footer-menu a{
  color: #cfd2d6;
  padding: 6px;

  text-decoration: none;
}
.footer-menu a:hover{
  color: #27bcda;
}
.copyright p {
  font-size: 0.9em;
  text-align: right;
}
@media screen and (max-width: 850px) {
  .row.primary {
    grid-template-columns: 1fr;
  }

}

    body {
      background: linear-gradient(rgba(15, 14, 13, 0.7), rgba(23, 21, 19, 0.6)), url(../img\ &\ video/back.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }


    .box {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      background-color: black;
      min-height: 91.8vh;
      margin-left: 8%;
      margin-right: 8%;
    }



    .a1 {
      margin: 7%;
    }



    .card {
      width: 190px;
      height: 254px;
      cursor: pointer;
      background: #07182E;
      position: relative;
      display: flex;
      place-content: center;
      place-items: center;
      overflow: hidden;
      border-radius: 20px;
    }

    .card h2 {
      z-index: 1;
      color: white;
      font-size: 2em;
    }

    .card::before {
      content: '';
      position: absolute;
      width: 100px;
      background-image: linear-gradient(180deg, rgb(0, 183, 255), rgb(255, 48, 255));
      height: 130%;
      animation: rotBGimg 3s linear infinite;
      transition: all 0.2s linear;
    }

    @keyframes rotBGimg {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    .card::after {
      content: '';
      position: absolute;
      background: #07182E;
      ;
      inset: 5px;
      border-radius: 15px;
    }

    /* .card:hover:before {
  background-image: linear-gradient(180deg, rgb(81, 255, 0), purple);
  animation: rotBGimg 3.5s linear infinite;
} */




    .navbar {
      background-color: black;
    }

    #d1 {
      background-color: yellow;
    }

    #d1:hover {
      background-color: black;
    }


    .im:hover {
      transform: scale(1.4) rotate(-7deg);
    }



    #book {
      display: flex;
      justify-content: center;
      background: linear-gradient(aqua, yellow);
      align-items: center;
      min-height: 92.2vh;
    }

    .form {
      display: flex;
      flex-direction: column;
      gap: 10px;
      max-width: 350px;
      background-color: #fff;
      padding: 20px;
      border-radius: 20px;
      position: relative;
    }

    .title {
      font-size: 28px;
      color: royalblue;
      font-weight: 600;
      letter-spacing: -1px;
      position: relative;
      display: flex;
      align-items: center;
      padding-left: 30px;
    }

    .title::before,
    .title::after {
      position: absolute;
      content: "";
      height: 16px;
      width: 16px;
      border-radius: 50%;
      left: 0px;
      background-color: royalblue;
    }

    .title::before {
      width: 18px;
      height: 18px;
      background-color: royalblue;
    }

    .title::after {
      width: 18px;
      height: 18px;
      animation: pulse 1s linear infinite;
    }

    .message,
    .signin {
      color: rgba(88, 87, 87, 0.822);
      font-size: 14px;
    }

    .signin {
      text-align: center;
    }

    .signin a {
      color: royalblue;
    }

    .signin a:hover {
      text-decoration: underline royalblue;
    }
    
    *{
      font-family: Poppins;
    }

    .flex {
      display: flex;
      width: 100%;
      gap: 6px;
    }

    .form label {
      position: relative;
    }

    .form label .input {
      width: 100%;
      padding: 10px 10px 20px 10px;
      outline: 0;
      border: 1px solid rgba(105, 105, 105, 0.397);
      border-radius: 10px;
    }

    .form label .input+span {
      position: absolute;
      left: 10px;
      top: 15px;
      color: grey;
      font-size: 0.9em;
      cursor: text;
      transition: 0.3s ease;
    }

    .form label .input:placeholder-shown+span {
      top: 15px;
      font-size: 0.9em;
    }

    .form label .input:focus+span,
    .form label .input:valid+span {
      top: 30px;
      font-size: 0.7em;
      font-weight: 600;
    }

    .form label .input:valid+span {
      color: green;
    }

    .submit {
      border: none;
      outline: none;
      background-color: royalblue;
      padding: 10px;
      border-radius: 10px;
      color: #fff;
      font-size: 16px;
      transform: .3s ease;
    }

    .submit:hover {
      background-color: rgb(56, 90, 194);
    }

    @keyframes pulse {
      from {
        transform: scale(0.9);
        opacity: 1;
      }

      to {
        transform: scale(1.8);
        opacity: 0;
      }
    }



    #b1 {
      --color: #0077ff;
      font-family: inherit;
      display: inline-block;
      width: 6em;
      height: 2.6em;
      line-height: 2.5em;
      overflow: hidden;
      margin: 6px;
      font-size: 17px;
      z-index: 1;
      color: var(--color);
      border: 2px solid var(--color);
      border-radius: 6px;
      position: relative;
    }

    #b1::before {
      position: absolute;
      content: "";
      background: var(--color);
      width: 150px;
      height: 200px;
      z-index: -1;
      border-radius: 50%;
    }

    #b1:hover {
      color: white;
    }

    #b1:before {
      top: 100%;
      left: 100%;
      transition: .3s all;
    }

    #b1:hover::before {
      top: -30px;
      left: -30px;
    }
  </style>
</head>

<body>



  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom:1%; position:sticky; top:0; z-index:100;">
    <a class="navbar-brand" style="color: white;" href="index.php"><span style="color: red;">L</span><span style="color:white;">ibrary</span></a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
    </div>
  </nav>



  <!-- main -->
  <div class="container mx-auto" style="padding:5%; border:solid black 2px; border-radius:2%; background-color:white;">
    <form method="post" action="./adding_book.php" enctype='multipart/form-data'>
      <p class="title">Book-Entry </p>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Book_Number</label>
          <input type="text" pattern="[0-9]{4}" name="Book_Number" class="form-control" style="border: solid black;" id="number" placeholder="Enter Four Digit Book_ID..." required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Book_Name</label>
          <input type="text" name="Book_Name" class="form-control" style="border: solid black;" placeholder="Enter Name..." id="name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Publisher</label>
        <input type="text" name="Publisher" class="form-control" style="border: solid black;" id="inputAddress1" placeholder="Book_Publisher" required>
      </div>
      <div class="form-group">
        <label for="inputAddress">Upload_Book_Pic</label>
        <input type="file" name="Pic" id="inputAddress" placeholder="Book_Publisher" required>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Date</label>
          <input type="Date" name="Date" min="2023-05-01" class="form-control" style="border: solid black;" id="inputCity" required>
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Type</label>
          <select id="inputState" name="Type" class="form-control" style="border: solid black;" required>
            <option value="" disabled selected>~Select~</option>
            <option value="E1">E1</option>
            <option value="M1">M1</option>
            <option value="T1">T1</option>
          </select>
        </div>
      </div>
      <button onclick="add();" class="submit" name="Book_Submit">Submit</button>
    </form>
  </div>


  <!-- footer -->
  <?php
  include("./footer.php")
  ?>

  <!-- --backend--for--adding_book-- -->
  <?php
  extract($_POST);


  include('./connection.php');

  if (isset($Book_Submit)) {
    if($_FILES['Pic']['error']==0){
      $temp=$_FILES['Pic']['tmp_name'];
      $path="./book_pic/".$_FILES['Pic']['name'];
      move_uploaded_file($temp,$path);
    }
    if ($Type == 'e1' || $Type == 'E1') {
      $link = mysqli_connect($hostname, $username, $password);
      $Book_Number = "E" . $Book_Number;
      $qry = "INSERT INTO `library`.`e1`(`Id`, `Book_Name`, `Publisher`, `Date`, `Type`,`Pic`) VALUES ('$Book_Number','$Book_Name','$Publisher','$Date','$Type','$path')";
      mysqli_query($link, $qry);
      mysqli_close($link);
    } else if ($Type == 'm1' || $Type == 'M1') {
      $link = mysqli_connect($hostname, $username, $password);
      $Book_Number = "M" . $Book_Number;
      $qry = "INSERT INTO `library`.`m1`(`Id`, `Book_Name`, `Publisher`, `Date`, `Type`,`Pic`) VALUES ('$Book_Number','$Book_Name','$Publisher','$Date','$Type','$path')";
      mysqli_query($link, $qry);
      mysqli_close($link);
    } else if ($Type == 't1' || $Type == 'T1') {
      $link = mysqli_connect($hostname, $username, $password);
      $Book_Number = "T" . $Book_Number;
      $qry = "INSERT INTO `library`.`t1`(`Id`, `Book_Name`, `Publisher`, `Date`, `Type`,`Pic`) VALUES ('$Book_Number','$Book_Name','$Publisher','$Date','$Type','$path')";
      mysqli_query($link, $qry);
      mysqli_close($link);
    }
  }
  ?>