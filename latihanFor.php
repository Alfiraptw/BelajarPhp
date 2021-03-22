<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="">
<?php
     for ($i=1900; $i <= 2021 ;$i++){ 
?>
        <option value="<?=$i;?>" 
           <?php if($i==1998){ echo"selected";}?>>
            <?=$i;?>
         </option>
            <?php } ?> 
    </select> 

 <?php 
    for ($i=1; $a<=5;$a++){
        for ($i=1; $i<=$a;$i++){
            echo "*";
        }
        echo "<br>";
    }
?>

<?php 
    for($i=1; $i<=5;$i++){
        for($j=$i;$j>=1;$j--){
            $a = $i;
            $b = $j;
            if($a==3 && $b==2){
             echo "x";
                $j--;
            }
            echo $i;
        }
        echo "<br>";
    }
?>
<!-- cara bapak -->
<?php
    for($a=1;$a<=5;$a++){
        for($b=1;$b<=$a;$b++){
            if($a==3 && $b==2){
                echo "x";
            }else{
                echo $a;
            }
        }
        echo "<br>";
    }
?> -->
<!-- cara bapak

</body>
</html>
