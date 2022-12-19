<?php

  include "connection.php";
 

  $qry = mysqli_query($conn, "SELECT * FROM `tb_vapes` ");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cigs - Cigarettes and Vapes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,300&family=Silkscreen&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </head>
  <body>
    <header class="fixed-top bg-light">
      <nav class="navbar navbar-expand-lg bg-light container">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Cigs</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Shop Vapes</a></li>
                  <li><a class="dropdown-item" href="cigarettes.php">Shop Cigarettes</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section class="vapes">
      <div class="container d-flex flex-wrap gap-5 justify-content-center">
        <?php while ($result = mysqli_fetch_array($qry)) { ?>   
        <div class="card" style="width: 18rem">
          <img src="<?php echo $result['gambar'] ?>" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><?php echo $result['namaProduk'] ?></h5>
            <p class="card-text"><?php echo $result['deskripsi'] ?></p>
            <h5 class="card-text">$<?php echo $result['harga'] ?></h5>
          </div>
          <div class="card-body d-flex flex-column justify-content-center align-items-center gap-1">
            <a href="#" class="card-link card-btn">View product</a>
            <a href="#" class="card-link card-btn">Buy now</a>
          </div>
        </div>
        <?php } ?>
        <!-- 
        <div class="card" style="width: 18rem">
          <img src="https://github.com/christiankurniadi/keyboard-landing-page/blob/main/img/vaporesso-1.jpg?raw=true" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">ZERO One v30</h5>
            <p class="card-text">A simple pod but has a massive cloud.</p>
          </div>
          <div class="card-body d-flex flex-column justify-content-center align-items-center gap-1">
            <a href="#" class="card-link card-btn">View product</a>
            <a href="#" class="card-link card-btn">Buy now</a>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img src="https://github.com/christiankurniadi/keyboard-landing-page/blob/main/img/vaporesso-3.jpg?raw=true" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Vaporesso Chronn</h5>
            <p class="card-text">Modern looking mod for high standard folks.</p>
          </div>
          <div class="card-body d-flex flex-column justify-content-center align-items-center gap-1">
            <a href="#" class="card-link card-btn">View product</a>
            <a href="#" class="card-link card-btn">Buy now</a>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img src="https://github.com/christiankurniadi/keyboard-landing-page/blob/main/img/liquid.jpg?raw=true" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Bloom farms</h5>
            <p class="card-text">New taste that you'll never ever taste.</p>
          </div>
          <div class="card-body d-flex flex-column justify-content-center align-items-center gap-1">
            <a href="#" class="card-link card-btn">View product</a>
            <a href="#" class="card-link card-btn">Buy now</a>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img src="https://github.com/christiankurniadi/keyboard-landing-page/blob/main/img/tiny-pod.jpg?raw=true" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">CoCo</h5>
            <p class="card-text">Tiny pod but has a rich sensation.</p>
          </div>
          <div class="card-body d-flex flex-column justify-content-center align-items-center gap-1">
            <a href="#" class="card-link card-btn">View product</a>
            <a href="#" class="card-link card-btn">Buy now</a>
          </div>
        </div> -->
      </div>
    </section>

    <footer class="footer">
      <div class="container d-flex align-items-start justify-content-sm-between pt-5">
        <div class="footer__about d-flex flex-column">
          <h4 class="mb-1">about</h4>
          <a href="#">About us</a>
          <a href="#">Careers</a>
          <a href="#">Contact</a>
        </div>
        <div class="footer__collaborate d-flex flex-column">
          <h4 class="mb-1">collaborate with us</h4>
          <a href="#">For Brands and Designers</a>
        </div>
        <div class="footer__support d-flex flex-column">
          <h4 class="mb-1">support</h4>
          <a href="#">Help Center</a>
          <a href="#">Community Guidelines</a>
        </div>

        <div class="footer__logo d-flex flex-column">
          <a href="/"><strong>Cigs</strong></a>
        </div>
        <div class="footer__copyright">
          <p>&copy; 2022 Cigs</p>
        </div>
      </div>
    </footer>
    <script src="js/script.js"></script>
  </body>
</html>
<?php  ?>