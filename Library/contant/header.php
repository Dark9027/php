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
  <style>
    *{
      font-family: Poppins;
    }

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
      color:yellow;
    }


footer {
  background-color: #121315;
  color: #a7a7a7;
  font-size: 16px;
  background-color: black;  
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

.custom-shape-divider-top-1689271122 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-top-1689271122 svg {
    position: relative;
    display: block;
    width: calc(117% + 1.3px);
    height: 114px;
    transform: rotateY(180deg);
}

.custom-shape-divider-top-1689271122 .shape-fill {
    fill: #FFFFFF;
}
    #t{
      /* background:linear-gradient(rgba(15, 14, 13,0.9),rgba(23, 21, 19,0.9)), url(../img\ &\ video/back.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed; */
    }
      .navbar{
    background-color:black;
    }
    #myVideo {
      /* margin-right: 20px; */
      /* margin: auto; */
      position: sticky;
    top: 0;
    /* bottom: 0;
    left: 0;
    right: 0; */
    margin: auto;
    min-width: 100%;
    max-width: 100%;

    z-index: -10;
    background-size: cover;
}

/* Add some content at the bottom of the video/page */
.cont{
  /* position:fixed; */
  /* top: 0; */
  /* z-index: 1; */
  height: 100%;
    width: 100%;
    overflow: hidden;
}
#d1{
  background-color: yellow;
}
#d1:hover{
  background-color: black;
}
#g1{
  background-color: yellow;
}
#g1:hover{
  background-color: black;
}

#add{
  color: white;
}

#add:hover{
  color:yellow;
}

.im:hover{
  transform: scale(1.4) rotate(-7deg);
}



      #book{
        display: flex;
        justify-content: center;
        background:linear-gradient(aqua,yellow);
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

.title::before,.title::after {
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

.message, .signin {
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

.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}

.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input:valid + span {
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



  .b {
  --color: black;
  font-family: inherit;
  background-color: white;
  cursor: pointer;
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

.b::before {
  position: absolute;
  content: "";
  background: var(--color);
  width: 150px;
  height: 200px;
  z-index: -1;
  border-radius: 50%;
}

.b:hover {
  color: white;
  /* background-color: black; */
}

.b:before {
  top: 100%;
  left: 100%;
  transition: .3s all;
}

.b:hover::before {
  top: -30px;
  left: -30px;
}
    </style>
  </head>
  <body>

