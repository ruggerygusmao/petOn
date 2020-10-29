<!DOCTYPE html>
<html lang="pt-BR">
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../../assets/materialize/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../../assets/css/style.css"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>|| PetOn ||</title>
</head>

<body>
    
    <div id="flayer">
    <div id="slayer">
    
    <div class="container formcadastrousuario" id="content">
        
        <div class="row">
            <div class="col l3 m3 s12"></div>
                <div class="col l6 m6 s12">
                    <form action="../../config/inserirUsuario.php" method="POST" id="formcadastrousuario" autocomplete="off">
                        <div class="card-panel z-depth-5">
                            <p class="center"><i class="large material-icons">pets</i></p>
                            <h5 class="center">Crie a sua conta. É grátis!</h5>
                            <br>

                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required maxlength="60" autofocus>
                            <label  for="nome">Nome</label>
                        </div>

                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
                            <div id="resposta" class="alert"></div>
                            <label for="email">E-mail</label>
                        </div>
                  
                        <div class="input-field">
                            <i class="material-icons prefix">local_phone</i>
                            <input type="text" name="telefone" id="telefone" placeholder="apenas números com DDD" required>
                            <label for="telefone">Telefone</label>
                        </div>
                  
                        <div class="input-field">
                            <i class="material-icons prefix">location_on</i>
                            <input type="text" name="cep" id="cep" maxlength="8" placeholder="Digite o CEP de sua residência - apenas números" required>
                            <label for="cep">CEP</label>
                        </div>

                        <div class="input-field">
                            <i class="material-icons prefix">vpn_key</i>
                            <input type="password" name="senha" id="senha" placeholder="Crie uma senha de acesso" required>
                            <label for="senha">Senha</label>
                        </div>
                        
                            <p class="right">Já tem uma conta? <a href="../../public/index.php">Entrar</a></p>
                            <input type="submit" name="submit" value="cadastrar" class="deep-purple lighten-1 btn col s12">
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