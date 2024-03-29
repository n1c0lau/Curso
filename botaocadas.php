<?php
include_once('conexao.php');

if($_POST)
{
    $nome = $_POST['TxtNome'];
    $login = $_POST['TxtLogin'];
    $senha = $_POST['txtSenha'];
    $nasc = $_POST['TxtNascimento'];
    $img = '';
    $status = $_POST['TxtStatus'];
    $obs = $_POST['TxtObservacao'];

    try {
        
        $sql = $conn->prepare("
            insert into usuario
            (
                nome_Usuario,
                nascimento_Usuario,
                usuario_Usuario,
                senha_Usuario,
                img_Usuario,
                obs_Usuario,
                status_Usuario
            )
            values
            (
                :nome_Usuario,
                :nascimento_Usuario,
                :usuario_Usuario,
                :senha_Usuario,
                :img_Usuario,
                :observacao_Usuario,
                :status_Usuario
            )
        ");

        $sql->execute(array(
            ':nome_Usuario'=>$nome,
            ':nascimento_Usuario'=>$nasc,
            ':usuario_Usuario'=>$login,
            ':senha_Usuario'=>$senha,
            ':img_Usuario'=>$img,
            ':observacao_Usuario'=>$obs,
            ':status_Usuario'=>$status
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
    header('Location:frm_usuario.php');
}
?>

<hr>
<a href="_sistema.php">Voltar</a>