<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <pre>
    <?php
    $total_prod=0;
    $num=0;
    $fill_prod = $_POST['filial']; 
    foreach ($fill_prod as $i => $fill) {
        echo "<br>";
        $total=0;
        foreach ($fill as $j => $prod) {
            $total=$total+$prod;
            echo '<input type="text" id="lname" name="lname" value="' . $prod . '" disabled>&nbsp';
            for ($num=0; $num <=$i; $num++) { 
                if ($j==$num){
                    $total_prod=$total_prod+$prod;
                }
            }
             
            
        }
        echo '<input type="text" id="lname" name="lname" value="' . $total . '" disabled>&nbsp';
        echo "\n";
       
        
      }
      $total_prod=$total_prod-$prod;
      echo "<br>";
      echo '<input type="text" id="lname" name="lname" value="' . $total_prod . '" disabled>&nbsp';
      
    
    ?>
    </pre>


</body>
</html>
