<?php
$day = date ("D");
switch($day){
        case "Sun":
        $hari_ini = "Minggu";
    break;
        case "Mon":
        $hari_ini = "Senin";
    break;
    case "Tue":
        $hari_ini = "Selasa";
    break;
        case "Wed":
        $hari_ini = "Rabu";
    break;
    case "Thu":
        $hari_ini = "Kamis";
    break;
        case "Fri":
        $hari_ini = "Jumat";
    break;
    case "Sat":
        $hari_ini = "Sabtu";
    break;
    }
    echo "$hari_ini"
?>

    