<?php

function controller_autoload($claseName)
{
    include 'controllers/'.$claseName.'.php';
}

spl_autoload_register('controller_autoload');    