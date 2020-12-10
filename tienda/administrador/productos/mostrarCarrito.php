<?php
include 'global/config.php';
include 'carrito2.php';

// include 'templates/cabecera.php';

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
<br>
<h3>Lista del carro</h3>
<?php if(!empty($_SESSION['CARRITO'])){ ?>
<table class="table table-light table-bordered">
    <tbody>
        <tr>
            <th width="40%">Descripcion</th>
            <th width="15%">cantidad</th>
            <th width="20%">precio</th>
            <th width="20%">total</th>
            <th width="5%">--</th>
        </tr>
        <?php $total=0; ?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto) { ?>
        <tr>
        <td width="40%"><?php echo $producto['NOMBRE']?></td>
            <td width="15%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
            <td width="20%" class="text-center"><?php echo $producto['PRECIO']?></td>
            <td width="20%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
            <td width="5%">
            <form action="" method="post">

                <input type="hidden" name="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);  ?>">
                <button class="btn btn-danger" type="submit" name="btnAccion" value="Borrar">Eliminar</button></td>
            </form>    
        </tr>
        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
        <?php } ?>
       
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
            <td></td>
        </tr>

        <tr>
            <td colspan="5">
                <form action="pagar.php" method="post">
                    <div class="alert alert-success" role="alert">
                    <div class="form-group">
                    <label for="my-input">Correo:</label>
                    <input id="email" class="form-control" type="email" name="email"
                    placeholder="Ingresa correo" required>
                </div>
                    <small id="emailHelp" class="form-text text-muted">Se enviara a este correo</small>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnAccion" value="Pagar">Pagar>> </button>

                </form>
            </td>
        </tr>


    </tbody>
</table>
<?php }else{ ?>
<div class="alert alert-succes">
    no has agregado productos aun
</div>

<?php }?>

<?php
// include 'templates/pie.php';
?>

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