<?php include_once("includes/templates/header.php"); ?>
  <main class="container new-section">    
      <h2>calendario de eventos</h2>
      <div class="container-calendary">
        <?php require_once('includes/functions/function.php');
        $arrayEvents = getEvents();
        foreach($arrayEvents as $date => $events):?>
            <div class="tittle-calendary">
                <?php   
                $dates = strtotime($date);
                $formatDate = date('d-m-Y', $dates);
                ?>
                <h3><i class="fas fa-calendar-alt"></i><?php echo $formatDate;?></h3>
            </div>
            <?php foreach($events as $event):?>
              <div class="content-calendary containers-clear">
              <h3><?php echo $event['event_name'];?></h3>
                <p><i class="far fa-clock"></i><?php echo $event['event_date']. " " .$event['event_time'];?></p>
                <p><i class="fas <?php echo $event['icon'];?>"></i><?php echo $event['category_name'];?></p>
                <p><i class="fas fa-user"></i><?php echo $event['user_name']. " " .$event['user_surname'];;?></p>
              </div>
            <?php endforeach;?>
        <?php endforeach;?>
      </div>
  </main>
<?php include_once("includes/templates/footer.php"); ?>