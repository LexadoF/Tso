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
<?php
// Include config file
require_once "./config.php";
 
// Define variables and initialize with empty values
$nombre = $stock = $precio = $categoria = "";
$name_err = $address_err = $salary_err = $categoria_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validar Nombre
    $input_name = trim($_POST["nombre"]);
    if(empty($input_name)){
        $name_err = "Ingresa un Nombre.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Ingresa Un Nombre Valido.";
    } else{
        $nombre = $input_name;
    }
    
    // Validar Stock
    $input_address = trim($_POST["stock"]);
    if(empty($input_address)){
        $address_err = "Por Favor Ingresa El Numero en tenencias.";     
    } else{
        $stock = $input_address;
    }
    
    // Validar precio
    $input_salary = trim($_POST["precio"]);
    if(empty($input_salary)){
        $salary_err = "Ingresa El Valor del Producto.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Por Favor Ingresa El precio.";
    } else{
        $precio = $input_salary;
    }

    // Validar Categoria
    $input_categoria = trim($_POST["categoria"]);
    if(empty($input_categoria)){
        $categoria_err = "Ingresa La Categoria.";     
    } elseif(!ctype_digit($input_categoria)){
        $categoria_err = "Por Favor Ingresa La Categoria.";
    } else{
        $categoria = $input_categoria;
    }

    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err) && empty($categoria_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO producto (nombre, stock, precio, categoria) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary, $param_categoria);
            
            // Enviar Parametros
            $param_name = $nombre;
            $param_address = $stock;
            $param_salary = $precio;
            $param_categoria = $categoria;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: /Tienda/administrador/gestion.php");
                exit();
            } else{
                echo "Ha Ocurrido Un Error. Intenta Más Tarde.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
<!-- tabla -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
<!-- fin tabla -->
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
<!-- formulario -->
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Registrar</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Stock</label>
                            <input type="text" name="stock" class="form-control"value="<?php echo $stock; ?>">
                            <span class="help-block"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Precio</label>
                            <input type="text" name="precio" class="form-control" value="<?php echo $precio; ?>">
                            <span class="help-block"><?php echo $salary_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($categoria_err)) ? 'has-error' : ''; ?>"> 
                        <?php
                            $mysqli = new mysqli('localhost', 'root', '', 'tso');
                        ?>
                            <select name="categoria" value="<?php echo $categoria; ?>">
                                <option value="" selected class="form-control">Selecciona Una Categoria</option> 
                                <?php
                                    $query = $mysqli -> query ("SELECT * FROM categoria");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option class="form-control" value="'.$valores[id].'">'.$valores[nombre].'</option>';
                                    }
                                ?>
                            </select>
                            <span class="help-block"><?php echo $categoria_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-warning" value="Registrar">
                        <a href="/Tienda/administrador/gestion.php" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Fin Formulario -->
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