<!doctype html>
<html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Horóscopo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    
    <body class="bg-light">
        <div class="container col-5 shadow my-5">
            <div class="row ">
                <h1 class="text-center fw-bold mt-5">Signos</h1>
                <p class="text-muted text-center mt-2 mb-1">
    			 <div class="text-muted text-center mt-2">Horóscopo <?php echo $ano = date('Y');?></div>
                    <div class="text-muted text-center mt-2 mb-3">Confira a previsão para seu signo.</div>
                </p >				
                <form action="signos.php" method="post">
                    <div class="row md-2">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="nomePess" required>
                                <label for="floatingInput">Informe seu Nome</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" name="dataNasc" required>
                                <label for="floatingInput">Informe a data de Nascimento</label>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1">
                        <div class="col my-3">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="submit">Consultar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>

</html>