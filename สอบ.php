<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = array("กษิดิ์เดช", "กัญญ์วรา", "ชินวัฒน์", "ทักษ์ดานัย", "สรศักดิ์");
    $age = array("20", "19", "18", "19", "19");

    echo "ชื่อ:".$name[0]." "."อายุ:".$age[0]."<br>";
    echo "ชื่อ:".$name[1]." "."อายุ:".$age[1]."<br>";
    echo "ชื่อ:".$name[2]." "."อายุ:".$age[2]."<br>";
    echo "ชื่อ:".$name[3]." "."อายุ:".$age[3]."<br>";
    echo "ชื่อ:".$name[4]." "."อายุ:".$age[4]."<br>";

    $salary = 50000;
     if($salary >= 10000){
        $bonus = ($salary * 3);
    }else if($salary>=50000){
        $bonus =($salary * 2 );
    }else{
        $bonus = ($salary * 1);
    }

    echo "เงินเดือน = ".number_format($salary)."บาท"."<br>";
    echo "-----------------"."<br>";
    echo "ได้รับโบนัส = ".number_format($bonus,2)."บาท"."<br>";
    echo "เงินเดือนสุทธิ = ".number_format($bonus + $salary,2)."บาท"."<br>";


    ?>
</body>
</html>