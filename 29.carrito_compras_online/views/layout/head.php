<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
    <title>Tienda de Camiseta</title>

    <style>
        *
        {
        /* background:red; */

        }
    </style>
    
</head>
<body>

    <div id='container'>
    
        <!-- CABECERA -->
        <header>
            <div id='logo'>
                <img src="<?=base_url?>assets/img/camiseta.png" alt="Camiseta logo">
                <a href="<?=base_url?>">Tienda de Camisetas</a>
            </div>
        </header>



        <!-- MENU -->


        <?php $categorias = Utils::showCategorias();?>
        <nav id='menu'>
            <ul>
                <?php  
                    // var_dump($categorias);
                    // die();
                ?>
                <li>
                    <a href="<?=base_url?>">Inicio</a>
                </li>
                <?php while($cat = $categorias->fetch_object()):?>
                <li>
                    <a href="<?=base_url?>Categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
                </li>
                <?php endwhile;?>
            </ul>
        
        </nav>




        <!-- BARRA LATERAL -->
        <div id= 'content'>