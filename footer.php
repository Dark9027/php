   
   <!-- <div style="padding:0px; margin:0px; background-color:white;">
<hr style="margin: 20px; min-height:0.1vh; background-color:black;">  
</div> -->
    


<footer>
<div class="row primary">
  <div class="column about">

  <h3>Around the Library</h3>

   <p>
   Here's what's happened over the last 28 days.
  </p>

  <div class="social">
  <a href="https://www.facebook.com/groups/223500019219994/?ref=share&mibextid=NSMWBT" target="_blank"><i id="f" class='bx bxl-facebook-circle'></i></a>
  <a href="https://instagram.com/state_library?igshid=MzRlODBiNWFlZA==" target="_blank"><i id="i" class='bx bxl-instagram-alt'></i></a>
  <a href="https://twitter.com/LibraryJournal?t=mzEE6d7zyEbiQf5zeNaXxA&s=09" target="_blank"><i id="t" class='bx bxl-twitter'></i></a>
  <a href="https://youtube.com/@documentrylibrary" target="_blank"><i id="y" class='bx bxl-youtube'></i></a>
  <a href="https://chat.whatsapp.com/invite/EvVUytEC8R18hia4ex6gwR" target="_blank"><i id="w" class='bx bxl-whatsapp' ></i></a>
  </div>
</div>

<div class="column links">
<h3>Contact Us</h3>

 <ul>

  <li>
   <a href="Tel:9084497560" target="_blank">9084497560</a>
  </li>
  <li>
   <a href="mailto:sagarjuneja9027@gmail.com" target="_blank">Sagarjuneja9027@gmail.com</a>
  </li>
  <li>
   <a href="../downloads/services.pdf" download="services">Terms Of Service</a>
  </li>
  <li>
   <a href="../downloads/support.pdf" download="support">Support</a>
  </li>
 </ul>

</div>


<div class="column links">
  <h3>Links</h3>
   <ul>
    <li>
     <a href="https://guides.lib.uw.edu/research/faq" target="_blank">F.A.Q</a>
    </li>
    <li>
     <a href="https://www.tc.columbia.edu/policylibrary/policies/cookie-notice-8438725/" target="_blank">Cookies Policy</a>
    </li>
    <!-- <li>
    <a href="#terms-of-services">Terms Of Service</a>
    </li>
    <li>
    <a href="#support">Support</a>
    </li> -->
  </ul>
</div>

<div class="column subscribe">
 <h3>Message Us</h3>
 <form action="" method="post">
  <div>
    <textarea name="mess" placeholder="Give your response..." id="in" rows="2"></textarea>
   <!-- <input id="in" placeholder="Give your response..."/> -->
   <button name="send" id="bt">Submit</button>
  </div>
  </form>
</div>
<?php

extract($_POST);
if(isset($send) && $mess!=""){
  include("./connection.php");
  $link=mysqli_connect($hostname,$username,$password);
  $qry="INSERT INTO `library`.`message` (`Message`) VALUES ('$mess');";
  mysqli_query($link,$qry);
}

?>

</div>
</footer>


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