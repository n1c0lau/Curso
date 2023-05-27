<?php
include_once('conexao.php');

if($_POST)
{
    $nome = $_POST['TxtNome'];
    $quan = $_POST['TxtQuantidade'];
    $obs = $_POST['txtObservacao'];
    $status = $_POST['txtstatus'];
    $ID1 = $_POST['tXtID'];
    $ID2 = $_POST['TxtID'];


    try {
        
        $sql = $conn->prepare("
            insert into historico
            (
                nome_historico,
                quantidade_historico,
                obs_historico,
                status_historico,
                id_usuario_historico,
                id_produto_historico
                
            )
            values
            (
                :nome_historico,
                :quantidade_historico,
                :obs_historico,
                :status_historico,
                :id_usuario_historico,
                :id_produto_historico
            )
        ");

        $sql->execute(array(
            ':nome_historico'=>$nome,
            ':quantidade_historico'=>$quan,
            ':obs_historico'=>$obs,
            ':status_historico'=>$status,
            ':id_usuario_historico'=>$ID1,
            ':id_produto_historico'=>$ID2
        ));

        if($sql->rowCount()>=1)
        {
            echo '<p>Historico Cadastrados com sucesso</p>';
            echo '<p>ID Gerado: '.$conn->lastInsertId().'</p>';
        }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    header('Location:frm_historico.php');
}
?>

<hr>
<a href="_sistema.php">Voltar</a>