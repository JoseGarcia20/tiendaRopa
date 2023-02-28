<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>

    <link rel="stylesheet" href="./css/estilosShop.css">
</head>

<body>
  <header class="main-header">
    <div class="container container--flex">
      <div class="main-header__container">
        <h1 class="main-header__title">ONLY WOMEN</h1>
        <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
        <nav class="main-nav" id="main-nav">
          <ul class="menu">
            <li class="menu__item"><a href="index.php" class="menu__link">HOME</a></li>
            <li class="menu__item"><a href="About.php" class="menu__link">ABOUT</a></li>
            <li class="menu__item"><a href="Shop.php" class="menu__link">SHOP</a></li>
            <li class="menu__item"><a href="" class="menu__link">VIDEO</a></li>
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
              </div>
            </div>
            <div class="slider__section">
              <img src="./img/slider3.jpg" alt="" class="slider__img">
              <div class="slider__content">
                <h2 class="slider__title">Calzado desde $100.000</h2>
                <p class="slider__txt">Pregunta por nuestras ofertas!!</p>
              </div>
            </div>
            <div class="slider__section">
              <img src="./img/gafas11.jpg" alt="" class="slider__img">
              <div class="slider__content">
                <h2 class="slider__title">Gafas oscuras</h2>
                <p class="slider__txt">Nueva colección!!</p>
              </div>
            </div>
            <div class="slider__section">
              <img src="./img/slider2.jpg" alt="" class="slider__img">
              <div class="slider__content">
                <h2 class="slider__title">Chaquetas Parka</h2>
                <p class="slider__txt">Las mejores del mercado!!</p>
              </div>
            </div>
          </div>
          <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
          <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
        </div>

        <main class="main">
          <div class="container">
            <h2 class="main-title">Nuevas tendencias</h2>
            <section class="container-products">
              <div class="productNew">
                <img src="./img/fashion-g87f4aa6c8_1280.jpg" alt="" class="product__img">
                <div class="product__description">
                  <h3 class="product__title">Sombrero - UNI</h3>
                  <span class="product__price">$49.900</span>
                </div>
                <i class="product__icon fas fa-cart-plus"></i>
              </div>
              <div class="product">
                <img src="./img/blusa.jpg" alt="" class="product__img">
                <div class="product__description">
                  <h3 class="product__title">Blusa Unicolor</h3>
                  <span class="product__price">$69.900</span>
                </div>
                <i class="product__icon fas fa-cart-plus"></i>
              </div>
              <div class="productNew">
                <img src="./img/braga.jpg" alt="" class="product__img">
                <div class="product__description">
                  <h3 class="product__title">Braga mujer</h3>
                  <span class="product__price">$100.000</span>
                </div>
                <i class="product__icon fas fa-cart-plus"></i>
              </div>
              <div class="product">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b6/Gafas_de_sol_Rayban_Aviador.jpg" alt="" class="product__img">
                <div class="product__description">
                  <h3 class="product__title">RAY-BAN</h3>
                  <span class="product__price">$26.000</span>
                </div>
                <i class="product__icon fas fa-cart-plus"></i>
              </div>
              </section>
              <br>
              <section class="container-products">
                <div class="product">
                  <img src="./img/buso.jpg" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title">Chaqueta parka</h3>
                    <span class="product__price">$189.000</span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                  <img src="./img/camisa.jpg" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title">Camiseta estampada</h3>
                    <span class="product__price">$29.000</span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="productNew">
                  <img src="./img/chaqueta.jpg" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title">Chaqueta unicolor</h3>
                    <span class="product__price">$109.000</span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                  <img src="./img/slider2.jpg" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title">Chaqueta acolchada</h3>
                    <span class="product__price">$220.000</span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                </section>
                <br>
                <section class="container-products">
                    <div class="productNew">
                      <img src="./img/sobrero.jpg" alt="" class="product__img">
                      <div class="product__description">
                        <h3 class="product__title">Sombrero panama</h3>
                        <span class="product__price">$29.000</span>
                      </div>
                      <i class="product__icon fas fa-cart-plus"></i>
                    </div>
                    <div class="product">
                      <img src="./img/vestido2.jpg" alt="" class="product__img">
                      <div class="product__description">
                        <h3 class="product__title">Blusa unicolor</h3>
                        <span class="product__price">$60.000</span>
                      </div>
                      <i class="product__icon fas fa-cart-plus"></i>
                    </div>
                    <div class="product">
                      <img src="./img/vestidoBaño.jpg" alt="" class="product__img">
                      <div class="product__description">
                        <h3 class="product__title">Brasilera Baño Mujer</h3>
                        <span class="product__price">$63.000</span>
                      </div>
                      <i class="product__icon fas fa-cart-plus"></i>
                    </div>
                    <div class="product">
                      <img src="./img/vestino.jpg" alt="" class="product__img">
                      <div class="product__description">
                        <h3 class="product__title">Vestido corto</h3>
                        <span class="product__price">$79.000</span>
                      </div>
                      <i class="product__icon fas fa-cart-plus"></i>
                    </div>
                    </section>
                    <br>
                    <section class="container-products">
                        <div class="product">
                          <img src="./img/gafas11.jpg" alt="" class="product__img">
                          <div class="product__description">
                            <h3 class="product__title">Farenheit (lentes)</h3>
                            <span class="product__price">$49.000</span>
                          </div>
                          <i class="product__icon fas fa-cart-plus"></i>
                        </div>
                        <div class="productNew">
                          <img src="./img/deportiva.jpg" alt="" class="product__img">
                          <div class="product__description">
                            <h3 class="product__title">Conjunto deportivo</h3>
                            <span class="product__price">$78.000</span>
                          </div>
                          <i class="product__icon fas fa-cart-plus"></i>
                        </div>
                        <div class="product">
                          <img src="./img/deportiva2.jpg" alt="" class="product__img">
                          <div class="product__description">
                            <h3 class="product__title">Conjunto deportivo unicolor</h3>
                            <span class="product__price">$89.000</span>
                          </div>
                          <i class="product__icon fas fa-cart-plus"></i>
                        </div>
                        <div class="product">
                          <img src="./img/tenis.jpg" alt="" class="product__img">
                          <div class="product__description">
                            <h3 class="product__title">Converse Bota</h3>
                            <span class="product__price">$169.000</span>
                          </div>
                          <i class="product__icon fas fa-cart-plus"></i>
                        </div>
                        </section>
                        <br>
                                    <section class="container-products">
              <div class="product">
                <img src="./img/zapatos1.jpg" alt="" class="product__img">
                <div class="product__description">
                  <h3 class="product__title">VIZZANO</h3>
                  <span class="product__price">$179.000</span>
                </div>
                <i class="product__icon fas fa-cart-plus"></i>
              </div>
              <div class="productNew">
                <img src="./img/botas.jpg" alt="" class="product__img">
                <div class="product__description">
                  <h3 class="product__title">Botas Sybilla</h3>
                  <span class="product__price">$120.000</span>
                </div>
                <i class="product__icon fas fa-cart-plus"></i>
              </div>
              </section>
              <br>
          </div>
        </main>
        <br><br>
        <footer class="main-footer">
          <div class="footer__section">
            <h2 class="footer__title">Sobre Only Women</h2>
            <p class="footer__txt">GOOGLES es la marca colombiana que aplica las últimas tendencias de la moda en prendas de vestir pensadas 
                especialmente en la silueta de la mujer latina sofisticada y con estilo.</p>
          </div>
          <div class="footer__section">
            <h2 class="footer__title">Ubicación</h2>
            <p class="footer__txt">Calle 17 #3w-65 local 105</p>
            <p class="footer__txt">CC La Florida local 10</p>
            <h2 class="footer__title">Contáctenos</h2>
            <p class="footer__txt">Teléfono: 607 655 11 81</p>
            <p class="footer__txt">Email: tiendaVirtual@gmail.com</p>
          </div>
          <div class="footer__section">
            <h2 class="footer__title">Menú</h2>
            <a href="index.php" class="footer__link">Home</a>
            <a href="About.php" class="footer__link">About</a>
            <a href="login.php" class="footer__link">Login</a>
            <a href="Shop.php" class="footer__link">Shop</a>
            <a href="" class="footer__link">Video</a>
          </div>
          <div class="footer__section">
            <h2 class="footer__title">Registro</h2>
            <p class="footer__txt">Si quieres tener mas información de nosotros y nuestros clientes, registrate y nos pondremos en contacto...</p>
            <p class="footer__txt">Si quieres hacer parte de nuestro equipo de trabajo, inscribete y nos pondremos en contacto.</p>
            <a href="login.php" class="footer__link">Login</a>
            <a href="registroClientes.php" class="footer__link">Registro Clientes</a>
            <a href="registroEmp.php" class="footer__link">Registro Empleados</a>
          </div>
          <p class="copy">© 2022 Goggles. José Jesús Garcia Rojas | Parcial Corte 3</p>
        </footer>
  
        <script src="js/estilos.js"></script>
  </body>

</html>