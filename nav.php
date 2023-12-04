


<nav class="navbar navbar-expand-lg navbar-light" style=" position:sticky; top:0; z-index:100;">
  <a class="navbar-brand" style="color: white;" href="index.php"><span style="color: red;">L</span><span style="color:white;">ibrary</span></a>
  <button class="navbar-toggler" style="background-color:yellow;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle browser" style="color: white;" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Books-Corner
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#T1">Trending</a>
          <a class="dropdown-item" href="#tech1">Tech-Corner</a>
          <a class="dropdown-item" href="#M1">Medical-Corner</a>          
        </div>
      </li>
      <li class="nav-item">
        <a id="add" type="hi" class="nav-link"  href="./login.php">Adding-Book</a>
      </li>
      <li>
      <a id="add" type="hi" class="nav-link" href="./Display.php">Issued-books</a>  
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="get" action="./borrow.php">
    <input class="form-control mr-sm-2" type="search" pattern="[M,T,E]{1}[0-9]{4}" placeholder="Enter Book Number..." name="val" aria-label="Search" title="Only Valid Book_ID" required>
      <input type="submit" id="d1" class="btn btn-outline-dark  my-2 my-sm-0" value="Search">
    </form>


  </div>
</nav>