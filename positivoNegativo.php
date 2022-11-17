<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Desafio Final</title>
</head>

<body>
    <form action="positivoNegativo.php" method="post" class="form-control form-control-sm">
        <div class="container">
            <p>Crie um algoritmo que receba um número digitado pelo usuário e
                verifique se esse valor é positivo, negativo ou igual a zero.
                A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".
                - Crie o formulário que permita que o usuário digite o valora tarefa
                Insira como resposta o link do Github com o algoritmo. </p>
            <input name="v1" type="number" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary m-1" type="submit" name="mostrar">Mostrar</button>
            </div>
        </div>

        <?php
if (isset($_POST['mostrar'])) {
    $v1 = $_POST['v1'];

    if($v1 == 0){
    echo " <p  class='text-center text-primary fs-3'> $v1 é:  Igual a zero </p>";
    }else if($v1 < 0){
        echo " <p  class='text-center text-primary fs-3'> $v1 é:  Valor Negativo </p>";
    }else{
        echo " <p  class='text-center text-primary fs-3'> $v1 é: Valor Positivo</p>";
    }
}
        ?>
    </form>
</body>

</html>