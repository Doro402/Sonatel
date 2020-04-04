 <?php


$message='';


?>
 
 
 <!DOCTYPE html>
        <head>
        <title></title>
        </head>
 <body>
     <form method="POST">
         <label for="m"entrer le nombre de champs></label>
     <input type="text" name="nbre" placeholder="entrer NOMBRE DE CHAMPS">
     <p style='color:blue;'><?=$message?></p>
     <input type="submit" value= "valider" name="valider"> <br><br>
     <?php for ($i=0;$i<$nombreChamps;$i++){?>
        <laber for= "m"> Mot numero<?=$i+1?></label>
        <input type="text" name="mots_<?= $i ?>"autocomplete="off">
        <?php }?>
        <?php if($nombreChamps>0) { ?>
            <button type="submit" name="resultat"> Resultats </button>
            <?php }?>
     </form>
 </body>

