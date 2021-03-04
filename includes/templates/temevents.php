<?php 
        require_once('includes/functions/function.php');
        require "includes/functions/bd_connection.php";

        $sql=getMenEvents();

        $db-> multi_query($sql);

        do{
            $row=$db->store_result();
            $answer=$row->fetch_all(MYSQLI_ASSOC);?>

            <?php $i=0;
            foreach($answer as $event):?>
                <?php if($i == 0 || $i ==2 || $i==4){?>
                <div class="hide" id="<?php echo $event['category_name']?>">
                <?php }?>
                    <div class="description-video">
                        <h3><?php echo $event['event_name']?></h3>
                        <p><i class="far fa-clock"></i><?php 
                        $times = strtotime($event['event_time']);
                        $formattime = date('H:i', $times);
                        echo $formattime?> hrs.</p>
                        <p><i class="fas fa-calendar-alt"></i><?php
                        $dates = strtotime($event['event_date']);
                        $formatDate = date('d-m-Y', $dates);
                        echo $formatDate?></p>
                        <p><i class="fas fa-user"></i><?php echo $event['user_name'].' '.$event['user_surname']?></p>
                    </div>
                <?php if($i == 1 || $i ==2 || $i==5):?>
                    <div class="container-button">
                        <a class="button button-orange" href="calendar.php">Ver todos</a>
                    </div>
                </div>
                    <?php endif;?>
                <?php $i++?>
            <?php endforeach;?>
            <?php $row->free();?>
        <?php } while($db->more_results() && $db->next_result());
?>