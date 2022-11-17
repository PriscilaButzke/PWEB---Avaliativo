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
   <form action="laco.php" method="POST">
      <div class="container">
         <div class="d-flex justify-content-center fs-2">Tamanho de uma palavra:</div>
         <p>Criar um algoritmo que entre com uma palavra e imprima conforme o exemplo</p>
         <p>◦ Palavra: sonho</p>
         <p>◦ SONHO</p>
         <p>◦ SONHO SONHO</p>
         <p>◦ SONHO SONHO SONHO</p>
         <p>◦ SONHO SONHO SONHO SONHO</p>
         <p>◦ SONHO SONHO SONHO SONHO SONHO</p>
         <p>Dica: no exemplo acima a palavra sonho tem 5 caracter, então o programa fará 5 vezes,
            e em cada vez o programa deverá imprimir o numero de vezes da sequencia, conforme o exemplo acima.
            utilize laços de repetições.</p>

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
         echo "Palavra:  $palavra <br> ";
         $palavra = strtoupper($palavra);
         $tamanho = strlen($palavra);

         $repetir = "";
         for ($i = 0; $i < $tamanho; $i++) {
            $repetir =  $repetir . ' ' . $palavra ;

            echo $repetir;
            echo "<br>";
         }
      }


      ?>
   </form>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
   </script>
</body>

</html>