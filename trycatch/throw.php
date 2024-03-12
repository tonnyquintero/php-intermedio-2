<?php


try {
    //code...
    $pet = readline("Que quieres adoptar? ");

    if ($pet != "michi" && $pet != "conejo" ) 
        throw new Exception("Lo sentimos, no tenemos $pet en este centro de adopción");

    echo "Felicidades por tu nuevo $pet";
    
    

} catch (Throwable $e) {
    echo $e->getMessage();
    //throw $th;
}