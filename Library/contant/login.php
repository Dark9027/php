<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="icon" href="../img & video/ic.png">
    <title>Library</title>

    <!-- Css Linking  -->
    <style>
        /* Font Name = Poppins ( Link in Description ) */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Poppins;
        }

        body {
            width: 100%;
            height: 70vh;
            display: grid;
            place-items: center;
            /* background-image: linear-gradient(to bottom, grey, white); */
            background-color: black;
            /* background: linear-gradient(grey, white); */
        }

        /* .container {
                width: 90%;
                height: 90%;
                background-image: linear-gradient(to right, #33333320, #33333318), url(./3.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 40px;
                box-shadow: 0px 0px 45px hsla(0, 0%, 0%, 0.159);
                display: grid;
                place-items: center;
            } */

        .form_container {
            width: 450px;
            height: 530px;
            background-color: #0b0b0b50;
            backdrop-filter: blur(5px);
            border-radius: 30px;
            border: 2px solid #c7c7c7;
            color: #fff;
            overflow: hidden;
        }
     

        .form_box {
            position: absolute;
            top: 0;
            left: 0;
            width: 900px;
            height: 530px;
            display: flex;
            align-items: center;
            transition: .5s;
        }

        .sign-up-form {
            width: 50%;
            height: 100%;
            padding: 40px 70px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .title {
            font-size: 23px;
            color: #fff;
            font-weight: 500;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            width: 100%;
        }

        .sign-up-form .input_field {
            width: 100%;
            height: 45px;
            border-bottom: 2.5px solid #fff;
            margin: 15px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10px;
        }

        .input_group .input_field input {
            width: 90%;
            height: 100%;
            background: none;
            border: none;
            outline: none;
            font-size: 16px;
            padding: 0 5px;
            color: #fff;
            letter-spacing: 1px;
        }

        input::placeholder {
            color: #ffffffd1;
            font-size: 15px;
        }


        .sign-up-form p {
            font-size: 13px;
        }

        .term-conditions {
            display: flex;
            align-items: center;
            margin-top: 25px;
        }

        .signUp-btn {
            width: 100%;
            height: 45px;
            font-size: 16px;
            border-radius: 50px;
            border: none;
            margin: 30px 0 40px 0;
            cursor: pointer;
            transition: all .5s;
        }

        .signUp-btn:hover {
            background-color: #FF5733;
            color: #fff;
        }

        .signIn-link {
            display: flex;
            align-items: center;
        }

        .signIn-link p {
            font-size: 14px;
        }

        .signIn-link a {
            color: #fff;
            font-size: 14px;
            text-decoration: none;
            margin-left: 7px;
        }



        .forgot,
        .remember {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .forgot p a {
            color: #fff;
        }

        .forgot {
            margin-top: 25px;
        }

        input[type="checkbox"] {
            margin-right: 6px;
            width: 18px;
            height: 18px;
            border: none;
            outline: none;
        }

        #signIn_btn:hover {
            color: black;
        }
    </style>


</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="margin:0px; position:sticky; top:0; z-index:100; ">
        <a class="navbar-brand" style="color: white;" href="index.php"><span style="color: red; font-size:2rem">L</span><span style="color:white; font-size:1.5rem">ibrary</span></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div style="border-radius:1.9%; padding:2%; display: flex; justify-content:center; background-image: url(../img\ &\ video/5487851.jpg); background-size: cover;" class="container-fluid">
            <div class="form_container">
                <div class="form_box" id="formBox">

                    <div class="sign-up-form">
                        <h2 class="title">Authentication</h2>
                        <h6>Only For Admin</h6>

                        <form name="fm" method="get" action="./entry.php">
                            <div name="a" class="input_group">
                                <div name="a1" class="input_field">
                                    <ion-icon name="person"></ion-icon>
                                    <input id="lid" name="lid" type="text" placeholder="LID" required>
                                </div>

                                <div name="a2" class="input_field">
                                    <ion-icon name="key"></ion-icon>
                                    <input id="pwd" name="pwd" type="password" placeholder="Password" required>
                                </div>
                            </div>
                            <button name="log" class="signUp-btn">LOGIN</button>
                        </form>
                        
                        <div class="signIn-link">
                            <a href="#" id="signIn_btn">Register</a>
                        </div>
                    </div>



                    <div class="sign-up-form">
                        <h2 class="title">Register</h2>

                        <form method="post" action="./login.php">
                            <div class="input_group">
                                <div class="input_field">
                                    <ion-icon name="person"></ion-icon>
                                    <input id="nm" type="text" placeholder="Name" name="nm" required>
                                </div>
                                <div class="input_field">
                                    <ion-icon name="mail"></ion-icon>
                                    <input id="mail_id" type="email" placeholder="Email" name="mail_id" required>
                                </div>
                                <div class="input_field">
                                    <ion-icon name="call"></ion-icon>
                                    <input id="no" type="text" placeholder="Contact" name="no" pattern="[0-9]{10}" required>
                                </div>

                                <div class="input_field">
                                    <ion-icon name="key"></ion-icon>
                                    <input id="code" type="password" placeholder="Admin Code" name="cd" required>
                                </div>
                            </div>
                            <button id="confirms" class="signUp-btn" name="con">Confirm</button>
                        </form>
                        <div class="signIn-link">
                            <p>Only For Admin</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    extract($_POST);
    if (isset($con)) {
        if ($cd == "12345654321") {
            $link = mysqli_connect($hostname, $username, $password);
            $sta = "NO";
            // $qry="";
            mysqli_query($link, "INSERT INTO `library`.`admin`(`Name`, `Email`, `Contact`, `status`) VALUES ('$nm','$mail_id','$no','$sta');");
            mysqli_close($link);
        }
    }
    ?>




    <script>
        var formWrapper = document.querySelector("#formBox");
        var signinBtn = document.querySelector("#signIn_btn");
        var signupBtn = document.querySelector("#signUp_btn");


        signinBtn.onclick = function() {
            formWrapper.style.left = "-450px";
        };
        signupBtn.onclick = function() {
            formWrapper.style.left = "0px";
        }
    </script>

    <!-- <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



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
<script src="../js/login.js"></script>
<script src="../js/redirect.js"></script>

</html>