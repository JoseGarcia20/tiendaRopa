<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mattelsa</title>
    <link rel="stylesheet" href="css/estilos.css">
    
</head>

<body>
  <header class="main-header">
    <div class="container container--flex">
      <div class="main-header__container">
        <h1 class="main-header__title">MATTELSA</h1>
        <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
        <nav class="main-nav" id="main-nav">
          <ul class="menu">
            <li class="menu__item"><a href="index.php" class="menu__link">HOME</a></li>
            <li class="menu__item"><a href="About.php" class="menu__link">ABOUT</a></li>
            <li class="menu__item"><a href="Shop.php" class="menu__link">SHOP</a></li>
            <li class="menu__item"><a href="https://youtu.be/T5d8f_8E_gE" class="menu__link">VIDEO</a></li>
            <li class="menu__item"><a href="login.php" class="menu__link">LOGIN</a></li>
          </ul>
        </nav>
      </div>
      <div class="main-header__container">
      </div>
      <div class="main-header__container">
        <a href="" class="main-header__link"><i class="fas fa-user"></i></a>
        <a href="login.php" class="main-header__btn">Mis Productos <i class="fas fa-shopping-cart"></i></a>
        <input type="search" class="main-header__input" placeholder="Buscar productos"><i class="fas fa-search"></i>
      </div>
    </div>
  </header>

      <div class="container-slider">
        <div class="slider" id="slider">
          <div class="slider__section">
            <img src="./img/slider1.jpg" alt="" class="slider__img">
            <div class="slider__content">
              <h2 class="slider__title">Nueva colección</h2>
              <p class="slider__txt">Ropa para todo tipo de estilos..</p>
              <a href="Shop.php" class="btn-shop">SHOP NOW</a>
            </div>
          </div>
          <div class="slider__section">
            <img src="./img/slider3.jpg" alt="" class="slider__img">
            <div class="slider__content">
              <h2 class="slider__title">Calzado desde $100.000</h2>
              <p class="slider__txt">Pregunta por nuestras ofertas!!</p>
              <a href="Shop.php" class="btn-shop">SHOP NOW</a>
            </div>
          </div>
          <div class="slider__section">
            <img src="./img/gafas11.jpg" alt="" class="slider__img">
            <div class="slider__content">
              <h2 class="slider__title">Gafas oscuras</h2>
              <p class="slider__txt">Nueva colección!!</p>
              <a href="Shop.php" class="btn-shop">SHOP NOW</a>
            </div>
          </div>
          <div class="slider__section">
            <img src="./img/slider2.jpg" alt="" class="slider__img">
            <div class="slider__content">
              <h2 class="slider__title">Chaquetas Parka</h2>
              <p class="slider__txt">Las mejores del mercado!!</p>
              <a href="Shop.php" class="btn-shop">SHOP NOW</a>
            </div>
          </div>
        </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
      </div>
      <main class="main">
        <div class="container">
          <h2 class="main-title">Nueva colección!!</h2>
          <section class="container-products">
            <div class="product">
             <a href="Shop.php"><img src="./img/sobrero.jpg" alt="" class="product__img"></a>
              <div class="product__description">
                <h3 class="product__title">Sombrero panama</h3>
                <span class="product__price">$29.000</span>
              </div>
              <i class="product__icon fas fa-cart-plus"></i>
            </div>
            <div class="product">
             <a href="Shop.php"><img src="./img/deportiva.jpg" alt="" class="product__img"></a> 
              <div class="product__description">
                <h3 class="product__title">Conjunto deportivo</h3>
                <span class="product__price">$78.000</span>
              </div>
              <i class="product__icon fas fa-cart-plus"></i>
            </div>
            <div class="product">
              <a href="Shop.php"><img src="./img/chaqueta.jpg" alt="" class="product__img"></a>
              <div class="product__description">
                <h3 class="product__title">Chaqueta unicolor</h3>
                <span class="product__price">$109.000</span>
              </div>
              <i class="product__icon fas fa-cart-plus"></i>
            </div>
            <div class="product">
              <a href="Shop.php"><img src="./img/botas.jpg" alt="" class="product__img"></a>
              <div class="product__description">
                <h3 class="product__title">Botas Sybilla</h3>
                <span class="product__price">$120.000</span>
              </div>
              <i class="product__icon fas fa-cart-plus"></i>
            </div>
            </section>
          <section class="container__testimonials">
            <h2 class="section__title">Galeria de estilos</h2>
            <h3 class="testimonial__title">¿Qué estilo de ropa va mejor con tu personalidad?</h3>
            <p class="testimonial__txt">Para definir tu estilo personal debes conocer tus gustos, tu música favorita, 
              tu estilo de vida y detallar qué es lo que buscas cuando compras o eliges una prenda. Es decir, si compras ropa
               para estar cómoda, elegante, llamativa, casual, sexy, etc...</p>
            <p class="testimonial__txt">En Only Women te ayudamos a buscar tu estilo ideal, mira estos videos informativos y decide!</p>
            <br><br>
          <div class="container-editor">
            <div class="editor__item">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/k_8LVhGDQwY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <p class="editor__circle">ESTILOS DE VESTIR - MODA</p>
            </div>
            <div class="editor__item">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/IpIw78ZN-aQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <p class="editor__circle">EXPRESS YOUR STYLE NOW</p>
            </div>
          </div>
        </section>
          <br><br><br><br><br><br><br><br>
          <section class="container-tips">
            <div class="tip">
              <i class="far fa-hand-paper"></i> 
              <h2 class="tip__title">Satisfacción garantizada</h2>
              <p class="tip__txt">Estamos comprometidos con hacer que la belleza de la moda sea accesible a todo el mundo</p>
              <a href="Shop.php" class="btn-shop">SHOP NOW</a>
            </div>
            <div class="tip">
             <i class="fas fa-rocket"></i>
              <h2 class="tip__title">Precios accesibles!</h2>
              <p class="tip__txt">Recibe 15% en tu primera compra. Comunícate a uno de los numeros registrados y has tu pedido!!</p>
              <p class="tip__txt"></p>
              <a href="Shop.php" class="btn-shop">SHOP NOW</a>
            </div>
            <div class="tip">
              <i class="fas fa-cog"></i>
              <h2 class="tip__title">Diferentes opciones</h2>
              <p class="tip__txt">Creemos que la ropa que usamos refleja nuestras personalidades y queremos capacitar a todos para que exploren y expresen su individualidad.</p>
              <a href="Shop.php" class="btn-shop">SHOP NOW</a>
            </div>
          </section>
        </div>
      </main>
      <footer class="main-footer">
        <div class="footer__section">
          <h2 class="footer__title">Sobre Mattelsa</h2>
          <p class="footer__txt">Mattelsa es la marca colombiana que aplica las últimas tendencias de la moda en prendas de vestir pensadas 
              especialmente en la silueta de la mujer latina sofisticada y con estilo.</p>
        </div>
        <div class="footer__section">
          <h2 class="footer__title">Ubicación</h2>
          <p class="footer__txt">Calle 17 #3w-65 local 105</p>
          <p class="footer__txt">CC La Florida local 10</p>
          <h2 class="footer__title">Contáctenos</h2>
          <p class="footer__txt">Teléfono: 652 21 45</p>
          <p class="footer__txt">Email: Mattelsa@gmail.com</p>
        </div>
        <div class="footer__section">
          <h2 class="footer__title">Menú</h2>
          <a href="index.php" class="footer__link">Home</a>
          <a href="About.php" class="footer__link">About</a>
          <a href="login.php" class="footer__link">Login</a>
          <a href="Shop.php" class="footer__link">Shop</a>
          <a href="https://youtu.be/T5d8f_8E_gE" class="footer__link">Video</a>
        </div>
        <div class="footer__section">
          <h2 class="footer__title">Registro</h2>
          <p class="footer__txt">Si quieres tener mas información de nosotros y nuestros clientes, registrate y nos pondremos en contacto...</p>
          <p class="footer__txt">Si quieres hacer parte de nuestro equipo de trabajo, inscribete y nos pondremos en contacto.</p>
          <a href="login.php" class="footer__link">Login</a>
          <a href="registroClientes.php" class="footer__link">Registro Clientes</a>
          <a href="registroEmp.php" class="footer__link">Trabaja con nosotros</a>
        </div>
        <p class="copy">© 2022 Mattelsa. José Jesús Garcia Rojas | Parcial Corte 3</p>
      </footer>

      <script src="js/estilos.js"></script>
</body>
</html>