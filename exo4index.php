<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEECICE 3</title>

</head>
<body>
<center>
<form method="POST" action="" >
    
            <h4>Saisir des mots</h4> 
            <textarea name="mot"  cols="40" rows="10"></textarea> <br><br>  
            <input type="submit" name="numero" value="valider">
        
        </form>
</center>
    </body>

<?php

function nombrdecaractere ($n) {
    if (strlen($n) <=200){
    $bool=true ;
    
    }
    else {
    $bool=false;}
    
    return $bool;
    }
    function tableau ($t , array $tab) {
        $letter="/m/i";
        $k=0;
        $tableau=explode(" ",$t);
        $a= count($tableau);
        for ($i=0; $i<$a; $i++){
            if (nombrdecaractere(@$tableau[$i])){
                if (!filter_var(@$tableau[$i],FILTER_SANITIZE_NUMBER_INT)){
                    $tab=@$tableau[$i];
                    echo $tab. ' ';
                }
                if (preg_match($letter,@$tableau[$i])){
                    $k=$k+1;
                }
            }else{
                echo 'Le nombre de caractere saisi doit etre inferieur ou egal a 20';
            }
    
    ?>
    </html>