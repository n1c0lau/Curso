<?php include_once ('botaopesquisa.php')?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Gerenciamento de Usuários</h1>
            </div>
       
       
        </div>
            <form action="" method="post" class="form-control" id="frm_usuario">
                <div class="row mt-3">
                    <div class="col-sm-4">
                        <input type="number" class="form-control" min="0" name="txtID"
                        id="txtID" placeholder="ID do Usuário" value="<?=$idUsuario?>">
                    </div>
                    
                    <div class="col-sm-4">
                        <button class="btn btn success" name="btoPesquisar" id="btoPesquisar" formaction="_sistema.php?tela=usuario">&#128269;</button>
                    </div>
                    
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="txt" id="txt" value="<?=$cadastroUsuario?>">
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="TxtNome" id="TxtNome" placeholder="Nome do Usuário" value =" <?=$nomeUsuario?> ">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="TxtLogin" id="TxtLogin" placeholder="Login do Usuário" value="<?=$usuarioUsuario?>">
                        </div>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Senha do Usuário" value="<?=$senhaUsuario?>">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="TxtNascimento" id="TxtNascimento" placeholder="Data de Nascimento" value="<?=$nascimentoUsuario?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="TxtImg" id="txtImg" placeholder="TxtImg">
                        </div>
                        
                        <div class="col-sm-4">
                            <select name="TxtStatus" class="form-control" id="TxtStatus">
                                <option value="">--Selecionar um Status--</option>
                                <option value="Ativo" <?=($statusUsuario=='Ativo'?'selected':"")?>>Ativo</option>
                                <option value="Inativo" <?=($statusUsuario=='Inativo'?'selected':"")?>>Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                           <textarea name="TxtObservacao" id="TxtObservacao" cols="122" rows="10" placeholder="Observação"><?=$obsUsuario?></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12 text-end">
                            <button name="btoCadastrar" id="btoCadastrar" class="btn btn-transparent border border dark" formaction="botaocadas.php">Cadastrar</button>
                            <button name="btoAlterar" id="btoAlterar" class="btn btn-transparent border border dark" formaction="botaoalter.php">Alterar</button>
                            <a href="frm_usuario.php"><button name="btoLimpar" id="btoLimpar" class="btn btn-transparent border border dark">Limpar</button></a>
                            <button name="btoExcluir" id="btoExcluir" class="btn btn-transparent border border dark" formaction="botaoexcluir.php">Excluir</button>
                            <a href="_sistema.php" name="btoSair" id="btoSair" class="btn btn-transparent border border dark">Sair</a>
                        </div>
                    </div>
                </div>
            </form>
    </div>

