<!-- header -->
<?php include_once('./header.php') ?>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="position:sticky; top:0; z-index:100;">
  <a class="navbar-brand" style="color: white;" href="index.php"><span style="color:red">L</span><span style="color:white;">ibrary</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
  </div>
</nav>


<?php
    extract($_POST);
    
    include('./connection.php');
    if(isset($_GET['id'])){
        if($_GET['id']=='E1'){
            $link=mysqli_connect($hostname,$username,$password);
            $qry="select* from `library`.`e1`";
            $resultSet=mysqli_query($link,$qry);
            $table=<<<Tab

        <div class="table-responsive">
        <table class="table-bordered table-hover table-striped" border ='3px' width='700px' align='center'>
        <thead class="table-dark">
        <tr>
        <th>Id</th>
        <th>Book_Name</th>
        <th>Publisher</th>
        <th>Date</th>
        <th>Type</th>
        </tr>
        </thead><tbody>
        Tab ;


        while ($row=mysqli_fetch_assoc($resultSet)) {
            $r="<tr><td>$row[Id]</td><td>$row[Book_Name]</td><td>$row[Publisher]</td><td>$row[Date]</td><td>$row[Type]</td></tr>";
            $table.=$r;
        }
        $table.= "</tbody></table></div>";
        
        echo $table;
        }
        if($_GET['id']=='M1'){
            $link=mysqli_connect($hostname,$username,$password);
            $qry="select* from `library`.`m1`";
            $resultSet=mysqli_query($link,$qry);
            $table=<<<Tab

        <div class="table-responsive">
        <table class="table-bordered table-hover table-striped" border ='3px' width='700px' align='center'>
        <thead class="table-dark">
        <tr>
        <th>Id</th>
        <th>Book_Name</th>
        <th>Publisher</th>
        <th>Date</th>
        <th>Type</th>
        </tr>
        </thead><tbody>
        Tab ;


        while ($row=mysqli_fetch_assoc($resultSet)) {
            $r="<tr><td>$row[Id]</td><td>$row[Book_Name]</td><td>$row[Publisher]</td><td>$row[Date]</td><td>$row[Type]</td></tr>";
            $table.=$r;
        }
        $table.= "</tbody></table></div>";
        
        echo $table;
        }
        if($_GET['id']=='T1'){
            $link=mysqli_connect($hostname,$username,$password);
            $qry="select* from `library`.`t1`";
            $resultSet=mysqli_query($link,$qry);
            $table=<<<Tab

        <div class="table-responsive">
        <table class="table-bordered table-hover table-striped" border ='3px' width='700px' align='center'>
        <thead class="table-dark">
        <tr>
        <th>Id</th>
        <th>Book_Name</th>
        <th>Publisher</th>
        <th>Date</th>
        <th>Type</th>
        </tr>
        </thead><tbody>
        Tab ;


        while ($row=mysqli_fetch_assoc($resultSet)) {
            $r="<tr><td>$row[Id]</td><td>$row[Book_Name]</td><td>$row[Publisher]</td><td>$row[Date]</td><td>$row[Type]</td></tr>";
            $table.=$r;
        }
        $table.= "</tbody></table></div>";
        
        echo $table;
        }
    }

?>
