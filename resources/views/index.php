<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Интернет-магазин одежды</title>
</head>
<body>
    <div id="menu">
    <header class="site-header sticky-top py-3 shadow p-3 mb-0 bg-body rounded">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 d-none d-md-inline-block" href="#">О нас</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Конструктор</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Каталог
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../views/katalog.php">Тут</a></li>
                  <li><a class="dropdown-item" href="#">Что-то</a></li>
                  <li><a class="dropdown-item" href="#">Должно быть</a></li>
                </ul>
              </div>
            </div>
        </nav>
    </header>
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/5.jpg" alt="" width="100%" height="100%">
  
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-light" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
         <img src="../img/4.jpg" alt="" width="100%" height="100%">
  
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-light" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
         <img src="../img/3.jpg" alt="" width="100%" height="100%">
  
         <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-light" href="#">Learn more</a></p>
          </div>
        </div>
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
    <script src="../css/jquery-3.6.1.js"></script>
    <script src="../css/bootstrap.bundle.min.js"></script>
</body>
</html>