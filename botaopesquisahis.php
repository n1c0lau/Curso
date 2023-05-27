<?php

include_once('conexao.php');

if($_POST)
{
    $id = $_POST['txtID'];

    $sql = $conn->query('select * from historico where id_historico ='.$id);

    if($sql->rowCount()>=1)
    {
        foreach ($sql as $row) {
                echo "<p>ID: $row[0]</p>";
                echo "<p>Nome: $row[1]</p>";
                echo "<p>Quantidade: $row[3]</p>";
                echo "<p>Observação: $row[4]</p>";
                echo "<p>Status: $row[5]</p>";
                echo "<p>ID Usuario: $row[6]</p>";
                echo "<p>ID Produto: $row[8]</p>";
            }
    }
    else
    {
        echo '<p>Historico não existe</p>';
    }
}
else
{
    header('Location:frm_historico.php');
}
?>
<hr>
<a href="_sistema.php">Voltar</a>