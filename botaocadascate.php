<?php
include_once('conexao.php');

if($_POST)
{
    $nome = $_POST['TxtNome'];
    $Descri = $_POST['txtDescricao'];
    $obs = $_POST['txtObservacao'];
    $status = $_POST['TxtStatus'];

    try {
        
        $sql = $conn->prepare("
            insert into categoria
            (
                nome_categoria,
                descricao_categoria,
                obs_categoria,
                status_categoria
               
            )
            values
            (
                :nome_categoria,
                :descricao_categoria,
                :obs_categoria,
                :status_categoria
            )
        ");

        $sql->execute(array(
            ':nome_categoria'=>$nome,
            ':descricao_categoria'=>$Descri,
            ':obs_categoria'=>$obs,
            ':status_categoria'=>$status
           
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
    header('Location:frm_categoria.php');
}
?>

<hr>
<a href="_sistema.php">Voltar</a>