<?php
check_repartidor();
$id = clear($id);
$s = $mysqli->query("SELECT * FROM compven WHERE id = '$id'");
$rm = mysqli_fetch_array($s);
$sl = $mysqli->query("SELECT * FROM compra WHERE id= '".$rm['compra']."'");
$r = mysqli_fetch_array($sl);
$sc = $mysqli->query("SELECT * FROM clientes WHERE id = '".$r['id_cliente']."'");
$rc = mysqli_fetch_array($sc);
$s78 = $mysqli->query("SELECT * FROM seguimiento WHERE id = '".$_SESSION['id_repartidor']. "'");
$r78 = mysqli_fetch_array($s78);
$id_vendedor = $r78['id_vendedor'];
$nombre = $rc['name'];

?>
                                <div class="card">
                                <div class="order-header">
                                    <div class="order-header__actions">
                                        <a href="index.php" class="btn btn-xs btn-secondary">Volver al inicio</a>
                                    </div>
                                    <h5 class="order-header__title">Orden #<?=$id?></h5>
                                    <div class="order-header__subtitle">
                                        La compra fue realizada en la fecha <mark class="order-header__date"><?=fecha($rm['fecha'])?></mark>
                                       y su estado es <mark class="order-header__status"><a href="?p=manejar_status&id=<?=$rm['id']?>"><?=estado($rm['estado'])?><a></mark>.
                                    </div>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Productos</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>

                                            <tbody class="card-table__body card-table__body--merge-rows">
        <?php
       
 $sp = $mysqli->query("SELECT * FROM productos_compra WHERE id_vendedor = '$id_vendedor' AND id_compra = '".$rm['compra']."'");
     while($rp=mysqli_fetch_array($sp)){
            $spro = $mysqli->query("SELECT * FROM productos WHERE id = '".$rp['id_producto']."'");
            $rpro = mysqli_fetch_array($spro);
            $nombre_producto = $rpro['name'];
            $montototal = $rp['monto'] * $rp['cantidad'];
            ?>
                                                <tr>
                                                    <td style="font-size: 14px;max-width: 143px;"><?=$nombre_producto?> × <?=$rp['cantidad']?></td>
                                                    <td><?=number_format($montototal)?></td>
                                                </tr>
                                                
                                                    <?php
        }
    ?>
                                            </tbody>
                                            <tbody class="card-table__body card-table__body--merge-rows">
                                                <tr>
                                                    <th>Subtotal</th>
                                                    <td>$5,877.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Store Credit</th>
                                                    <td>$-20.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Envio</th>
                                                    <td>$25.00</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <td><?=$divisa?><?=number_format($rm['monto'])?></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-6 col-12 px-2">
                                    <div class="card address-card address-card--featured">
                                        <div class="address-card__body">
                                            <div class="address-card__badge address-card__badge--muted">Datos del comprador</div>
                                            <div class="address-card__name">Tienda: <?=$rc['name']?>
</div>
                                            <div class="address-card__row">

                                              Cliente: <?=$rc['nombrev']?><br>
                                                <?=$rc['direccion']?>
                                            </div>
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Numero de telefono</div>
                                                <div class="address-card__row-content"><?=$rc['number']?></div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>