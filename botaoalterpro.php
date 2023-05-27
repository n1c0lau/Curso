<?php
include_once('conexao.php');

if($_POST)
{
    $nome = $_POST['TxtNome'];
    $ID2 = $_POST['txtID'];
    $descri = $_POST['txtDescricao'];
    $status = $_POST['TxtStatus'];
    $obs = $_POST['txtObservacao'];

    try {
        
        $sql = $conn->prepare("
            update usuario set
            
                nome_produto = :nome_produto,
                descricao_produto = :descricao_produto,
                id_categoria_produto = : id_categoria_produto,
                obs_Usuario = :observacao_Usuario,
                status_Usuario = :status_Usuario
                where id_Usuario = :id_Usuario
            
    
        ");

        $sql->execute(array(
            ':nome_produto'=>$nome,
            ':descricao_produto'=>$descri,
            ':obs_produto'=>$obs,
            ':id_categoria_produto'=>$ID2,
            ':status_produto'=>$status
        ));

        if($sql->rowCount()>=1)
        {
            echo '<p>Dados Alterados com sucesso</p>';
           
        }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    header('Location:frm_usuario.php');
}
?>

<hr>
<a href="_sistema.php">Voltar</a>