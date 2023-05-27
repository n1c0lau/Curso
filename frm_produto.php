
<div class="container mt-3">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Gerenciamento de Produtos</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control">
        <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="number" class="form-control" min="0" name="TxtID" id="TxtId" placeholder="ID do Produto">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn success" name="btoPesquisar" id="btoPesquisar" formaction="botaopesquisapro.php">&#128269;</button>
                </div>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="txt">
                </div>
            </div>
            <div class="row mt-3">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="TxtNome" id="TxtNome" placeholder="Nome do produto">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Categoria">
                        </div>
                        <div class="col-sm-4">
                            <select name="TxtStatus" class="form-control" id="TxtStatus">
                                <option value="">--Selecionar um Status--</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>
                      
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                           <textarea name="txtDescricao" id="TxtDescricao" cols="122" rows="10" placeholder="Descrição do produto"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                           <textarea name="txtObservacao" id="TxtObservacao" cols="122" rows="10" placeholder="Observação"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12 text-end">
                            <button name="btoCadastrar" id="btoCadastrar" class="btn btn-transparent border border dark" formaction="botaocadaspro.php">Cadastrar</button>
                            <button name="btoAlterar" id="btoAlterar" class="btn btn-transparent border border dark" formaction="botaoalterpro.php">Alterar</button>
                            <a href="_sistema.php?tela=produto" name="btoLimpar" id="btoLimpar" class="btn btn-transparent border border dark">Limpar</a>
                            <button name="btoExcluir" id="btoExcluir" class="btn btn-transparent border border dark" formaction="botaoexcluirpro.php">Excluir</button>
                            <a href="_sistema.php" name="btoSair" id="btoSair" class="btn btn-transparent border border dark">Sair</a>
                            </div>
                    </div>
        </form>
