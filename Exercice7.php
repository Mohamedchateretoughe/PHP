<?php 
/*
    A Faire
     Exercice7:
     Initialiser quatre variables  puis les ranger
      dans l'ordre decroissant
*/

$nb1=rand(-40,40);
$nb2=rand(-40,40);
$nb3=rand(-40,40);
$nb4=rand(-40,40);

$min=null;
$moy=null;
$moy1=null;
$max=null;


if($nb1>$nb2){
    $min=$nb2;
    $max=$nb1;
}else{
    
    $min=$nb1;
    $max=$nb2;
}

if($nb3<$min){
    $moy=$min;
    $min=$nb3;
}else{
    
    if($nb3<$moy1){
        $moy=$nb3;

    }else{
        $moy=$moy1;
        $max=$nb3;
    }

    if($nb4<$moy1){
        $moy=$moy1;
        $min=$nb4;
    }else{
    
    if($nb4<$moy1){
        $moy1=$nb4;
    }else
        $moy=$moy1;
        $max=$nb4;
        }

}
echo "$max,$moy1,$moy,$min";




/*
        fonction emailValide qui teste si un email est valide ou pas
*/
 fonction emailValide($mail){
     if(filter_var($mail)) {
         echo "l'adresse mail '$mail' est valide.";
    } else {
        echo "l'adresse mail '$mail' est invalide.";
    }
}
 
echo "Appel de la fonction emailValide($mail)";
$mail="chater@gmail.com";



/*
    //Creer une fonction qui convertit le premier caractere d'une chaine en majuscule
    //et tous les autres caracteres en minuscules
//ucfirst($chaine):convertit le premier caractere en Majuscule
*/
    $caramajus="je suis etudiant d'ism";
    $caramajus= ucfirst($caramajus);
echo "".ucfirst($caramajus);

?>




    










