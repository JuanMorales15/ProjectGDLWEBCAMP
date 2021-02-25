<?php
    /*Existen muchas formas de realizar una conexion de PHP a una BD de MYSQL
    Las principasles es :
        1.-bd
        2.-PDO
        3.-POO
    */
    
    //1.-Mysqli
        /*Como podemos ver, usamos el metodo mysqli_connect el cual nos pide los siguientes parametros 
        (localhost,usuario,passsword,base de datos)*/
        // $db= mysqli_connect('localhost','root','root','gdlwebcamp');
        /*Esto devolvera true si la conexion fue exitosa y si no sera un false

        Aqui validamos si la conexion devuelve false, se muestra el mensaje de error*/
        // if(!$db){
        //     echo "Error al conectar a la BD";
        //     exit;
        // }
    
    //POO
        /*En este caso, hacemos uso del estilo orientado a objetos, en donde creamos una nueva instancia a la 
        clase mysqli */
        /*La clase msqli nos pide que mandemos los mismos parametros al constructor */
        $db = new mysqli('localhost','root','root','gdlwebcamp');

        // En php para poder accer a las propiedades y metodos de la clase, usamos la clave ->, en c# es un .
        if($db->connect_error){
            echo "Failed to connect to db: " . $DB -> connect_error;
        }
        if (!mysqli_set_charset($db, "utf8")) 
        {
          printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($link));

        }
?>