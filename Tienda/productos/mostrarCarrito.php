<?php
include 'global/config.php';
include 'carrito2.php';

// include 'templates/cabecera.php';

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand">Zona de pagos</a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/Tienda/productos.php">Productos <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
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