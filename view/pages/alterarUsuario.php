<?php

include('../layout/header.php');
include('../../config/conexao.php');

?>


    <div id="flayer">
        <div id="slayer">

            <div class="container formcadastrousuario" id="content">

                <div class="row">
                    <div class="col l4 m3 s12"></div>
                    <div class="col l4 m6 s12">
                        <form method="POST" id="formcadastrousuario" autocomplete="off">
                            <div class="card-panel z-depth-5">
                                <p class="center"><i class="medium material-icons">edit</i></p>
                                <h5 class="center">Meu cadastro</h5>
                                <br>

                                <div class="input-field">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input type="text" name="nome" id="nome" required maxlength="60" autofocus>
                                    <label for="nome">NOME</label>
                                </div>

                                <div class="input-field">
                                    <i class="material-icons prefix">email</i>
                                    <input type="email" name="email" id="email" required>
                                    <label for="email">E-MAIL</label>
                                    <div id="retornoMsgEmail">
                                        <p></p>
                                    </div>
                                </div>

                                <div class="input-field">
                                    <i class="material-icons prefix">local_phone</i>
                                    <input type="text" name="telefone" id="telefone" required>
                                    <label for="telefone">TELEFONE</label>
                                </div>

                                <div class="input-field">
                                    <i class="material-icons prefix">location_on</i>
                                    <input type="text" name="cep" id="cep" maxlength="9" required>
                                    <label for="cep">CEP</label>
                                    <div id="endereco">
                                        <p></p>
                                    </div>
                                </div>

                                <div class="input-field">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input type="password" name="senha" id="senha" required>
                                    <label for="senha">SENHA ANTIGA</label>
                                </div>

                                <div class="input-field">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input type="password" name="senha" id="senha" required>
                                    <label for="senha">NOVA SENHA</label>
                                </div>

                                <input type="submit" name="submit" value="cadastrar" class="btn deep-purple lighten-1 col s12">
                                <p class="right">Já tem uma conta? <a href="../../public/index.php">Entrar</a></p>

                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('../layout/footer.php');
    ?>