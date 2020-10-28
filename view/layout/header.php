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
      <title>|| PetOn||</title>
    </head>

    <body class="grey darken-3">

    <nav class="deep-purple lighten-1">
        <div class="nav-wrapper container">
        <ul class="left hide-on-med-and-down">
            <li><a href="sass.html">Voltar para o painel</a></li>
        </ul>
        <!-- Ícone para abrir no Mobile -->
        <a href="#" data-target="mobile-navbar" class="sidenav-trigger">
            <i class="material-icons">menu</i>
        </a>
        
    
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Alterar dados pessoais</a></li>
            <li><a href="badges.html">Alterar dados do pet</a></li>
            <li><a href="../pages/logout.php">Sair</a></li>
        </ul>
    </div>
  </nav>

   <!-- Menu Mobile -->
   <ul id="mobile-navbar" class="sidenav">
        <li><a href="#"><i class="material-icons">home</i>Voltar para o painel</a></li>
        <li><a href="#"><i class="material-icons">edit</i>Alterar dados pessoais</a></li>
        <li><a href="#"><i class="material-icons">pets</i>Alterar dados do pet</a></li>
        <li><a href="../pages/logout.php"><i class="material-icons">exit_to_app</i>Sair</a></li>
    </ul>