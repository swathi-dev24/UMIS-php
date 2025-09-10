<nav class="navbar navbar-expand-lg navbar-dark custom-bg" >
  <div class="container-fluid">
    
    <!-- Logo + Brand -->
    <a class="navbar-brand d-flex align-items-center fs-3 lh-base" href="#">
      <img src="img/tnlogo1.png" style="height:50px; width:auto; object-fit:contain;" class="me-2 rounded">
      <span class="fw-semibold">
        University Management Information System<br>
        Government of Tamil Nadu
      </span>
    </a>

    <!-- Hamburger (mobile) -->
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu Items -->
    <div class="collapse navbar-collapse fs-4 fw-semibold" id="navbarNav">
      <ul class="navbar-nav  ms-auto align-items-center">
        <?php
          if (isset($_SESSION["ad_id"])) {
            echo '
              <li class="nav-item me-3"><a class="nav-link text-white text-decoration-none" href="#">English |</a></li>
              <li class="nav-item me-3"><a class="nav-link text-white" href="#">A- A A+ |</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="logout.php">ADMIN LOGOUT</a></li>
            ';
          } 
          else if (isset($_SESSION["uid"])) {
            echo '
              <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="#">English |</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="#">A- A A+ |</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="student_logout.php">STUDENT LOGOUT</a></li>
            ';
          } 
          else {
            echo '
              <li class="nav-item me-3"><a class="nav-link text-white">English |</a></li>
              <li class="nav-item me-3"><a class="nav-link text-white">A- A A+ |</a></li>
              <li class="nav-item"><a class="nav-link text-white"  href="index.php">HOME</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="adminlogin.php">ADMIN</a></li>
            ';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
