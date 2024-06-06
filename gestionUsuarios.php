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
        return "El emial no fue encontrado";
}

function mostrarUsuarios($listaUsuarios){
    $nombres=array_column($listaUsuarios, 'nombre');
    $edades=array_column($listaUsuarios, 'edad');
    foreach($nombres as $key => $nombre){
        echo "<li>Nombre: ".$nombre.", Edad: ".$edades[$key]."<li>";
    }
}

function actualizarUsuario($listaUsuarios, $nombreNuevo, $edadNueva, $emailNuevo, $email){
    $emails=array_column($listaUsuarios, 'email');
    $key=array_search($email,$emails);
    if($key !== false){
        $listaUsuarios[$key] = array_replace($listaUsuarios[$key],
        array(
            'nombre' => $nombreNuevo,
            'edad' => $edadNueva,
            'email' => $emailNuevo
        ));
    }
    return $listaUsuarios;
}