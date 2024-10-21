<?php
    //unseet elimina variable o array 
    $var = 1;
    if (isset($var)){
        print("la variable esta inicializada por lo tanto no es null. Su valor es:".$var);
        }else{
            print("la variable no esta configurada");
        }
        unset($var);
        echo "<br>";
        if (isset($var)){
            print("la variable esta inicializada por lo tanto no es null. Su valor es:".$var);
            }else{
                print("la variable no esta configurada");
            }
?>
