<?php

    function getEvents(){
        try {
            require "bd_connection.php";
            
            $sql = "SELECT event_id,event_name, event_date, event_time, icon, category_name, user_name, user_surname
                From events AS E 
                INNER JOIN categories AS C ON E.id_cat_event = C.category_id
                INNER JOIN guests AS G ON E.id_user_event = G.user_id
                ORDER BY event_id;";
                
            $answer=$db->query($sql);
            
            //we save all the records in a single object
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
                        
            return $events;
            $db->close(); 
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

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

    function getCategory(){
        try {
            require "bd_connection.php";

            $sql = "SELECT * FROM categories";
            
            $answer=$db->query($sql);                    
            
            $category=$answer->fetch_all(MYSQLI_ASSOC);
            
            return $category;
            $db->close();    
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    function getMenEvents(){
        try {
            $sql = "SELECT category_name, event_name, event_date, event_time, user_name, user_surname 
                    FROM events AS E 
                    INNER JOIN guests AS G ON E.id_user_event=G.user_id
                    INNER JOIN categories as C ON C.category_id=E.id_cat_event
                    WHERE C.category_name='talleres' AND E.event_date='2016-12-11' LIMIT 2;";

            $sql.= "SELECT category_name, event_name, event_date, event_time, user_name, user_surname 
                    FROM events AS E 
                    INNER JOIN guests AS G ON E.id_user_event=G.user_id
                    INNER JOIN categories as C ON C.category_id=E.id_cat_event
                    WHERE C.category_name='conferencias' AND E.event_date='2016-12-11' LIMIT 2;";
            
            $sql.= "SELECT category_name, event_name, event_date, event_time, user_name, user_surname 
                    FROM events AS E 
                    INNER JOIN guests AS G ON E.id_user_event=G.user_id
                    INNER JOIN categories as C ON C.category_id=E.id_cat_event
                    WHERE C.category_name='seminarios' AND E.event_date='2016-12-11' LIMIT 2;";

            return $sql;          
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
?>
