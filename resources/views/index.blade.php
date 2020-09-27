<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Studio Estética</title>
    </head>
    <body>
        <div class="container-fluid bg-secondary">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4">Studio de Estética</h1>
                  <p class="lead">O lugar perfeito pra você ficar sempre bela.</p>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
                <h3><?=$titulo?></h3>
            </nav>

            <div class="container bg-light mt-5" >
                <ul>
                    <?php foreach ($servicos as $servico): ?>
                        <li><?=$servico?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="container bg-secondary mt-5">
                <footer class="page-footer font-small  pt-4">
                    <p  class="footer-copyright text-center py-3">© 2020 Copyright: Leonardo Veloso Neves</p>
                </footer>
            </div>
        </div>

    </body>
</html>
