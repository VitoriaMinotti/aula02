<?php

    echo "Meu nome é Jonny";
    echo "<h1>Função Nativa Echo</h1>";
    echo "<br>";
    echo "Bem vindo";

    echo "<h4></h4>";
    $nota1 = 7.5;
    $nota2 = 8;
    $texto = "minha média é:";
    $media = ($nota1 + $nota2)/2;

    $texto = $texto.$media;
    echo $texto;

    if($media >=6){
        echo "Aprovado";
    }
    else if($media < 6  && $media >+2)
    {
        echo " Tem chance de recuperar";
    }
    else{
        echo "reprovado";
    }

    $contadora = 0;
    do{
        echo "<br>teste".$contadora;
        $contadora ++;
    } while ($contadora < 10);

    echo "<br><br>While:<br>";
    while ($contadora <150) {
        if ($contadora % 2 == 0){
            echo $contadora."é número par <br>";
        }else {
            echo $contadora."é número impar <br>";
        }
        $contadora++;
    }
     echo "<table border='5' style ='padding:5px'>";
     for ($i=0; $i < 25 ; $i++){
         echo "<tr>";
         echo "<td> Nome ".$i."</td>";
         echo "<td> Idade ".$i."</td>";
         echo "</tr>";
     }
     echo "</table>";

?>