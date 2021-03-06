<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS & Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Stream House!</title>
</head>

<?php
include("config.php");
?>

<body>

    <header class="container-fluid">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner_1.jpg" class="d-block w-100" alt="Setup">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="escrita-mao mb-5" style="font-size: 6em; background: rgba(204, 204, 204, 0.5);">Stream House!</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top p-3">
        <a class="navbar-brand" href="index.php">Stream House! || v1.0</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Game House's
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="cadastrar-gh.php?page=cadastrar-gh">Cadastrar</a>
                        <a class="dropdown-item" href="listar-gh.php?page=listar-gh">Listar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Salas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="cadastrar-sala.php?page=cadastrar-sala">Cadastrar</a>
                        <a class="dropdown-item" href="listar-sala.php?page=listar-sala">Listar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Streamer's
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="cadastrar-streamer.php?page=cadastrar-streamer">Cadastrar</a>
                        <a class="dropdown-item" href="listar-streamer.php?page=listar-streamer">Listar</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    <h1>Editar Sala</h1>
    <br>

    <?php

    $sqlBuscar = "SELECT * FROM sala 
                    WHERE id_sala=" . $_REQUEST["id_sala"];

    $res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

    $row = $res->fetch_object();

    ?>

    <form action="salvar-sala.php?page=salvar-sala" method="POST" id="formCSS">
        <input type="hidden" name="acao" value="editar">

        <input type="hidden" name="id_sala" value="<?php print $row->id_sala; ?>">
        <div class="form-group">
            <label>Game House</label>
            <?php
            $sqlBuscar2 = "SELECT * FROM gamehouse";

            $res2 = mysqli_query($conexao, $sqlBuscar2) or die($conexao->error);

            $qtd2 = $res2->num_rows;

            if ($qtd2 > 0) {
                print "<select name='gamehouse_id_gh' class='form-control'>";
                print "<option> Selecione a Game House </option>";
                while ($row2 = $res2->fetch_object()) {
                    print "<option value='" . $row2->id_gh . "' " . ($row2->id_gh == $row->gamehouse_id_gh ? "selected" : "") . ">" . $row2->raz_gh . "</option>";
                }
                print "</select>";
            } else {
                print "<div class='alert alert-danger'>N??o h?? nenhum resultado</div>";
            }
            ?>

            <div class="form-group">
                <label>Nome da Sala</label>
                <input type="text" id="nome_sala" name="nome_sala" class="form-control" placeholder="Tem que ser nome de Transformers" required>
            </div>

            <div class="form-group">
                <label>Capacidade</label>
                <input type="numb" id="cap_sala" name="cap_sala" class="form-control" placeholder="Somente N??meros" required>
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <input type="text" id="cat_sala" name="cat_sala" class="form-control" placeholder="Ex.: Lives, Grava????es, etc..." required>
            </div>

            <div class="form-group">
                <label>Descri????o</label>
                <input type="text" id="desc_sala" name="desc_sala" class="form-control" placeholder="Resumo" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
    </form>

    </footer>
    <div class="bg-white text-muted text-center p-1 pt-3">
        <h6 class="small">Stream House&copy; 2021 || LucasTrs_</h6>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>