<?php
  session_start();
  if(empty($_SESSION['username'])){
    header("location:signinForm.html");
  }else{
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
    <!-- Header -->
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="vapes.php">Shop Vapes</a></li>
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

    <!-- Hero -->
    <section class="hero">
      <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="https://github.com/christiankurniadi/keyboard-landing-page/blob/main/img/marlboro.jpg?raw=true" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="https://github.com/christiankurniadi/keyboard-landing-page/blob/main/img/mod-kit.jpg?raw=trueg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="https://github.com/christiankurniadi/keyboard-landing-page/blob/main/img/liquid.jpg?raw=true" class="d-block w-100" alt="..." />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- Latest -->
    <section class="latest">
      <div class="container">
        <div class="row mt-5">
          <div class="products__text col align-self-center">
            <h5>Be a cloud artist</h5>
            <h2 class="mb-5">ZERO One v30</h2>
            <p class="m-0">Puff your lungs like Mrs. Puff</p>
            <p class="m-0">30 Amps | 180 Watts | Alumunium</p>
            <p class="m-0">Get free 100ml liquid</p>
            <h3>$80</h3>
            <div class="products__cta">
              <a href="#" class="cta-btn">View Product</a>
              <a href="#" class="cta-btn">Buy Product</a>
            </div>
          </div>
          <a href="#" class="col">
            <div class="products__image">
              <img src="https://github.com/christiankurniadi/keyboard-landing-page/blob/main/img/vaporesso-1.jpg?raw=true" alt="vape" />
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- Products Section -->
    <section class="products mt-5 mb-5">
      <div class="products__wrapper container d-flex justify-content-between align-items-center">
        <div class="products__vapes position-relative mt-5 mb-3">
          <img src="https://github.com/christiankurniadi/keyboard-landing-page/blob/main/img/cigs-pack.jpg?raw=true" alt="" />
          <div class="products__overlay position-absolute d-flex align-items-center justify-content-center flex-column p-5">
            <h2>Shop Cigarettes</h2>
            <p>What a bunch of tobacco.</p>
            <a href="cigarettes.php">Learn more ></a>
          </div>
        </div>
        <div class="products__cigarette position-relative mt-5 mb-3">
          <img src="https://github.com/christiankurniadi/keyboard-landing-page/blob/main/img/vaporesso-2.jpg?raw=true" alt="" />
          <div class="products__overlay position-absolute d-flex align-items-center justify-content-center flex-column p-5">
            <h2>Shop Vapes</h2>
            <p>This is where the cloud garden is.</p>
            <a href="vapes.php">Learn more ></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Subscribe section -->
    <section id="subscribe" class="subscribe text-center">
      <div class="container pt-5 pb-5">
        <h3>Sign up to receive our latest and greatest offers</h3>
        <p class="mb-4">10% off any products coupon inside.</p>
        <input type="email" id="email" name="email" placeholder="Email address" />
        <p class="mb-0 mt-2">Subscribe to receive <a href="#">more information</a></p>
      </div>
    </section>

    <footer class="footer">
      <div class="container d-flex flex-column flex-sm-row align-items-start justify-content-sm-between pt-5">
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

    <!-- Age verification -->
    <div class="age-verification-overlay position-fixed">
      <div class="age-verification-popup text-center d-flex align-content-center align-items-center justify-content-center flex-column flex-nowrap position-absolute p-5">
        <div>
          <div>
            <p>To access this website, you must be over 18 years of age.</p>
          </div>
          <div>
            <a class="age-verification-btn btn age-verification-btn-yes" href="#">Yes, I'm over 18 years old</a>
          </div>
          <div>
            <a class="age-verification-btn grey age-verification-btn-no" href="https://hellosehat.com/parenting/kesehatan-anak/penyakit-pada-anak/bahaya-merokok-sejak-kecil-anak-remaja/">I'm under 18 years old.</a>
          </div>
        </div>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>
<?php } ?>