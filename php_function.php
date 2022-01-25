<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>
<body>
    <?php
        /*$score = 4.95;
        echo "เกรดของคุณคือ " .round($score);
        $score = 4.95;
        echo "เกรดของคุณคือ " .floor($score);
        */
        /*echo"==================is_numeric=====================<br>";
        $num1 = 1545000;
        $num2 = "12500";
        $num3 = "chinnawat";
        echo "num1 =".is_numeric($num1)."<br>";
        echo "num2 =".is_numeric($num2)."<br>";
        echo "num3 =".is_numeric($num3)."<br>";
        
        echo"==================is_numeric=====================<br>";
        echo "round 4.7 =" .round(4.7)."<br>";
        echo "ceil 4.7 =" .ceil(4.7)."<br>";
        echo "floor 4.7 =" .floor(4.7)."<br>";
        
        echo"==================min max=====================<br>";
        echo "min (4,7,8,3,5,2) = ".min(4,7,8,3,5,2)."<br>";
        echo "max (4,7,8,3,5,2) = ".max(4,7,8,3,5,2)."<br>";
        
        echo"==================rand=====================<br>";
        echo "rand (1,50) = ".rand(1,50)."<br>";
        
        echo"==================is_null=====================<br>";
        $a = null;
        echo "is_null(48)=".is_null($a)."<br>"; 
        
        echo"==================number_format=====================<br>";//สำคัญ///////////////
        $number = 5000;
        echo "number_format 5000 = ".number_format($number)."<br>";
        echo "number_format 5000 = ".number_format($number,2)."<br>";
        
        echo"=======================trim=====================<br>";
        echo "trim = ".trim(" Anuchat ")."<br>";
        echo "ltrim = ".trim(" Anuchat")."<br>";
        echo "rtrim = ".trim("Anuchat ")."<br>";
        
        echo"=======================strtolower,strtoupper=====================<br>";
        echo "strtolower(CHINNAWAT) = ".strtolower("CHINNAWAT")."<br>";
        echo "strtoupper(chinnawat) = ".strtoupper("chinnawat")."<br>";
        
        echo"=======================substr=====================<br>";
        $text = "chinnawat Naainkham";
        echo "substr(chinnawat Naainkham) = ".substr($text,9,11)."<br>";
        
        echo"=======================substr_count=====================<br>";
        echo "substr_count(chinnawat Naainkham) = ".substr_count($text, "n")."<br>";

        echo"=======================strlen=====================<br>";
        echo "strlen(chinnawat Naainkham) = ".strlen($text)."<br>";

        echo"=======================MD5=====================<br>";//สำคัญ//////////////
        $password = 1234;
        echo"MD5(1234) = ".md5($password)."<br>";

        echo"======================date=====================<br>";
        echo"date(d-m-y) = ".date('d-m-y')."<br>";
        echo"date(d/m/y) = ".date('d/m/y')."<br>";
        echo"date(d/m/y) = ".date('d/m/Y')."<br>";
        
        echo"date(d) = ".date('d')."<br>";
        echo"date(m) = ".date('m')."<br>";
        echo"date(Y) = ".date('Y')."<br>";
        echo"date(Y) = ".date('Y')+543;
        */
        $date = date("ํY-m-d");
        $e = explode("-",$date);
        echo"date(d/m/y) = ".date('d/m/Y')."<br>";
        echo "Year = ".$e[0]." / Month = ".$e[1]." / Day = ".$e[2]."<br>";

        echo"===========================================<br>";





        echo "strtolower(CHINNAWAT NAAINKHAM) = ".strtolower("CHINNAWAT NAAINKHAM")."<br>";
        echo "strtoupper(chinnawat naainkham) = ".strtoupper("chinnawat naainkham")."<br>";
        $text = "chinnawat Naainkham";
        echo "substr(chinnawat Naainkham) = ".substr($text,9,11)."<br>";

        echo"===========================================<br>";
        echo "rand (1,50) = ".rand(1,50)."<br>";
        echo"===========================================<br>";
        $date = date("d-m-Y");
        $e = explode("-",$date);
        echo"date(d/m/y) = ".date('d/m/Y')."<br>";
        echo "วันอังคารที่  ".$e[0]." เดือน ธันวาคม  ".$e[1]." พ.ศ. 2564  ".$e[2]."<br>";
        echo"===========================================<br>";
        $text = "Hello";
        $H = substr("$text", 0, 1);
        $ello = substr("$text", 1, 4);
        echo chr(ord($H)+32),chr(ord($ello[0])-32),chr(ord($ello[1])-32),chr(ord($ello[2])-32),chr(ord($ello[3])-32);
        echo"===========================================<br>";
        
        
    function thai_date($time)
    {
        $thai_day_arr = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
        $thai_month_arr = array(
            "0" => "",
            "1" => "มกราคม",
            "2" => "กุมภาพันธ์",
            "3" => "มีนาคม",
            "4" => "เมษายน",
            "5" => "พฤษภาคม",
            "6" => "มิถุนายน",
            "7" => "กรกฎาคม",
            "8" => "สิงหาคม",
            "9" => "กันยายน",
            "10" => "ตุลาคม",
            "11" => "พฤศจิกายน",
            "12" => "ธันวาคม"
        );
        $thai_date = "วัน" . $thai_day_arr[date("w", $time)];
        $thai_date .= " ที่ " . date("j", $time);
        $thai_date .= " เดือน " . $thai_month_arr[date("n", $time)];
        $thai_date .= " พ.ศ. " . (date("Y", $time) + 543);
        return $thai_date;
    }
    $th_date = time();
    echo thai_date($th_date);
    
    
    function checks($price){
        if ($price < 0 ){
            echo "กรอกตัวเลขไม่ถูกต้อง";
            return;
        }
        else {
            echo "กรอกตัวเลขไม่ถูกต้อง";
            return;
        }
    }
    $checking = checks(-10);
    echo $checking;

    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
    
</body>
</html>