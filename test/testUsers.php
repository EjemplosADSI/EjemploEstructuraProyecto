<?php

require ("..\app\Models\Usuarios.php");
use App\Models\Usuarios;

$arrUser = [
    'nombres' => 'Diego',
    'apellidos' => 'Ojeda',
    'direccion' =>  'Sogamoso',
    'fecha_nacimiento' => '1900-01-01',
    'telefono' => '3118864151',
    'estado' => 'Activo'
];

$arrUser2 = [
    'nombres' => 'Carlos',
    'apellidos' => 'Caro',
    'direccion' =>  'Sogamoso',
    'fecha_nacimiento' => '1990-01-01',
    'telefono' => '3164182345',
    'estado' => 'Activo'
];

$objUser = new Usuarios($arrUser); // Creamos un usuario... Pero no echo nada con el.
$objUser->insert(); //Registramos el objeto en la base de datos

$objUser->setNombres("Diego"); //Cambio Valores
$objUser->setApellidos("Ojeda"); //Cambio Valores
$objUser->update();

$objUser->deleted();

$objUser2 = new Usuarios($arrUser2);
$objUser2->insert();

$arrResult = Usuarios::search("SELECT * FROM usuarios WHERE nombres = 'Diego'");
var_dump($arrResult);

