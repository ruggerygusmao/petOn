<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../assets/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <title>|| Projeto petOn ||</title>
</head>
<body class="body">

<div class="row login">
    <div class="col s12 m4 offset-m4">
        <div class="card">
            <div class="card-action  deep-purple lighten-1 white-text card">
                <h3>petOn</h3>
            </div>
            <!-- CÓDIGO PHP -->
            <?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>
                <div class="materialert error">
		              <div class="material-icons">error_outline</div>
                  ERRO: E-mail ou senha inválidos :)
                </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>
            <!-- CÓDIGO PHP -->
      <div class="card-content">
        <form action="login.php" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <input id="email" name="email" type="email" class="validate white-text" class="validate">
                <label for="email">Email</label>
                <span class="helper-text" data-error="" data-success=""></span>
            </div>
          </div>

            <div class="row">
              <div class="input-field col s12">
                  <input id="senha" name="senha" type="password" class="validate white-text text-darken-2" class="validate">
                  <label for="senha">Senha</label>
                  <span class="helper-text" data-error="" data-success=""></span>
              </div>
            </div>
            <button class="btn waves-effect deep-purple lighten-1" type="submit" name="action">Login
              <i class="material-icons right">send</i>
            </button>

              <div class="row">
                <div class="input-field col s12">
                  <span class="white-text">Não tem uma conta?</span> 
                  <a href="../view/pages/cadastroUsuario.php" class="deep-purple-text text-lighten-1"><b>Cadastre-se</b></a>
                </div>
              </div>
        </form>    
      </div>
  </div>
</div>
  <!-- Compiled and minified JavaScript -->
  <script src="../assets/materialize/js/materialize.min.js"></script>
</body>
</html>