<!doctype html>
<html lang="es">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap prueba</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
</head>
  
<body>
    <h1>Pagina de prueba bootstrap</h1>
    <script src="assets/js/bootstrap.bundle.min.js" ></script>

<!--Carousel-->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/nissan.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nissan Skyline GTR R34</h5>
        <p>Uno de los preferidos de muchos fans de la potencia japonesa.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/toyota.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Toyota Supra MK4</h5>
        <p>potencia y deportividad al alcance del pie y por poco dinero.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/mitsubishi.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mitsubishi Lancer Evo 9</h5>
        <p>Una mezcla de elegancia y potencia.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--end carousel-->

</body>

</html>