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
                            <div class="alert" id="alert"></div>
                            <br>

                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="nome" id="nome">
                            <label  for="nome">Digite seu primeiro nome</label>
                        </div>

                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" name="email" id="email">
                            <label for="email">Digite seu e-mail</label>
                        </div>
                  
                        <div class="input-field">
                            <i class="material-icons prefix">local_phone</i>
                            <input type="text" name="telefone" id="telefone">
                            <label for="telefone">Digite seu telefone (somente números com DDD)</label>
                        </div>
                  
                        <div class="input-field">
                            <i class="material-icons prefix">location_on</i>
                            <input type="text" name="cep" id="cep">
                            <label for="cep">Digite o CEP de sua residência</label>
                        </div>

                        <div class="input-field">
                            <i class="material-icons prefix">vpn_key</i>
                            <input type="password" name="senha" id="senha">
                            <label for="senha">Crie uma senha</label>
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