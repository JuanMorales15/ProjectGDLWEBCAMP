<?php


/*Creamos una funcion que nos retorne los eventos */
function getEvents(){
    try {
        /*Para realizar una consulta se necesitan tres pasos

        1.-Importar una conexion*/
            /*Siempre se debe de importar la conexion, cada vez que se quiera usar una tabla*/
            require "bd_connection.php";

            /*SOLO PARA PROBAR QUE NOS APARECE--------------
            Si la conexion fue exitosa, se imprimira 1, si no se mandara un mensaje de error */
            // echo require "bd_connection.php";
        
       //2.-Escribir el codigo SQL
            //Guardamos en una variable la consulta que haremos a la BD
            $sql = "SELECT event_id,event_name, event_date, event_time, icon, category_name, user_name, user_surname
            From events AS E 
            INNER JOIN categories AS C ON E.id_cat_event = C.category_id
            INNER JOIN guests AS G ON E.id_user_event = G.user_id
            ORDER BY event_id;";

            /*La función query () / mysqli_query () realiza una consulta en una base de datos.
                1-.Forma procedimental */
                    // $answer=mysqli_query($db,$sql);
            /*  2-.Forma POO */
                    $answer=$db->query($sql);
                    /* ¿Por que db?
                    Por que estamos haciendo uso de la instancia que se creo en bd_conection
                    esto nos permite hacer uso de los metodos de la clase instanciada.
                    
                    con la instancia hacemos uso del metodo query el cual le mandamos como parametro la consulta 
                    */
            
            /*SOLO PARA PROBAR QUE NOS APARECE--------------
            con lo suiguiente podemos ver la info de la tabla, por ejem:
            numero de columnas, numero de filas,longitud,tipo, etc. 
            NOTA* No nos devuelve los registros, solo las caracteristicas de la tabla consultada*/
                // echo "<pre>";
                //     var_dump($answer);
                // echo "</pre>";

            // echo "<hr>";//===============================================//

            /*SOLO PARA PROBAR QUE NOS APARECE--------------
            Cuando ya tenemos la respuesta de sql, podemos usar varios metodos, el cual nos mostrara ya 
            detalladamente los datos*/ 
            /*1.-mysqli_fetch_assoc= nos devuelve el array asociativo, con sus nombres en las llaves
            Solo se imprme uno para usar todos los registros se necesita un While
            La función fetch_assoc () / mysqli_fetch_assoc () obtiene una fila de resultados como una matriz asociativa.*/
                // echo "<pre>";
                //     print_r($row=mysqli_fetch_assoc($answer));
                // echo "</pre>";

            /*2.-mysqli_fetch_all nos devuelve el arreglo correcto, con sus arrays asociados.
            La desventaja es que las key las coloca con numeros y no con el nombre que debe de traer*/
                // echo "<pre>";
                //     print_r($row=mysqli_fetch_all($answer));
                // echo "</pre>";

            /*3.-mysqli_fetch_array nos devuelve un array pero cada posicion anidada la vuelve una 
            posicion del array padren, no nos respeta los arrays asociados*/
                // echo "<pre>";
                //     print_r($row=mysqli_fetch_array($answer));
                // echo "</pre>";

        //3.-Obtener los resultados
                /*SOLO PARA APENDER
                Para acceder a solo un registro, por ejemplo el nombre, hacemos lo siguiente*/
                // while($row = $answer -> fetch_assoc()){
                //     echo $row['event_name'];
                // }
                /*El bucle recorrera todas las filas y nos traera todos los nombres de cada registro */

                /*Para que nos imprima todo, lo podemos hacer de la siguiente manera */
                // while($row = $answer -> fetch_assoc()){
                //     echo "<pre>";
                //         var_dump($row);
                //     echo "</pre>";
                // }
                /*Aunque la el bucle esta correcto, si nos trae todos los registros, pero con un graver error
                cada registro o fila tiene un array, esto nos indica que no estamos teniendo un array asociativo.
                Esto nos imprime:
                array(7) {
                    ["event_id"]=> string(1) "1"
                    ["event_name"]=> string(21) "Responsive Web Design"
                }
                array(7) {
                    ["event_id"]=> string(1) "2"
                    ["event_name"]=> string(21) "Flexbox"
                }
                Como podemos ver, cada registro es un array diferente, y necesitamos el array asociado

                Para poder tener un array asociativo, podemos haerlo de las diferentes maneras:
                NOTA*** Debemos de anidar los objetos de acuerdo a su fecha, en pocas palabras,
                la fecha "tal" debe de tener todos los registros que pretencen a ella 

                Forma 1.-Crear un Arrray el cual tendra los arrays asociativos    */
                    $events= [];
                    $i=0;
                    while($row = $answer -> fetch_assoc()){
                        $date=$row['event_date'];
                        $events[$date][$i]['event_id']=$row['event_id'];
                        $events[$date][$i]['event_name']= $row['event_name'];
                        $events[$date][$i]['event_date']=$date;
                        $events[$date][$i]['event_time']=$row['event_time'];
                        $events[$date][$i]['icon']=$row['icon'];
                        $events[$date][$i]['category_name']=$row['category_name'];
                        $events[$date][$i]['user_name']=$row['user_name'];
                        $events[$date][$i]['user_surname']=$row['user_surname'];
                        $i++;
                    }
                    
                    // echo "<pre>";
                    //     var_dump($events);
                    // echo "</pre>";

                    /*========================Como lo hace el tutor======================*/
                        // $events= [];
                        // while($row = $answer -> fetch_assoc()){
                        //     $event = array (
                        //         'event_id'=>$row['event_id'],
                        //         'event_name'=>$row['event_name'],
                        //         'event_date'=>$row['event_date'],
                        //         'event_time'=>$row['event_time'],
                        //         'category_name'=>$row['category_name'],
                        //         'user_name'=>$row['user_name'],
                        //         'user_surname'=>$row['user_surname']
                        //     );
                        //     $events[$row['event_date']][]=$event;
                            
                        // }
                        
                        // echo "<pre>";
                        //     print_r($events);
                        // echo "</pre>";

                //Forma 2.-Hacer uso de fetch_all y como parametros indicar que se anidara en tipo asociado
                    // echo "<pre>";
                    //     var_dump($events=$answer->fetch_all(MYSQLI_ASSOC));
                    // echo "</pre>";
                
            // return json_encode($events);
            return $events;
            $db->close(); 
           
    } catch (\Throwable $th) {
        var_dump($th);
    }
}

/*Creamos una funcion que nos retorne los eventos */
function getGuest(){
    try {
        require "bd_connection.php";

        $sql = "SELECT * FROM guests";
        
        $answer=$db->query($sql);                    
        
        $guests=$answer->fetch_all(MYSQLI_ASSOC);
                   
        return $guests;
        $db->close();    
    } catch (\Throwable $th) {
        var_dump($th);
    }
}
?>
