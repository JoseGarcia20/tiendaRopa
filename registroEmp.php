<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Empleados</title>

    <link rel="stylesheet" href="./css/estiloRegistro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
       
        <main id="main" class="d-flex justify-content-center flex-column align-items-center p-3 m-3">

            <form class="d-flex flex-column p-1 g-3 needs-validation m-3">
        
              <div id="main-header__title" class="p-4 d-flex justify-content-center align-items-center" ><H1>Registro Empleados</H1></div>
        
              <div class="formulario">
                <div class="mb-3 form-floating">
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo">
                  <label for="nombre" class="form-label p-3">Nombre Completo: </label>
              </div>
              <div class="mb-3 form-floating">
                  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos">
                  <label for="apellido" class="form-label p-3">Apellidos: </label>
              </div>
              <div class="mb-3 form-floating">
                  <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com">
                  <label for="correo" class="form-label p-3">Email: </label>
              </div>
              <div class="mb-3 form-floating">
                  <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
                  <label for="fechaNacimiento" class="form-label p-3">Fecha Nacimiento: </label>
              </div>
              <div class="mb-3 form-floating">
                  <input type="number" class="form-control" id="telefono" name="Celular" placeholder="123456">
                  <label for="telefono" class="form-label p-3">Celular: </label>
              </div>
              <div class="mb-3 form-floating">
                  <input type="number" class="form-control" id="telefono" name="telefono" placeholder="123456">
                  <label for="telefono" class="form-label p-3">Telefono: </label>
              </div>
              <div class="mb-3">
                  <label for="experiencia" class="form-label" >Experiencia laboral</label>
                  <textarea name="experiencia" class="form-control" id="experiencia" rows="3"></textarea>
              </div>
              <div class="mb-3" class="form-floating">
                <label for="contra" class="form-label">Nueva contraseña: </label>
                <input type="password" class="form-control" id="contra" name="contra">
            </div>
            <div class="mb-3" class="form-floating" >
                <label for="contra2" class="form-label">Confirmar contraseña: </label>
                <input type="password" class="form-control" id="contra2" name="contra2">
            </div><br>
              <br>
              <div class="d-flex mb-3">
                  <input type="submit" class="form-control btn-outline-dark me-4" id="enviarDatos" name="enviarDatos" value="Enviar Datos">
                  <input type="reset" class="form-control btn btn-dark" id="borrarDatos" name="borrarDatos" value="Borrar Datos">
              </div>
              </div>
           </form>    
           </main>

        <footer id="mf" class="main-footer p-3">
            <div class="footer__section">
              <h2 id="ft" class="footer__title">Sobre Only Women</h2>
              <p id="ftx" class="footer__txt">Only Women es la marca colombiana que aplica las últimas tendencias de la moda en prendas de vestir pensadas 
                  especialmente en la silueta de la mujer latina sofisticada y con estilo.</p>
            </div>
            <div class="footer__section">
              <h2 id="ft" class="footer__title">Ubicación</h2>
              <p id="ftx" class="footer__txt">Calle 17 #3w-65 local 105</p>
              <p id="ftx" class="footer__txt">CC La Florida local 10</p>
              <h2 id="ft" class="footer__title">Contáctenos</h2>
              <p id="ftx" class="footer__txt">Teléfono: 607 655 11 81</p>
              <p id="ftx" class="footer__txt">Email: tiendaVirtual@gmail.com</p>
            </div>
            <div class="footer__section">
              <h2 id="ft" class="footer__title">Menú</h2>
              <a href="index.php" id="footer__link">Home</a>
              <a href="About.php" id="footer__link">About</a>
              <a href="login.php" id="footer__link">Login</a>
              <a href="Shop.php" id="footer__link">Shop</a>
              <a href="" id="footer__link">Video</a>
            </div>
            <div class="footer__section">
              <h2 id="ft" class="footer__title">Registro</h2>
              <p id="ftx" class="footer__txt">Si quieres tener mas información de nosotros y nuestros clientes, registrate y nos pondremos en contacto...</p>
              <p id="ftx" class="footer__txt">Si quieres hacer parte de nuestro equipo de trabajo, inscribete y nos pondremos en contacto.</p>
              <a href="login.php" id="footer__link">Login</a>
              <a href="registroClientes.php" id="footer__link">Registro Clientes</a>
              <a href="registroEmp.php" id="footer__link">Registro Empleados</a>
            </div>
            <p class="copy">© 2022 Goggles. José Jesús Garcia Rojas | Parcial Corte 3</p>
          </footer>
</body>

</html>