<?php

    //POST
    //$_POST[' '];

    //GET
    //$valorFinal = $_GET['final'];
    if(isset($_GET['final'])){
        $valorFinal = $_GET['final'];
    } else {
        $valorFinal=10;
    }

    //$_GET['final']??10;

    for ($i=0; $i<$valorFinal; $i++){
        echo $i."<br>";
    }