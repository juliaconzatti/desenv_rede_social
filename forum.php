<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessar clubes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css" />

</head>
<body>
<nav class="navbar" style="background-color: #180a25;" id="nav1">
        <div class="container-md"></div>
          <a class="navbar-brand" href="www.instagram.com"><img src="img/logoinstagram.png" width="20px" height="20px" class="d-inline-block align-text-top"></a>
          <a class="navbar-brand" href="www.facebook.com"><img src="img/logofacebook.png" width="20px" height="20px" class="d-inline-block align-text-top"></a>
          </div>
        </div>
      </nav>

      <nav class="navbar sticky-top" style="background-color: #d6abda;">
        <div class="container-fluid">
            <img class="navbar" src="img/imaginari.png" alt="">
            <form class="d-flex">
    <div class="dropdown">
  <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="img/usuario.png" width="20px" height="20px">
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="cadastroClube.php">Cadastrar-se em mais clubes</a></li>
    <li><a class="dropdown-item" href="acessarClube.php">Meus clubes</a></li>
    <li><a class="dropdown-item" href="#">Sair</a></li>
  </ul>
</div>
       </form>
        </div>
      </nav>
      
      <div class="forms_log">     
<form>
<div class="form-group row">
        <div class="d-flex align-items-center justify-content-center h-100">
            <div class="d-flex flex-column">
<div class="row g-5">
    <h4 class="text-center">Compartilhe suas opiniões no fórum :)</h4>
  <input type="text" class="form-control" id="tituloforum" placeholder="Título da discussão">
  <textarea class="form-control" id="textareaForum" rows="7" placeholder="Escreva aqui"></textarea><br>
  </div>
  <div class="d-grid gap-2">
                        <button class="btn btn-outline-dark" type="submit" name="pub_forum" id="cadastrar">Publicar no fórum</button><br>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="card-footer text-center">
                    <button type="button" id="btnForum" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#divForum">Responder esse tópico</button>
                    </div>
                    <div class="modal fade" id="divForum" tabindex="-1" aria-labelledby="divForumLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="divForumLabel">Responder esse tópico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="salvarResposta.php" id="formularioResposta">
                    <div class="row g-1">
                        <input type="hidden" id="id" name="id"/>
                        <div class="col-sm">
                            <input type="text" class="form-control" id="tituloResposta" placeholder="Re: Título da discussão">
                        </div>
                        <div class="col-sm">
                        <textarea class="form-control" id="textareaForumResp" rows="7" placeholder="Escreva sua resposta aqui"></textarea><br>
                    </div>
                    </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
            <script src="../redesocial_backend/javascript/scripts.js"></script>

</body>
</html>