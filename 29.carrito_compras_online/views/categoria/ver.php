
<?php if(isset($categoria)):?>
    <h1><?=$categoria->nombre?></h1>
    <?php if($productos->num_rows == 0):?>
        <h1>No hay productos para mostrar</h1>
    <?php else:?>
        <?php while($pro = $productos->fetch_object()):?>
            <div class='product'>

                <a href="<?=base_url?>Producto/ver&id=<?=$pro->id?>">
                    <?php if($pro->imagen != null):?>
                        <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>">
                    <?php else:?>
                        <img src="<?=base_url?>assets/img/camiseta.png">
                    <?php endif;?>
                    <h2><?=$pro->nombre?></h2>
                </a>
                <p><?=$pro->precio?></p>
                <a href="<?=base_url?>Carrito/add&id=<?=$pro->id?>" class='button'>Comprar</a>
            </div>

        <?php endwhile;?>
    <?php endif;?>
<?php else:?>
    <h1>La categoria no existe</h1>
<?php endif;?>