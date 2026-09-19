<?php

/*
 * function saludo():string|false{
 *  return "Hola";
 * }
*/

//Los parametros asignados siempre van al finala
function saludo(int $parametro1, string $parametro2, float $parametro3, bool $parametro4=false){
    return "Hola";
}

function saludo2(callable $parametro1, ...){
    return null;
}
