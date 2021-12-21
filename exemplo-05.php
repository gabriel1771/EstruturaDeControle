<?php

$condicao = true;

while ($condicao) {
    
   $numero = rand(1, 10);

   if ($numero === 3) {
       echo "TRÊSSS !!!! ";
       $condicao = false;
   }
   
   echo $numero ." ";

}

?>