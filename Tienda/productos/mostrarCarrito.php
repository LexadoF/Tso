<?php
include 'global/config.php';
include 'carrito2.php';

include 'templates/cabecera.php';

?>
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
include 'templates/pie.php';
?>