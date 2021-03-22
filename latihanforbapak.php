<?php
    $baris= $_POST['baris'];
    for($a=1;$a<=$baris;$a++){
        for($b=1;$b<=$a;$b++){
            if($a==3 && $b==2){
                echo "x";
            }else{
                echo $a;
            }
        }
        echo "<br>";
    }
?> 