<?php

require_once (__DIR__ . '/../../Models/consultasProductos.php');

class ContenidoCliente
{
    public $objConsultasProductos;

    public function __construct()
    {
        $this->objConsultasProductos = new ConsultasProductos();
    }

    public function showProducto($id_producto)
    {
        // CONSULTO LA INFO DEL PRODUCTO
        $fProducto = $this->objConsultasProductos->selectProducto($id_producto);

        ?>
        <p><?php echo $fProducto["nombre"] ?></p>

        <form action="" method="post">
            <input type="hidden" name="form" value="comprar">

            <?php
            // CONSULTO EL STOCK DEL PRODUCTO PARA ELEGIR LA CANTIDAD
            $stock = $fProducto["stock"];
            ?>

            <select name="cantidad">
                <?php

                for ($i = 1; $i < $stock + 1; $i++) {
                    ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php
                }

                ?>
            </select>

            <button type="submit">Comprar</button>
        </form>
        <?php
    }
}