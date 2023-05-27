<?php
include_once('conexao.php');

if($_POST)
{
    $id = $_POST['TxtID'];

    try {
        
        $sql = $conn->prepare("
            delete from categoria where id_categoria=:id_categoria
        ");

        $sql->execute(array(
            ':id_categoria'=>$id
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
    header('Location:frm_categoria.php');
}
?>

<hr>
<a href="_sistema.php">Voltar</a>