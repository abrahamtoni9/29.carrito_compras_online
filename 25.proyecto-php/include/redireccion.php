<?php

    
if (!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['usuario']))
    {
        header("Location: 1.index.php");
    }



?>