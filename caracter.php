<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Exercicio 7</title>
</head>

<body>
    <form action="caracter.php" method="POST">
        <div class="container">
            <div class="d-flex justify-content-center fs-2">Tamanho de uma palavra:</div>
            <p>Realize um algoritmo PHP que receba uma string, encontre o
                número total de caracteres desta e imprima todos os números que existem entre o
                e o número total, exemplo: string = “Gil Eduardo de Andrade”
                total_caracter = 22 Imprime: 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22
                obs. 1: Não esqueça de criar o formulario para fazer as entradas de dados</p>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Digite a palavra: </span>
                </div>
                <input type="text" name="palavra" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>




            <div class="d-flex justify-content-center">
                <button class="btn btn-primary m-1" type="submit" name="calcular">A palavra possui: </button>
            </div>
        </div>

        <?php

        if (isset($_POST['calcular'])) {
            $palavra =  $_POST['palavra'];
            $tamanho = strlen($palavra);
            echo " <p  class='text-center text-primary fs-3'> Total de caracteres: $tamanho </p>";

            $cont = 0;
            for ($i = 0; $i < $tamanho; $i++) {
                $cont++;
              echo $cont;
            }
           
        }


        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>