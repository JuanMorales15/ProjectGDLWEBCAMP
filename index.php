<?php include_once("includes/templates/header.php"); ?>
  <section class="container new-section">
    <h2>La mejor conferencia de diseño web del mundo</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur iusto debitis ea architecto hic facere
      reiciendis doloremque accusantium beatae dolores culpa rem necessitatibus repellendus alias voluptatum
      dolorum,
      quasi officia nam</p>
    <h2>Galería de fotos</h2>
    <div class="container-galery">
      <div>
        <a href="img/galeria/01.jpg" data-lightbox="roadtrip">
          <img src="img/galeria/01.jpg"  alt="gallery1">
        </a>
      </div>
      <div>
        <a href="img/galeria/02.jpg" data-lightbox="roadtrip">
          <img src="img/galeria/02.jpg"  alt="gallery2">
        </a>
      </div>
      <div>
        <a href="img/galeria/03.jpg" data-lightbox="roadtrip">
          <img src="img/galeria/03.jpg"  alt="gallery3">
        </a>
      </div>
      <div>
        <a href="img/galeria/04.jpg" data-lightbox="roadtrip">
          <img src="img/galeria/04.jpg"  alt="gallery4">
        </a>
      </div>
      <div>
        <a href="img/galeria/05.jpg" data-lightbox="roadtrip">
          <img src="img/galeria/05.jpg"  alt="gallery5">
        </a>
      </div>
      <div>
        <a href="img/galeria/06.jpg" data-lightbox="roadtrip">
          <img src="img/galeria/06.jpg"  alt="gallery6">
        </a>
      </div>
      <div>
        <a href="img/galeria/07.jpg" data-lightbox="roadtrip">
          <img src="img/galeria/07.jpg"  alt="gallery7">
        </a>
      </div>
      <div>
        <a href="img/galeria/08.jpg" data-lightbox="roadtrip">
          <img src="img/galeria/08.jpg"  alt="gallery8">
        </a>
      </div>
    </div>        
  </section>
  <div class="father-video">
    <video autoplay muted loop poster="img/bg-talleres.jpg">
      <source src="/video/video.mp4" type="video/mp4"></source>
      <source src="/video/video.ogv" type="video/ogv"></source>
      <source src="/video/video.webm" type="video/webm"></source>
      Your browser does not support HTML5 video.
    </video>
    <section class="container-video">
      <h2>Programa del evento</h2>
      <nav class="menu-video">
        <a href="#workshops"><i class="fas fa-code"></i>Talleres</a>
        <a href="#conference"><i class="fas fa-comments"></i>Conferencias</a>
        <a href="#seminars"><i class="fas fa-university"></i>Seminarios</a>
      </nav>
      <div class="container-description">
        <div class="hide" id="workshops">
          <div class="description-video">
            <h3>HTML5, CSS3 y JavaScript</h3>
            <p><i class="far fa-clock"></i>14:00 hrs</p>
            <p><i class="fas fa-calendar-alt"></i>10 de DIC.</p>
            <p><i class="fas fa-user"></i>Juan Carlos Ruedas</p>
          </div>
          <div class="description-video">
            <h3>Responsive Web Design</h3>
            <p><i class="far fa-clock"></i>14:00 hrs</p>
            <p><i class="fas fa-calendar-alt"></i>10 de DIC.</p>
            <p><i class="fas fa-user"></i>Juan Carlos Ruedas</p>
          </div>
          <div class="container-button">
            <a class="button button-orange" href="#">Ver todos</a>
          </div>
        </div>
        <div class="hide" id="conference">
          <div class="description-video">
            <h3>Como ser freelancer</h3>
            <p><i class="far fa-clock"></i>10:00 hrs</p>
            <p><i class="fas fa-calendar-alt"></i>10 de DIC.</p>
            <p><i class="fas fa-user"></i>Arizbeth Danae Nuñez</p>
          </div>
          <div class="description-video">
            <h3>Tecnologias del futuro</h3>
            <p><i class="far fa-clock"></i>17:00 hrs</p>
            <p><i class="fas fa-calendar-alt"></i>10 de DIC.</p>
            <p><i class="fas fa-user"></i>Maria del Refugio Morales</p>
          </div>
          <div class="container-button">
            <a class="button button-orange" href="#">Ver todos</a>
          </div>
        </div>
        <div class="hide" id="seminars">
          <div class="description-video">
            <h3>Diseño UI/UX para moviles</h3>
            <p><i class="far fa-clock"></i>17:00 hrs</p>
            <p><i class="fas fa-calendar-alt"></i>11 de DIC.</p>
            <p><i class="fas fa-user"></i>Vallolet Miranda Galvan</p>
          </div>
          <div class="description-video">
            <h3>Aprende a programar en una mañana</h3>
            <p><i class="far fa-clock"></i>10:00 hrs</p>
            <p><i class="fas fa-calendar-alt"></i>10 de DIC.</p>
            <p><i class="fas fa-user"></i>Juan Manuel Ramirez </p>
          </div>
          <div class="container-button">
            <a class="button button-orange" href="#">Ver todos</a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="container new-section">
    <h2>Nuestros invitados</h2>
    <ul class="guest-list">
      <?php require_once('includes/functions/function.php');
        $arrayGuests = getGuest();
        foreach($arrayGuests as $date => $guests):?>
        <li>
        <div class="content-invitado">
          <a class="name-guest" href="#invitado<?php echo $guests['user_id']?>">
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
  <div class="summary parallax">
    <div class="container-summary new-section">
      <div class="content-summary">
        <p class="number"></p>
        <p>invitados</p>
      </div>
      <div class="content-summary">
        <p class="number"></p>
        <p>talleres</p>
      </div>
      <div class="content-summary">
        <p class="number"></p>
        <p>dias</p>
      </div>
      <div class="content-summary">
        <p class="number"></p>
        <p>conferencias</p>
      </div>
    </div>
  </div>
  <section class="container new-section">
    <h2>Precios</h2>
    <div class="grid container-price">
      <div class="containers-clear content-price">
        <h3 class="tittle-price">pase por dia</h3>        
        <p class="price">$30</p>
        <div class="inf-price">
          <p><i class="fas fa-check"></i>bocadillos gratis</p>
          <p><i class="fas fa-check"></i>todas las conferencias</p>
          <p><i class="fas fa-check"></i>todos los talleres</p>
        </div>
        <div class="container-button-price">
          <a href="#" class="button button-price">Comprar</a>
        </div>    
      </div>
      <div class="containers-clear content-price">
      <h3 class="tittle-price">todos los dias</h3>
        <p class="price">$50</p>
        <div class="inf-price">
          <p><i class="fas fa-check"></i>bocadillos gratis</p>
          <p><i class="fas fa-check"></i>todas las conferencias</p>
          <p><i class="fas fa-check"></i>todos los talleres</p>
        </div>    
        <div class="container-button-price">
          <a href="#" class="button button-price">Comprar</a>
        </div>    
      </div>
      <div class="containers-clear content-price">
      <h3 class="tittle-price">pase por 2 dias</h3>
        <p class="price">$45</p>
        <div class="inf-price">
          <p><i class="fas fa-check"></i>bocadillos gratis</p>
          <p><i class="fas fa-check"></i>todas las conferencias</p>
          <p><i class="fas fa-check"></i>todos los talleres</p>
        </div>
        <div class="container-button-price">
          <a href="#" class="button button-price">Comprar</a>
        </div>            
      </div>
    </div>
  </section>
  <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.780374252675!2d-100.27209938543086!3d25.678574183674524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86629557ddd9d141%3A0xe69d6d89e9e0e6d3!2sIndependencia%201019%2C%20Esmeralda%2C%2067140%20Guadalupe%2C%20N.L.!5e0!3m2!1ses-419!2smx!4v1606411622102!5m2!1ses-419!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
 </div>
<section class="container new-section">
  <h2>Testimoniales</h2>
  <div class="grid container-testimonials">
    <div class="containers-clear">
      <blockquote class="text-testimony">
        <i class="fas fa-quote-left"></i>
        <p>Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor,
        </p>
      </blockquote>
      <footer class="container-user">
        <div class="colum-4">
          <img src="img/testimonial.jpg" alt="">
        </div>
        <div class="colum-8">
          <h3>Oswaldo Aponte Escobedo</h3>
          <p>Diseñador en @prisma</p>
      </footer>
    </div>
    <div class="containers-clear">
      <blockquote class="text-testimony">
        <i class="fas fa-quote-left"></i>
        <p>Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor,
        </p>
      </blockquote>
      <footer class="container-user">
        <div class="colum-4">
          <img src="img/testimonial.jpg" alt="">
        </div>
        <div class="colum-8">
          <h3>Oswaldo Aponte Escobedo</h3>
          <p>Diseñador en @prisma</p>
      </footer>
    </div>
    <div class="containers-clear">
      <blockquote class="text-testimony">
        <i class="fas fa-quote-left"></i>
        <p>Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor,
        </p>
      </blockquote>
      <footer class="container-user">
        <div class="colum-4">
          <img src="img/testimonial.jpg" alt="">
        </div>
        <div class="colum-8">
          <h3>Oswaldo Aponte Escobedo</h3>
          <p>Diseñador en @prisma</p>
      </footer>
    </div>
  </div>
</section>
 <div class="registry parallax">
    <p>registrate al newsletter:</p>
    <p class="h1">GDLWEBcamp</p>
    <div class="container-btn-registry">
      <a href="#" class="button-registry button">Registro</a>
    </div>
</div>
<div class="new-section">
  <h2>faltan</h2>
  <div class="container-timer">
    <div class="content-timer">
      <p class="number"></p>
      <p>Dias</p>
    </div>
    <div class="content-timer">
      <p class="number"></p>
      <p>Horas</p>
    </div>
    <div class="content-timer">
      <p class="number"></p>
      <p>Minutos</p>
    </div>
    <div class="content-timer">
      <p class="number"></p>
      <p>Segundos</p>
    </div>
  </div>
</div>
<?php include_once("includes/templates/footer.php"); ?>