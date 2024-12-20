<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--Manual css-->
    <link href="css/style.css" rel="stylesheet">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!--Aba
    <link rel="shortcut icon" href="img/ico.png">
    -->
    <!--Datatables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    
     <title>Contador</title>
</head>

<body style="background-color: #2c2c2c; color:white;">
    <header>
        <?php if (isset($_SESSION['login'])) {
            echo '
            <div class="collapse" id="navbarToggleExternalContent">
                
                <div class="bg p-4" style="background-color: black">
                    <h5 class="text-white h4" >Sell <span class="text-muted">Tracker</span></h5>
                    <div>
                        <a href="?pagina=cadastros" class="linkMenu">
                                Cadastrar Vendas
                        </a>
                    </div>
                    <div>
                        <a href="logout.php" class="linkMenu">
                            Sair
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-dark bg" style="background-color: black">
                <div class="container-fluid" style="background-color: black; color: black;">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            ';
        }
        ?>
    </header>