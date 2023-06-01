<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MarinsCompany</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="nav">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">MarinsCompany</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="?page=novo">Cadastrar</a>
              <a class="nav-link" href="?page=listar">Listar usuários</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="container">
      <div class="row">
        <div class="col mt-5">
        <?php
          include ("config.php");
          switch(@$_REQUEST["page"]){
            case "novo":
              include("cadastro.php");
            break;
            case "listar":
              include("listar.php");
            break;
            case "salvar":
              include("salvar.php");
            break;
            case "editar":
              include("editar.php");
            break;
            default:"index.php";
          }
        ?>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>