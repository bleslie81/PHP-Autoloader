<?php
    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){
        $path="classes/";
        $extension=".php";
        $fullpath= $path . $className . $extension;

        include_once $fullpath;
    }
?>