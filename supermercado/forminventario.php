<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventário</title>
</head>
<body>
    <form method="post" action="inventario.php">
<pre>
        <?php
        $linha=$_POST["linha"];
        $coluna=$_POST["coluna"];
        echo"Produtos";
        for($i=0;$i<$linha;$i++){
            echo "\n";
            for($j=0;$j<$coluna;$j++){
              echo '<input type="number" name="filial[' . $i . '][' . $j . ']" required >&nbsp';
            }
           echo "\n";
        }
       

        ?>
    </pre>
    <button type="submit">Gerar</button>
      </form>
    
</body>
</html>