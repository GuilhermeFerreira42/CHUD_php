<!DOCTYPE html> 
<html lang="pt-BR">
    <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel=" stylesheet">
        <title>Cadastro</title>
    </head>
    <body>
        
    
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar</a>
        </li>
      </ul>

      </form>
    </div>
  </div>
</nav>

<div class="container">
   <div class="row">
      <div class="col mt-5">
        <?php
        include("conexao.php");
        switch(@$_REQUEST["page"]){
           case "novo":
              include("novo.php"); 
               break; 
               case "listar":
                  include("listar.php");
                break;
                case "salvar":
                  include("salvar-novo.php");
                  break;
                  case "editar":
                    include("editar.php");
                    break;
                default: 
                  print "<h1>Bem vindos!</h1>";
                }
          ?>
        </div>
      </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></ script>


        </body>
</html>