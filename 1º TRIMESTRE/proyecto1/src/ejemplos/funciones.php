<?php

const DEFAULT_PASSWORD_LENGTH = 14;
const CHAR_ARRAY = ['a','b','c','d','e','f','g','h'];
const NUM_ARRAY = ['1','2','3','4','6','7','8','9'];
const SYMBOL_ARRAY= ['ñ',';',',','.',':','ç','Ç','-','_','/','|'];

const CHARACTERS =[
    'char' => CHAR_ARRAY,
    'num' => NUM_ARRAY,
    'sym' => SYMBOL_ARRAY
];

function create_pass(int $longitud=DEFAULT_PASSWORD_LENGTH, bool $numeros=true, bool $letras=true, bool $simbolos=true):string{
    $generated_pass = '';
    if($numeros === false && $letras === false && $simbolos === false){
        $letras=true;
    }

    //Repetir tantas veces como la longitud del password
    for($i = 0; $i < $longitud; $i++){
        //Quiero seleccionar si voy a usar un numero, letra o simbolo
        $tipo_elemento = mt_rand(1,3);
        var_dump($tipo_elemento);

        //Cuando tenga selccionado el tipo de carácter, quiero seleccionar entrelos caracteres disponible
        if($tipo_elemento === 1 && $letras === true){
            $generated_pass.=CHAR_ARRAY[mt_rand(0,count(CHAR_ARRAY)-1)]; // .= es para añadir la cadena concatenada
        } elseif ($tipo_elemento === 2 && $numeros === true){
            $generated_pass.=NUM_ARRAY[mt_rand(0,count(NUM_ARRAY)-1)]; // .= es para añadir la cadena concatenada
        } elseif($tipo_elemento === 3 && $simbolos === true) {
            $generated_pass.=SYMBOL_ARRAY[mt_rand(0,count(SYMBOL_ARRAY)-1)]; // .= es para añadir la cadena concatenada
        }
    }

    //Añadiré el carácter a el string generado

    return $generated_pass;
}
