<?php

include_once('conexao.php');

if($_POST)
{
    $id = $_POST['TxtID'];

    $sql = $conn->query('select * from categoria where id_categoria ='.$id);

    if($sql->rowCount()>=1)
    {
        foreach ($sql as $row) {
                echo "<p>ID: $row[0]</p>";
                echo "<p>Nome: $row[1]</p>";
                echo "<p>Descricao: $row[2]</p>";
                echo "<p>Observação: $row[3]</p>";
                echo "<p>Status: $row[4]</p>";

        }
    }
    else
    {
        echo '<p>Categoria não existe</p>';
    }
}
else
{
    header('Location:frm_categoria.php');
}
?>
<hr>
<a href="frm_categoria.php">Voltar</a>