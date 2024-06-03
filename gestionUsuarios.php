<?php

$usuario=array(
    'nombre' => $nombre,
    'edad' => $edad,
    'email' => $email
);

function agregarUsuario($usuario,$nombre,$edad,$email){
    $listaUsuarios [] = $usuario; 
    return $listaUsuarios;
}