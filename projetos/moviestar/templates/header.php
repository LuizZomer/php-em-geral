<?php 
  require_once("globals.php");
  require_once("db.php");
  require_once("models/Message.php");

  $message = new Message($BASE_URL);

  $flassMessage = $message->getMessage();

  if(!empty($flassMessage["msg"])){
    // Limpar a mensagem 
    $message->clearMessage();
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieStar</title>
    <link rel="shortcut icon" href="<?=$BASE_URL?>img/moviestar.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?=$BASE_URL?>">
                <img id="logo" src="img/logo.svg" alt="MovieStar">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              <!-- <span class="navbar-toggler-icon"></span> -->
            </button>

            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
              <form method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
              </form>
            <!-- </div> -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="<?=$BASE_URL?>auth.php">Entrar / Cadastrar</a>
                </li>
              </ul>
          </nav>
    </header>
    <?php if(!empty($flassMessage['msg'])):?>
        <div class="msg-container">
            <p class="msg <?=$flassMessage['type']?>"><?=$flassMessage['msg']?></p>
        </div>
    <?php endif;?>
    