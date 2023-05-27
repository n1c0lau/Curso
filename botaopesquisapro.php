<?php

include_once('conexao.php');

if($_POST)
{
    $id = $_POST['TxtID'];

    $sql = $conn->query('select * from produto where id_produto ='.$id);

    if($sql->rowCount()>=1)
    {
        foreach ($sql as $row) {
                echo "<p>ID: $row[0]</p>";
                echo "<p>Nome: $row[1]</p>";
                echo "<p>Descricao: $row[3]</p>";
                echo "<p>Observação: $row[4]</p>";
                echo "<p>Status: $row[5]</p>";
                echo "<p>categoria: $row[7]</p>";

        }
    }
    else
    {
        echo '<p>Produto não existe</p>';
    }
}
else
{
    header('Location:frm_categoria.php');
}
?>
<hr>
<a href="_sistema.php">Voltar</a>