<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="../assets/materialize/css/materialize.min.css" media="screen,projection">
      <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|| Projeto petOn ||</title>
</head>
<body class="grey darken-3">
<div class="row login">
    <div class="col s12 m4 offset-m4">
        <div class="card ">
            <div class="card-action  deep-purple lighten-1 white-text card">
                <h3>petOn</h3>
            </div>
            <div class="card-content">
            <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate white-text">
          <label for="email">Email</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate white-text text-darken-2">
          <label for="password">Senha</label>
        </div>
      </div>

        <button class="btn waves-effect deep-purple lighten-1" type="submit" name="action">Login
        <i class="material-icons right">send</i>
        </button>
            
    </div>
    </div>
    </form>
  </div>
  
  <!-- Compiled and minified JavaScript -->
  <script src="../assets/materialize/js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
    M.updateTextFields();
  });</script>
</body>
</html>