<?php 
include('verifica_login.php');
include('../layout/header.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../assets/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <title>|| Projeto petOn ||</title>
</head>
<body>
<div id="flayer">
    <div id="slayer">
            <div class="row center page" id="content">
              <div class="input-field col s12">
                <a href="#" class="btn-large  deep-purple lighten-3">Quero cadastrar um novo pet para adoção</a>
            </div>
          </div>

          <div class="row center">
              <div class="input-field col s12 ">
                <a href="#" class="btn-large  deep-purple lighten-3">Estou em busca de um novo membro para a familia</a>
            </div>
          </div>

</body>
</html>

<?php include('../layout/footer.php'); ?>