<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rəqəmi Ədədə Çevirmək</title>
</head>
<body>
    <form action="/" method="POST">
        <input type="number" name="number">
        <button type="submit">Change to String</button>
    </form>
</body>
</html>

<?php

$number = $_POST['number'] ?? 0;
echo $number . "<br>";
echo string_version($number);

 
function string_version($number){
    function  tekli($tekliler)
            {
             $value="";
             switch ($tekliler) {
                    case "0": $value = "sıfır"; break;
                    case "1": $value = "bir"; break;
                    case "2": $value = "iki"; break;
                    case "3": $value = "üç"; break;
                    case "4": $value = "dörd"; break;
                    case "5": $value = "beş"; break;
                    case "6": $value = "altı"; break;
                    case "7": $value = "yeddi"; break;
                    case "8": $value = "səkkiz"; break;
                    case "9": $value = "doqquz"; break;
                     default:return $value;
                }
                return $value;
            }

 
function ikili($ikililer)
            {
                 $value="";
                switch ($ikililer)
                {
                    case "1": $value = "on"; break;
                    case "2": $value = "iyirmi"; break;
                    case "3": $value = "otuz"; break;
                    case "4": $value = "qırx"; break;
                    case "5": $value = "əlli"; break;
                    case "6": $value = "altmış"; break;
                    case "7": $value = "yetmiş"; break;
                    case "8": $value = "səksən"; break;
                    case "9": $value = "doxsan"; break;
                }
                return $value;
            }
 
 
$count=""; 
$birlik=""; 
$onluq=""; 
$yüzlük="";
$minlik="";
$onminlik="";
$yüzminlik=""; 
$milyon=""; 
$milyard="";
$zero = 0;
 
$zero = strlen($number);
   if ($zero == 1) {
$count= tekli($number);
} 

if ($zero == 2)
            {
              $onluq = substr($number,0,1);
              $birlik = substr($number,1,1);
              $count= ikili($onluq);
                if ($birlik!="0") $count.=tekli($birlik);
            }

if ($zero == 3)
            {   
                $yüzlük = substr($number,0,1);
                $onluq = substr($number,1, 1);
                $birlik = substr($number, 2, 1);
 
                if ($yüzlük!="1" && $yüzlük!="0")
                $count= tekli($yüzlük)."yüz";
                if ($yüzlük == "1")
                 $count = "yüz";
 
                if ($onluq != "0")
                    $count .= ikili($onluq);
                if ($birlik != "0")
                    $count .= tekli($birlik);
            }


            if ($zero == 4)
            {
                $minlik = substr($number,0, 1);
                $yüzlük = substr($number,1, 1);
                $onluq  = substr($number,2, 1);
                $birlik = substr($number,3, 1);
 
                if ($minlik != "1")
                    $count = tekli($minlik)."min";
                if ($minlik == "1")
                    $count = "min";
 
                if ($yüzlük != "1" && $yüzlük != "0")
                    $count .= tekli($yüzlük) . "yüz";
                else if ($yüzlük == "1")
                    $count .= "yüz";
                else if ($yüzlük == "0")
                    $count .= "";
 
                if ($onluq != "0")
                    $count .= ikili($onluq);
                if ($birlik != "0")
                    $count .= tekli($birlik);
            }


            if ($zero == 5)
            {
               
                $onminlik = substr($number,0, 1);
                $minlik = substr($number,1, 1);
                $yüzlük = substr($number,2, 1);
                $onluk = substr($number,3, 1);
                $birlik = substr($number,4, 1);
 
                if ($onminlik != "0")
                $count = ikili($onminlik);
 
                if ($minlik != "0")
                    $count .= tekli($minlik) . "min";
                else $count .= "min";
 
 
                if ($yüzlük != "1" && $yüzlük!="0")
                    $count .= tekli($yüzlük) . "yüz";
                else if ($yüzlük == "1")
                    $count .= "yüz";
                else if ($yüzlük == "0")
                    $count .= "";
 
                if ($onluq != "0")
                    $count .= ikili($onluq);
                if ($birlik != "0")
                    $count .= tekli($birlik);
            }


            if ($zero == 6)
            {
 
                $yüzminlik= substr($number,0, 1);
                $onminlik = substr($number,1, 1);
                $minlik = substr($number,2, 1);
                $yüzlük = substr($number,3, 1);
                $onluq = substr($number,4, 1);
                $birlik = substr($number,5, 1);
 
                if ($yüzminlik != "0" && $yüzminlik != "1")
                    $count = tekli($yüzminlik) ."yüz";
                else if ($yüzminlik == "1")
                    $count = "yüz";
                else $count .= "";
               
 
                if ($onminlik != "0")
                    $count .= ikili($onminlik);
                
 
                if ($minlik != "0")
                    $count .= tekli($minlik) . "min";
                else $count .= "min";
 
 
                if ($yüzlük != "1" && $yüzlük != "0")
                    $count .= tekli($yüzlük) . "yüz";
                else if ($yüzlük == "1")
                    $count .= "yüz";
                else if ($yüzlük == "0")
                    $count .= "";
 
                if ($onluq != "0")
                    $count .= ikili($onluq);
                if ($birlik != "0")
                    $count .= tekli($birlik);
            }


if ($zero == 7)
            {
                $milyon = substr($number,0, 1);
                $yüzminlik = substr($number,1, 1);
                $onminlik = substr($number,2, 1);
                $minlik = substr($number,3, 1);
                $yüzlük = substr($number,4, 1);
                $onluq = substr($number,5, 1);
                $birlik =substr($number,6, 1);
 
                if ($milyon != "0")
                    $count = tekli($milyon) . "milyon";
                else $count = "";
 
                if ($yüzminlik != "0")
                    $count .= tekli($yüzminlik) ."yüz";
                else $count .= "";
 
 
                if ($onminlik != "0")
                    $count .= ikili($onminlik);
 
 
                if ($minlik != "0")
                    $count .= tekli($minlik) . "min";
                else $count .= "min";
 
 
                if ($yüzlük != "1" && $yüzlük != "0")
                    $count .= tekli($yüzlük) . "yüz";
                else if ($yüzlük == "1")
                    $count .= "yüz";
                else if ($yüzlük == "0")
                    $count .= "";
 
                if ($onluq != "0")
                    $count .= ikili($onluq);
                if ($birlik != "0")
                    $count .= tekli($birlik);
            }


if ($zero == 8)
            {
                $onmilyon=substr($number,0, 1);
                $milyon = substr($number,1, 1);
                $yüzminlik = substr($number,2, 1);
                $onminlik = substr($number,3, 1);
                $minlik = substr($number,4, 1);
                $yüzlük = substr($number,5, 1);
                $onluq = substr($number,6, 1);
                $birlik =substr($number,7, 1);
 
if ($onmilyon != "0")
                $count = ikili($onmilyon);
 
 
                if ($milyon != "0")
                $count = tekli($milyon) . "milyon";
            else $count = "";

            if ($yüzminlik != "0")
                $count .= tekli($yüzminlik) ."yüz";
            else $count .= "";


            if ($onminlik != "0")
                $count .= ikili($onminlik);


            if ($minlik != "0")
                $count .= tekli($minlik) . "min";
            else $count .= "min";


            if ($yüzlük != "1" && $yüzlük != "0")
                $count .= tekli($yüzlük) . "yüz";
            else if ($yüzlük == "1")
                $count .= "yüz";
            else if ($yüzlük == "0")
                $count .= "";

            if ($onluq != "0")
                $count .= ikili($onluq);
            if ($birlik != "0")
                $count .= tekli($birlik);
        }

if ($zero == 9)
{
$yüzmilyon=substr($a,0, 1);
$onmilyon=substr($a,1, 1);
                $milyon = substr($number,2, 1);
                $yüzminlik = substr($number,3, 1);
                $onminlik = substr($number,4, 1);
                $minlik = substr($number,5, 1);
                $yüzlük = substr($number,6, 1);
                $onluq = substr($number,7, 1);
                $birlik =substr($number,8, 1);
 
if ($yüzmilyon != "0" && $yüzmilyon != "1")
                    $count.= tekli($yüzmilyon) ."yüz";
                else if ($yüzmilyon == "1")
                    $count.= "yüz";
                else $count.= "";
         
 
                if ($onmilyon != "0")
                $count = ikili($onmilyon);
 
 
                if ($milyon != "0")
                $count = tekli($milyon) . "milyon";
            else $count = "";

            if ($yüzminlik != "0")
                $count .= tekli($yüzminlik) ."yüz";
            else $count .= "";


            if ($onminlik != "0")
                $count .= ikili($onminlik);


            if ($minlik != "0")
                $count .= tekli($minlik) . "min";
            else $count .= "min";


            if ($yüzlük != "1" && $yüzlük != "0")
                $count .= tekli($yüzlük) . "yüz";
            else if ($yüzlük == "1")
                $count .= "yüz";
            else if ($yüzlük == "0")
                $count .= "";

            if ($onluq != "0")
                $count .= ikili($onluq);
            if ($birlik != "0")
                $count .= tekli($birlik);
        }
 
 
return $count;
}
?>