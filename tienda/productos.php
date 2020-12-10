<?php
include 'productos/global/config.php';
include 'productos/global/conexion.php';
include 'productos/carrito2.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
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
                      <li><a href="/Tienda/productos.php">PRODUCTOS</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="cart">
                        <a href="/Tienda/productos/mostrarCarrito.php"><i class="fa fa-cart-arrow-down"></i><sup>0</sup> &#36;&nbsp;&nbsp;0.00</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header-catagory">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="col-md-12">
                    <form METHOD="POST" ACTION="">
                        <input name="buscar" type="text" placeholder="Busca Un Producto">
                        <button Type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</section>
</header>
<section class="header-feahion">
    <img src="img/header-image.jpg" alt="">
    <div class="header-text">
        <h4>ENVÍO GRATIS EN PEDIDOS SUPERIORES $100!</h4>
        <h3>NUEVOS PRODUCTOS <br> EN STOCK!</h3>
    </div>
</section>
<?php if($mensaje!=""){?>
    <div class="alert alert-primary">
    <?php
    echo $mensaje;
    ?>

    <a href="productos/mostrarCarrito.php" class="badge badge-succes">ver carrito</a>
    </div>
    <?php }?>

    <div class="row">
    <?php
    $sentencia= $pdo->prepare("SELECT * FROM producto");
    $sentencia->execute();
    $listaProductos= $sentencia->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <?php foreach($listaProductos as $producto){ ?>
        <div class="container">
        <div class="container" align="center">
        <div class="col-3">
            <div class="card">
                <img  title="<?php echo $producto['nombre']; ?>" class="card-img-top" src="<?php echo $producto['imagen'];?>" alt="<?php echo $producto['nombre']; ?> " data-toggle="popover" data-trigger="hover" data-content="<?php  echo $producto['descripcion'] ?>" height="317px" >
                <div class="card-body">
                    <span><?php echo $producto['nombre']; ?></span>
                    <h5 class="card-title">$ <?php echo $producto['precio']; ?></h5>
                    <p class="card-text"></p>
                    <form action="" method="post"  >
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD, KEY) ; ?>">
                        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'],COD, KEY) ;?>">
                        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio'],COD, KEY); ?>">
                        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD, KEY); ?>">
                        
                        <button type="submit" name="btnAccion"  class="btn btn-primary" value="Agregar">añadir al carro</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
<br>


<?php } ?>
    

<footer>
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Productos</h2>
                    <a href="#">
                        <p><i class="fa fa-circle" aria-hidden="true"></i>No Se</p>
                    </a>
                    <a href="#">
                        <p><i class="fa fa-circle" aria-hidden="true"></i>Aun Sigo sin saber</p>
                    </a>
                    <a href="#">
                        <p><i class="fa fa-circle" aria-hidden="true"></i>Como es la vida todavia no se</p>
                    </a>
                </div>

                <div class="col-md-4">
                    <div class="footer-contact">
                        <h2>Contacto</h2>
                        <a href="#">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>Moravia , Medellín</p>
                        </a>
                        <a href="#">
                            <p><i class="fa fa-phone" aria-hidden="true"></i>+57 301 279 53 91</p>
                        </a>
                        <a href="#">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i>tso@gmail.com</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="footer_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="copy_txt">
                        <p>Copyright © 2020 Diseñado por <span>Los Mongolines</span></p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="footer_logo">
                        <img src="img/master-card.png">
                        <img src="img/paypal.png">
                        <img src="img/visa.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.bxSlider.js"></script>
<script>
   
    </script>  
<script src="js/active.js"></script>  
</body>
</html>