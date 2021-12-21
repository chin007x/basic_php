
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
    <h1>การแสดงผมตัวแปรอาร์เรย์แบบวนรอบ</h1>
    <?php


    $color=array("red"=>"102","blue"=>"200","yellow"=>"300","black"=>"400","green"=>"500","pink"=>"600");
        //$number=array("100","200","300","400","500","600");
        foreach($color as $colors => $number):
            echo "สี : ".$colors. "=>";
            echo "รหัส : ".$number. "<br>";
        endforeach;
     
        
        








        
        ?>

</body>
</html>