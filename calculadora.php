<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <form action="calculadora.php" method="post" class="form-control form-control-sm">
        <div class="container">
            <div class="d-flex justify-content-center fs-2">Calculadora:</div>
            <p>Crie um programa em php que o usuário a partir de um formulário escolhe o tipo de operação 
                (soma, subtração, multiplicação ou divisão) utilize um botão de radio e duas inputs de 
                numeros para que o usuario digite dois valores o programa deverá verificar qual a operação
                 escolhida e efetuar o cálculo escolhido.</p>
            <div class="box">
                <label>Valor 1:</label>
                <input name="v1" type="number" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="box">
                <label>Valor 2:</label>
                <input name="v2" type="number" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="d-flex justify-content-center">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="calc" id="flexRadioDefault1" checked  value="+">
                    <label class="form-check-label" for="flexRadioDefault2">
                        +
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="calc" id="flexRadioDefault2"  value="-">
                    <label class="form-check-label" for="flexRadioDefault2">
                        -
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="calc" id="flexRadioDefault3"  value="x">
                    <label class="form-check-label" for="flexRadioDefault2">
                        x
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="calc" id="flexRadioDefault4" value="%">
                    <label class="form-check-label" for="flexRadioDefault2">
                        ÷
                    </label>
                </div>
            </div>
            <button class="btn btn-primary m-1" type="submit" name="calcular">Calcular</button>
        </div>
        <div class="d-flex justify-content-center fs-2">Resultado:</div>

        <?php

        if (isset($_POST['calcular'])) {
            $escolha = $_POST['calc'];

            if ($escolha == '+') {
                $v1 = $_POST['v1'];
                $v2 = $_POST['v2'];

                $resul = $v1 + $v2;
                echo " <p  class='text-center text-primary fs-3'> $v1   +  $v2 =  $resul </p>";
            } else if ($escolha == '-') {
                $v1 = $_POST['v1'];
                $v2 = $_POST['v2'];

                $resul = $v1 - $v2;
                echo " <p  class='text-center text-primary fs-3'> $v1   -  $v2 =  $resul </p>";
            } else if ($escolha == 'x') {
                $v1 = $_POST['v1'];
                $v2 = $_POST['v2'];

                $resul = $v1 * $v2;
                echo " <p  class='text-center text-primary fs-3'> $v1   x  $v2 =  $resul </p>";
            } else if ($escolha == '%') {
                $v1 = $_POST['v1'];
                $v2 = $_POST['v2'];

                $resul = $v1 / $v2;
                echo " <p  class='text-center text-primary fs-3'> $v1   ÷  $v2 =  $resul </p>";
            }
        }

        ?>
    </form>

</body>


</html>