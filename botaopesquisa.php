<?php

include_once('conexao.php');

$idUsuario="";
$nomeUsuario="";
$nascimentoUsuario="";
$cadastroUsuario="";
$usuarioUsuario="";
$senhaUsuario="";
$imgUsuario="";
$obsUsuario="";
$statusUsuario="";


if($_POST)
{
    $id = $_POST['txtID'];

    $sql = $conn->query('select * from usuario where id_usuario ='.$id);

    if($sql->rowCount()>=1)
    {
        foreach ($sql as $row) 
        {
            $idUsuario= $row[0];
            $nomeUsuario= $row[1];
            $nascimentoUsuario= $row[2];
            $cadastroUsuario= $row[3];
            $usuarioUsuario= $row[4];
            $senhaUsuario= $row[5];
            $imgUsuario= $row[6];
            $obsUsuario= $row[7];
            $statusUsuario= $row[8];

        }
    }
    else
    {
        echo '<p>Usuário não existe</p>';
    }
}
