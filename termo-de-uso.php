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
    <main class="container-fluid">
        <section class="row mx-5 mt-3 p-3 mb-3 bg-white rounded">
            <h2>1. Termos</h2>
            <p>Ao acessar ao site <a href='https://streamhouse.000webhostapp.com/index.php'>Stream House!</a>, concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e marcas comerciais aplicáveis.</p>
            <h2>2. Uso de Licença</h2>
            <p>É concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software) no site Stream House! , apenas para visualização transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma transferência de título e, sob esta licença, você não pode: </p>
            <ol>
                <li>modificar ou copiar os materiais;  </li>
                <li>usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não comercial);  </li>
                <li>tentar descompilar ou fazer engenharia reversa de qualquer software contido no site Stream House!;  </li>
                <li>remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou  </li>
                <li>transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.</li>
            </ol>
            <p>Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser rescindida por Stream House! a qualquer momento. Ao encerrar a visualização desses materiais ou após o término desta licença, você deve apagar todos os materiais baixados em sua posse, seja em formato eletrónico ou impresso.</p>
            <h2>3. Isenção de responsabilidade</h2>
            <ol>
                <li>Os materiais no site da Stream House! são fornecidos 'como estão'. Stream House! não oferece garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização, adequação a um fim específico ou não violação de propriedade intelectual ou outra violação de direitos. </li>
                <li>Além disso, o Stream House! não garante ou faz qualquer representação relativa à precisão, aos resultados prováveis ​​ou à confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</li>
            </ol>
            <h2>4. Limitações</h2>
            <p>Em nenhum caso o Stream House! ou seus fornecedores serão responsáveis ​​por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os materiais em Stream House!, mesmo que Stream House! ou um representante autorizado da Stream House! tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.</p>
            <h2>5. Precisão dos materiais</h2>
            <p>Os materiais exibidos no site da Stream House! podem incluir erros técnicos, tipográficos ou fotográficos. Stream House! não garante que qualquer material em seu site seja preciso, completo ou atual. Stream House! pode fazer alterações nos materiais contidos em seu site a qualquer momento, sem aviso prévio. No entanto, Stream House! não se compromete a atualizar os materiais.</p>
            <h2>6. Links</h2>
            <p>O Stream House! não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por Stream House! do site. O uso de qualquer site vinculado é por conta e risco do usuário.</p>
            </p>
            <h3>Modificações</h3>
            <p>O Stream House! pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de serviço.</p>
            <h3>Lei aplicável</h3>
            <p>Estes termos e condições são regidos e interpretados de acordo com as leis do Stream House! e você se submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou localidade.</p>
        </section>
    </main>
    </footer>
    <div class="bg-white text-muted text-center p-1 pt-3">
        <h6 class="small">Stream House&copy; 2021 || LucasTrs_</h6>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>