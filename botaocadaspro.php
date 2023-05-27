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
            insert into produto
            (
                nome_produto,
               descricao_produto,
                obs_produto,
                id_categoria_produto,
                status_produto
            )
            values
            (
                :nome_produto,
                
                :descricao_produto,
                :obs_produto,
                :id_categoria_produto,
                :status_produto
            )
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
            echo '<p>Dados Cadastrados com sucesso</p>';
            echo '<p>ID Gerado: '.$conn->lastInsertId().'</p>';
        }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    header('Location:frm_produto.php');
}
?>

<hr>
<a href="_sistema.php">Voltar</a>