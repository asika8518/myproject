<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_podrobnee.css">
    <title>Podrobnee</title>
</head>
<body>

    
<div class="card mb-5 mt-5 m-5 " style="max-width: 1500px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../img/tolstovka.jpg" class="img-fluid rounded-start h-170 w-150" alt="...">
    </div>
    

    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">Толстовка</h5>
        <p class="text-decoration-underline">7 000 тг</p>
        <p class="card-text mb-5">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

       
       
        <p class="card-text"><small class="text-muted">    <form method="post" name="forma" action="">
          <label> <h3 class="h3">Размер:</label></h3>
          <select name="size" class="btn btn-outline-secondary">
              <option value="1">XS</option>
              <option value="2">S</option>
              <option value="3">M</option>
              <option value="4">L</option>
              <option value="5">XL</option>
          </select><br/><br/>
          <label> <h3 class="h3">Цвет:</label></h3>
          <select name="color" class="btn btn-outline-secondary mb-3">
              <option value="1">Розовый</option>
              <option value="2">Голубой</option>
          </select><br/><br/>
          <div class="d-grid gap-2 mx-50">
          <input type="submit" name="vich" value="Купить" class="bth" onclick="alert('Товар был добавлен в корзину');">

          
        </div>
      </form></small></p>
      </div>
    </div>
  </div>
</div>

<h5 class="title">Еще из это категории:</h5>


<div class="container text-center mb-5">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem; height: 400px;">
          <img style="width: 286px; height: 200px;" src="../img/tolstovka.jpg" class="card-img-top" alt="error">
          <div class="card-body">
            <h5 class="card-title">Толстовка</h5>
            <p class="card-text">Цена: 8000тг</p>
            <a href="..//views/korzina.html" style="background-color: rgb(204, 163, 135); border-color: rgb(204, 163, 135);" class="btn btn-primary">Купить</a>
          </div>
        </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem; height: 400px">
          <img style="width: 286px; height: 200px;" src="..//img/top.jpg" class="card-img-top" alt="error">
          <div class="card-body">
            <h5 class="card-title">Топ</h5>
            <p class="card-text">Цена: 3000тг</p>
            <a href="..//views/korzina.html" style="background-color: rgb(204, 163, 135); border-color: rgb(204, 163, 135);" class="btn btn-primary">Купить</a>
          </div>
        </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem; height: 400px">
          <img style="width: 230px; height: 200px; margin-left: 35px;" src="..//img/bluzka.jpg" class="card-img-top" alt="error">
          <div class="card-body">
            <h5 class="card-title">Блузка</h5>
            <p class="card-text">Цена: 5000тг</p>
            <a href="..//views/korzina.html" style="background-color: rgb(204, 163, 135); border-color: rgb(204, 163, 135);" class="btn btn-primary">Купить</a>
          </div>
        </div>
  </div>
</div>
</body>
</html>