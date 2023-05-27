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
                <h1>Gerenciamento de Historico</h1>
            </div>
            
            <form action="" method="post" class="form-control">
                    <div class="row mt-3">
                        <div class="col-sm-4">
                        <input type="number" class="form-control" min="0" name="txtID"
                        id="txtID" placeholder="ID do Historico">
                    </div>
                    
                     <div class="col-sm-4">
                        <button class="btn btn success" name="btoPesquisar" id="btoPesquisar" formaction="botaopesquisahis.php" >&#128269;</button>
                        </div>
                    
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="txtdata">
                        </div>
                    </div>
                    <div class="row mt-3">
                            <div class="col-sm-4">
                                <input type="number" class="form-control" min="0" name="tXtID"
                                id="txtID" placeholder="ID do Usuário">
                            </div>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" min="0" name="TxtID"
                                id="txtID" placeholder="ID do Produto">
                            </div>
                            <div class="col-sm-4">
                            <select name="txtstatus" class="form-control" id="txtstatus">
                                <option value="">--Selecionar um Status--</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                            </div>
                        </div>
                    <div class="row mt-3">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="TxtNome" id="TxtNome" placeholder="Nome do Historico">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="TxtValor" id="TxtValor" placeholder="Valor R$">
                        </div>
                        
                        <div class="col-sm-4">
                            <select name="TxtQuantidade" class="form-control" id="TxtQuantidade">
                                <option value="">--Selecionar uma Quantidade--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-sm-12">
                           <textarea name="txtDescricao" id="TxtDescricao" cols="122" rows="10" placeholder="Descrição do Historico"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                           <textarea name="txtObservacao" id="TxtObservacao" cols="122" rows="10" placeholder="Observação"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12 text-end">
                        <button name="btoCadastrar" id="btoCadastrar" class="btn btn-transparent border border dark" formaction="botaocadashis.php">Cadastrar</button>
                            <button name="btoAlterar" id="btoAlterar" class="btn btn-transparent border border dark" formaction="">Alterar</button>
                            <a href="_sistema.php?tela=produto" name="btoLimpar" id="btoLimpar" class="btn btn-transparent border border dark">Limpar</a>
                            <button name="btoExcluir" id="btoExcluir" class="btn btn-transparent border border dark" formaction="">Excluir</button>
                            <a href="_sistema.php" name="btoSair" id="btoSair" class="btn btn-transparent border border dark">Sair</a>
                            </div>
                    </div>
            </form>

        
        </div>            
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>