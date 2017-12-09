<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="http://localhost/Gdoors/resources/assets/css/theme.css" type="text/css"> 
  <title>GDoors</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Gdoors</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/GDoors/public/">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/GDoors/public/interior">Выбор Интерьера</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/GDoors/public/door">Выбор Двери</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/GDoors/public/purchase">Покупка</a>
          </li>
        </ul>
        <a class="ml-3 btn navbar-btn btn-primary" href="http://localhost/GDoors/public/bucket" style="">Корзина</a>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center opaque-overlay" style="background-image: url(http://localhost/Gdoors/resources/images/backgrounds/bg-1.jpg);">
    <div class="container py-5">
      <div class="row gradient-overlay">
        <div class="col-md-12 text-white" style="">
          <h1 class="display-3 mb-4">Каталог</h1>
          <div class="row">
            <div class="p-4 col-md-6">
              <img class="img-fluid d-block" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg"> </div>
            <div class="p-4 col-md-6">
              <h1 class="">Дверь 1</h1>
              <p class="">Описание&nbsp;Описание&nbsp;&nbsp;Описание&nbsp;
                <br>Описание&nbsp;Описание&nbsp;Описание&nbsp;
                <br>Описание</p>
              <p class="text-left">Материал:</p>
              <p class="text-left">Высота:</p>
              <p class="text-left">Ширина:</p>
              <p class="text-left">Цена:</p>
              <a href="#" class="btn btn-lg mx-1 btn-primary">В корзину</a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-11 p-4">
              <div class="row">
                @foreach ($doors as $door)
                  <div class="col-md-2 p-4">
                    <img class="img-fluid d-block" style = "max-height:130px;" src= {{ $door->image_link1 }} >
                    <h4 class="my-3">{{ $door->name }}</h4>
                  </div>
                @endforeach
              </div>
              <div class="btn-group">
                <a href="#" class="btn btn-outline-light">Категория 1</a>
                <a href="#" class="btn btn-outline-light">Категория 2</a>
                <a href="#" class="btn btn-outline-light">Категория 3</a>
                <a href="#" class="btn btn-outline-light">Категория 4</a>
              </div>
            </div>
            <div class="col-md-1 px-0 py-5">
              <div class="col-md-12 p-0">
                <a href="#" class="btn btn-outline-light"><i class="d-block fa fa-3x fa-angle-up"></i></a>
              </div>
              <div class="col-md-12 p-0">
                <a href="#" class="btn btn-outline-light"><i class="d-block fa fa-3x fa-angle-down"></i></a>
              </div>
              <div class="col-md-12 p-0">
                <a href="#" class="btn btn-outline-light"><i class="d-block fa fa-3x fa-angle-double-down"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-12 my-3">
            <a href="javascript:history.go(-1)" class="btn btn-lg mx-1 btn-secondary">Назад</a>
            <a href="http://localhost/GDoors/public/bucket" class="btn btn-lg btn-primary mx-1">Далее</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-4">
          <h2 class="mb-4 text-secondary">GDoors</h2>
          <p class="text-white">Мы занимаемся поиском&nbsp;<br>дверей Вашей мечты</p>
        </div>
        <div class="p-4 col-md-4" style="">
          <h2 class="mb-4 text-secondary">Навигация</h2>
          <ul class="list-unstyled">Главная
            <br>Каталог
            <br>Выбор двери
            <br>
            <a href="#" class="text-white">Корзина</a>
          </ul>
        </div>
        <div class="p-4 col-md-4">
          <h2 class="mb-4">Контакты</h2>
          <p>
            <a href="tel:+246 - 542 550 5462" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-phone"></i>+</a>7 (701) 465 20 71</p>
          <p>
            <a href="mailto:info@pingendo.com" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>g</a>doors@gmail.com</p>
          <p>
            <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>А</a>бая 118, Алматы</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center align-self-center">
          <div class="my-3 row">
            <div class="col-4">
              <a href="https://www.facebook.com" target="_blank"><i class="fa fa-3x fa-vk"></i></a>
            </div>
            <div class="col-4">
              <a href="https://twitter.com" target="_blank"><i class="fa fa-3x fa-whatsapp"></i></a>
            </div>
            <div class="col-4">
              <a href="https://www.instagram.com" target="_blank"><i class="fa fa-3x fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-white">© Copyright 2017 GDoors - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</body></html>