<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work8</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,100&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Prompt', sans-serif;
    }
</style>
</head>
<body>
<?php
    echo "<h2>Article 3</h2>";
    $Height = 0; $Medium= 0; $Low = 0;
        if (isset($_POST['Toy'])) {
            for($i = 0; $i < 10; $i++){
            $rand1 = rand(1, 6); 
            $rand2 = rand(1, 6);
            $rand3 = rand(1, 6);
       
            $sum = $rand1+$rand2+$rand3;
            if($sum <= 9){
                $Height += 1;
            }elseif ($sum <= 11){
                $Medium += 1;
            }else{
                $Low += 1;
            }
        }
    }
        echo "ผลการทอยลูกเต๋า 3 ลูก จำนวน 10 ครั้ง <br>";
        echo "<br>------------------------------------";
        echo "<br> Height = ".$Height ;
        echo "<br> Medium = ".$Medium;
        echo "<br> Low = ".$Low; 
        echo "<br>------------------------------------<br>";
    
?>
</body>
</html>

<form  method="POST"> 
    <input type="Submit" name="Toy" value="Roll Dice">
</form>