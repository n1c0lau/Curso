<?php
include_once('conexao.php');

if($_POST)
{
    $id = $_POST['TxtID'];

    try {
        
        $sql = $conn->prepare("
            delete from produto where id_produto=:id_produto
        ");

        $sql->execute(array(
            ':id_produto'=>$id
        ));

        if($sql->rowCount()>=1)
        {
            echo '<p>Dados Excluidos com sucesso</p>';
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