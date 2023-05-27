<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container mt-3">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Gerenciamento de Categorias</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control">
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="number" class="form-control" min="0" name="TxtID" id="TxtId" placeholder="ID da Categoria">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn success" name="btoPesquisar" id="btoPesquisar" formaction="botaopesquisacate.php">&#128269;</button>
                </div>
               
            </div>
            <div class="row mt-3">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="TxtNome" id="TxtNome" placeholder="Nome da Categoria">
                        </div>
                        <div class="col-sm-6">
                            <select name="TxtStatus" class="form-control" id="TxtStatus">
                                <option value="">--Selecionar um Status--</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                           <textarea name="txtDescricao" id="TxtDescricao" cols="122" rows="10" placeholder="Descrição da Categoria"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                           <textarea name="txtObservacao" id="TxtObservacao" cols="122" rows="10" placeholder="Observação"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12 text-end">
                            <button name="btoCadastrar" id="btoCadastrar" class="btn btn-transparent border border dark" formaction="botaocadascate.php">Cadastrar</button>
                            <button name="btoAlterar" id="btoAlterar" class="btn btn-transparent border border dark" formaction="botaoaltercateg.php">Alterar</button>
                            <button name="btoLimpar" id="btoLimpar" class="btn btn-transparent border border dark" formaction="frm_categoria.php">Limpar</button>
                            <button name="btoExcluir" id="btoExcluir" class="btn btn-transparent border border dark" formaction="botaoexcluircate.php">Excluir</button>
                            <button name="btoSair" id="btoSair" class="btn btn-transparent border border dark">Sair</button>
                        </div>
                    </div>
        </form>
<script src="js/bootstrap.js"></script>
</body>
</html>