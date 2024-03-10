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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>

.bx{
      cursor: pointer;
    }
    *{
      font-family: Poppins;
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
      color:yellow;
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

      nav{
        background-color: black;
      }
      .btn {
  --border-color: linear-gradient(-45deg, #ffae00, #7e03aa, #00fffb);
  --border-width: .125em;
  --curve-size: .5em;
  --blur: 30px;
  --bg: #080312;
  --color: #afffff;
  color: var(--color);
    /* use position: relative; so that BG is only for .btn */
  position: relative;
  isolation: isolate;
  display: inline-grid;
  place-content: center;
  padding: .5em 1.5em;
  font-size: 17px;
  border: 0;
  text-transform: uppercase;
  box-shadow: 10px 10px 20px rgba(0, 0, 0, .6);
  clip-path: polygon(
            /* Top-left */
            0% var(--curve-size),

            var(--curve-size) 0,
            /* top-right */
            100% 0,
            100% calc(100% - var(--curve-size)),

            /* bottom-right 1 */
            calc(100% - var(--curve-size)) 100%,
            /* bottom-right 2 */
            0 100%);
  transition: color 250ms;
}

.btn::after,
.btn::before {
  content: '';
  position: absolute;
  inset: 0;
}

.btn::before {
  background: var(--border-color);
  background-size: 300% 300%;
  animation: move-bg7234 5s ease infinite;
  z-index: -2;
}

@keyframes move-bg7234 {
  0% {
    background-position: 31% 0%
  }

  50% {
    background-position: 70% 100%
  }

  100% {
    background-position: 31% 0%
  }
}

.btn::after {
  background: var(--bg);
  z-index: -1;
  clip-path: polygon(
            /* Top-left */
            var(--border-width) 
            calc(var(--curve-size) + var(--border-width) * .5),

            calc(var(--curve-size) + var(--border-width) * .5) var(--border-width),

            /* top-right */
            calc(100% - var(--border-width)) 
            var(--border-width),

            calc(100% - var(--border-width)) 
            calc(100% - calc(var(--curve-size) + var(--border-width) * .5)),

            /* bottom-right 1 */
            calc(100% - calc(var(--curve-size) + var(--border-width) * .5)) calc(100% - var(--border-width)),
            /* bottom-right 2 */
            var(--border-width) calc(100% - var(--border-width)));
  transition: clip-path 500ms;
}

.btn:where(:hover, :focus)::after {
  clip-path: polygon(
                /* Top-left */
                calc(100% - var(--border-width)) 

                calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5)),
    
                calc(100% - var(--border-width))

                var(--border-width),
    
                /* top-right */
                calc(100% - var(--border-width))

                 var(--border-width),
    
                calc(100% - var(--border-width)) 

                calc(100% - calc(var(--curve-size) + var(--border-width) * .5)),
    
                /* bottom-right 1 */
                calc(100% - calc(var(--curve-size) + var(--border-width) * .5)) 
                calc(100% - var(--border-width)),

                /* bottom-right 2 */
                calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5))
                calc(100% - var(--border-width)));
  transition: 200ms;
}

.btn:where(:hover, :focus) {
  color: #fff;
}
body{
  background-color: black;
}
    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom:1%; position:sticky; top:0; z-index:100;">
    <a class="navbar-brand" style="color: white;" href="../contant/index.php"><span style="color: red;">L</span><span style="color:white;">ibrary</span></a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
    </div>
  </nav>


  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
  <div style="margin-bottom:2%; display: flex; justify-content:center; align-items:center;">
  <button name="dis" class="btn">
    Borrowed Books
</button>
  </div><p align="center" style="color: white;">Click the above button to seen Borrowed Books Data...</p></form>

  <div style="min-height:50.3vh;">
  <?php
    extract($_POST);
    // read data from db.../!
    if(isset($dis)){
        include("../contant/connection.php");
        $link=mysqli_connect($hostname,$username,$password);
        $qry="select* from `library`. `borrow`";
        $resultSet=mysqli_query($link,$qry);
        $table=<<<Tab

        <div class="table-responsive">
        <table class="table-bordered table-hover table-striped" border ='3px' width='700px' align='center'>
        <thead align="center" class="table-dark">
        <tr>
        <th>Book_Number</th>
        <th>Email</th>
        <th>Contact</th>
        </tr>
        </thead><tbody>
        Tab ;


        while ($row=mysqli_fetch_assoc($resultSet)) {
            // mysqli_fetch_array()
            // mysqli_fetch_row()
            // var_dump($row);    
            // echo "$row[0],$row[1]<br>";
            $r="<tr><td align='center' style='color:white;'>$row[Book_Number]</td><td style='color:white;' align='center'>$row[Email]</td><td style='color:white;' align='center'>$row[Contact]</td>  </tr>";
            $table.=$r;
        }
        $table.= "</tbody></table></div>";
        
        echo $table;
    }
    ?>

</div>
  <?php
  include("../contant/footer.php");
  ?>


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