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

function buscarUsuarioPorEmail($listaUsuarios,$email){
    $emails=array_column($listaUsuarios,'email');
    $key=array_search($email,$emails);
    if( $key !== false){
        return $listaUsuarios[$key]['nombre'];
        }
        return "El email no fue encontrado";
}