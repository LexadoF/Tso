<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carro</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery.bxSlider.css">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>



<header>
<section class="header-top">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                   
                   </div>
                <div class="col-md-4">
                    <div class="icon">
                       <a href="#"><i class="fa fa-facebook"></i></a>
                       <a href="#"><i class="fa fa-twitter"></i></a>
                       <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="a-right">
                        <a href="/Tienda/login.php"><p><span><i class="fa fa-user"></i></span>Iniciar Sesión</p></a>
                        <a href="/Tienda/registrarse.php"><p><span><i class="fa fa-pencil"></i></span>Registrarse</p></a>
                   </div>
                </div>
            </div>
        </div>
</section>

<div class="clear"></div>
<section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <div class="logo">
                    <a href="/Tienda/index.php"><h2>TSO</h2></a>
                   </div>
                </div>
                <div class="col-md-7">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="/Tienda/index.php">INICIO</a></li>
                      <li><a href="/Tienda/nosotros.php">NOSOTROS</a></li>
                      <li><a href="/Tienda/contacto.php">CONTACTO</a></li>
                      <li><a href="/Tienda/noticias.php">NOTICIAS</a></li>
                      <li><a href="/Tienda/productos.php">PRODUCTOS</a></li>
                    </ul>
                </div>
                <li class="nav-item active">
                    <a class="fa fa-cart-arrow-down" href="productos/mostrarCarrito.php">carrito &#36;&nbsp;&nbsp; (
                        <?php
                         echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    
                    ?> )</a>
                </li>
            </div>
        </div>
    </section>

</header>
<section class="header-feahion">
    <img src="img/header-image.jpg" alt="">
    <div class="header-text">
        <h4>FREE SHIPPING ON ORDERS OVER $100!</h4>
        <h3>HOT NEW RANGE <br> IN STOCK!</h3>
    </div>
</section>

    <div class="container">