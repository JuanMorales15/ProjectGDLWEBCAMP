<section class="container new-section">
    <h2>Nuestros invitados</h2>
    <ul class="guest-list">
      <?php require_once('includes/functions/function.php');
        $arrayGuests = getGuest();
        foreach($arrayGuests as $date => $guests):?>
        <li>
          <div class="content-guests">
            <a class="guest-id" href="#invitado<?php echo $guests['user_id']?>">
              <img class="img-guets" src="img/<?php echo $guests['url_picture'];?>" alt="guests2">
              <p class="guest-name"><?php echo $guests['user_name'].' '.$guests['user_surname'];?></p>
            </a>
          </div>
          <div style="display: none;">
            <div id="invitado<?php echo $guests['user_id']?>">
              <h2><?php echo $guests['user_name'].' '.$guests['user_surname'];?></h2>
              <img class="img-guets" src="img/<?php echo $guests['url_picture'];?>" alt="guests2">
              <p><?php echo $guests['description'];?></p>          
            </div>
          </div>
        </li>
        <?php endforeach;?>
    </ul>
  </section>