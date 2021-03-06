<?php 
//abrimos la sesión
session_start();
 
//Si la variable sesión está vacía
if (!isset($_SESSION['administrador'])) 
{
   /* nos envía a la siguiente dirección en el caso de no poseer autorización */
   header("location:../index.php"); 
}
$user=$_SESSION['administrador'];

$sql="SELECT * FROM administrador where id=$user"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                    <li><a href="">Hola <?php echo $user ?></a></li>
                    <li><a href="/Tienda/administrador/gestion.php">Gestion</a></li>
                    </ul>
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
                        <a href="/Tienda/administrador/cerrar.php"><p><span><i class="fa fa-pencil"></i></span>Cerrar Sesión</p></a>
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
                    <a href="/Tienda/administrador/index.php"><h2>TSO</h2></a>
                   </div>
                </div>
                <div class="col-md-7">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="/Tienda/administrador/index.php">INICIO</a></li>
                      <li><a href="/Tienda/administrador/nosotros.php">NOSOTROS</a></li>
                      <li><a href="/Tienda/administrador/contacto.php">CONTACTO</a></li>
                      <li><a href="/Tienda/administrador/productos.php">PRODUCTOS</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="cart">
                        <p><i class="fa fa-cart-arrow-down"></i><sup>0</sup> &#36;&nbsp;&nbsp;0.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
</header>
<section class="blog_slider">
   <div class="blog_overlay"></div>
    <img src="img/blog-slider.jpg" alt="Blog Slider">
    <h2>BLOG</h2>
</section>
<section class="blog-slide-text">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
               <div class="b-slide-text">
               <div class="row">
                    <div class="col-md-5">
                        <div class="b-slide">
                            <img src="img/blog-slide-1.jpg">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="b-text">
                            <h2> Is simply dummy text of the printing </h2>
                            <p><span><i class="fa fa-calendar" aria-hidden="true"></i>August 03,2016</span><span><i class="fa fa-comment" aria-hidden="true"></i>4 comments</span>
</p>
                       <h4>been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it is simply dummy text of the printing and typesetting industry. Lorem Ipsum has </h4>
                       <a href="#" class="read-more"> READ MORE</a>
                        </div>
                    </div>
                </div>
               </div>
               <div class="b-slide-text">
               <div class="row">
                    <div class="col-md-5">
                        <div class="b-slide">
                            <img src="img/blog-slide-2.jpg">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="b-text">
                            <h2> Is simply dummy text of the printing </h2>
                            <p><span><i class="fa fa-calendar" aria-hidden="true"></i>August 03,2016</span><span><i class="fa fa-comment" aria-hidden="true"></i>4 comments</span>
</p>
                       <h4>been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it is simply dummy text of the printing and typesetting industry. Lorem Ipsum has </h4>
                       <a href="#" class="read-more"> READ MORE</a>
                        </div>
                    </div>
                </div>
               </div>
                <div class="b-slide-text">
               <div class="row">
                    <div class="col-md-5">
                        <div class="b-slide">
                            <img src="img/blog-slide-3.jpg">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="b-text">
                            <h2> Is simply dummy text of the printing </h2>
                            <p><span><i class="fa fa-calendar" aria-hidden="true"></i>August 03,2016</span><span><i class="fa fa-comment" aria-hidden="true"></i>4 comments</span>
</p>
                       <h4>been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it is simply dummy text of the printing and typesetting industry. Lorem Ipsum has </h4>
                       <a href="#" class="read-more"> READ MORE</a>
                        </div>
                    </div>
                </div>
               </div>
                <div class="b-slide-text">
               <div class="row">
                    <div class="col-md-5">
                        <div class="b-slide">
                            <img src="img/blog-slide-4.jpg">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="b-text">
                            <h2> Is simply dummy text of the printing </h2>
                            <p><span><i class="fa fa-calendar" aria-hidden="true"></i>August 03,2016</span><span><i class="fa fa-comment" aria-hidden="true"></i>4 comments</span>
</p>
                       <h4>been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it is simply dummy text of the printing and typesetting industry. Lorem Ipsum has </h4>
                       <a href="#" class="read-more"> READ MORE</a>
                        </div>
                    </div>
                </div>
               </div>
                
            </div>
            <div class="col-md-3">
                <div class="blog-sidebar">
                               <h2>Recent Post</h2>
                        <div class="resent-post">
                            <div class="resent-post-single">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="img/man.jpg" alt="">
                                        <div class="text">
                                            <h3>Is simply dummy text</h3>
                                            <p>September 6, 2016</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resent-post-single">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="img/man.jpg" alt="">
                                        <div class="text">
                                            <h3>Is simply dummy text</h3>
                                            <p>September 6, 2016</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resent-post-single">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="img/man.jpg" alt="">
                                        <div class="text">
                                            <h3>Is simply dummy text</h3>
                                            <p>September 6, 2016</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="blog-sidebar">
                           <h2>Categories</h2>
                    <div class="categorie">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Advice (8)</p>
                                <p>Articles (20)</p>
                                <p>Comments (10)</p>
                                <p>Design (5)</p>
                                <p>Other (3)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-sidebar">
                           <h2>Tags</h2>
                    <div class="tags">
                        <div class="row">
                            <div class="col-md-12">
                                <span>bussiness</span>
                                <span>bussiness</span>
                                <span>fun</span>
                                <span>lorem</span>
                                <span>performence</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="centre">
                            <ul class="pagination pagination-lg">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script>  
<script src="js/active.js"></script>  
</body>
</html>