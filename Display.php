<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign in Form</title>
        <link rel="icon" href="../img & video/ic.png">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Rancho&family=Water+Brush&display=swap');

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: poppins;
            }

            :root {
                --primary: #ff5303;
                --backgroud: #F3F4ED;
                --font-color: #424642;
                --border: #555555bd;
            }

            body {
                width: 100%;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: var(--backgroud);
                color: var(--font-color);
            }

            form {
                width: 360px;
                height: 400px;
                padding: 50px 30px;
                border-radius: 8px;
                box-shadow: 2px 10px 35px rgba(0, 0, 0, 0.164);
                background-color: #fff;
            }

            .head {
                display: flex;
                align-items: center;
                margin-bottom: 35px;
            }

            .head .line {
                width: 4px;
                height: 28px;
                border-radius: 2px;
                background-color: var(--primary);
                margin-right: 12px;
            }

            .head p {
                font-size: 25px;
                font-weight: 500;
            }

            .input_field {
                width: 100%;
                height: 50px;
                border-radius: 12px;
                margin: 25px 0;
                position: relative;
            }

            .input_field .form_input {
                width: 100%;
                height: 100%;
                position: absolute;
                border: 3px solid var(--border);
                border-radius: 10px;
                background-color: transparent;
                outline: none;
                padding: 0 19px;
                font-size: 17px;
                font-weight: 500;
                letter-spacing: .4;
                transition: .5s;
            }

            .input_field .form_label {
                position: absolute;
                top: 50%;
                left: 25px;
                transform: translateY(-50%);
                font-weight: 500;
                transition: .5s;
            }
            .form_input:focus~.form_label,
            .form_input:not(:placeholder-shown).form_input:not(:focus)~.form_label {
                top: 0;
                left: 15px;
                transform: translateY(-50%);
                font-size: 14px;
                color: var(--primary);
                padding: 0 10px;
                background-color: #fff;
                border-radius: 4px;
            }
            .form_input:not(:placeholder-shown).form_input:not(:focus)~.form_label {
                color: var(--font-color);
            }

            .form_input:focus {
                border: 3px solid var(--primary);
            }

            .btn {
                padding: 9px 25px;
                border-radius: 7px;
                border: none;
                outline: none;
                background-color: var(--primary);
                margin-top: 18px;
                color: #fff;
                font-weight: 500;
                font-size: 16px;
                cursor: pointer;
                box-shadow: 2px 10px 35px rgba(0, 0, 0, 0.164);
            }

        </style>

    </head>

    <body>
        <form method="post" action="#">
            <div class="head">
                <span class="line"></span>
                <p>Only For Admin</p>
            </div>

            <div class="input_field">
                <input name="c" id="a1" type="text" class="form_input" placeholder=" ">
                <label for="a1" class="form_label">Admin Code</label>
            </div>

            <button name="sh" class="btn">Get Access</button>
        </form>



        <?php
        extract($_POST);
        if (isset($sh)){
          $code='12345654321';
          if($code==$c){
            echo "<script>window.location='../ADMIN_PANEL/home.php'</script>";
          }
          else{
            echo "<script>alert('Wrong Admin Code...');</script>";
          }
        }
        ?>
    </body>

</html>
