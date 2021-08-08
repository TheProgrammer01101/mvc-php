<?php $this->view("minima/components/head", $data); ?>


<body>

  <div class="wrapper light">
  <?php $this->view("minima/components/menu", $data); ?>

  <?php $this->view("minima/components/nav", $data); ?>

    <div class="content grid" id="kontakt">
      <header id="kontakt">
        <img src="icons/kontakt-icon.svg" alt="">
        <h1>Kontakt Und Standort</h1>
      </header>

      <article class="paragraph" id="kontakt">
        <span>Kommen Sie persönlich in unserem Restaurant vorbei oder kontaktieren Sie uns auch gerne telefonisch. Wir stellen stets sicher, dass wir Ihnen großartigen Service bieten.</span>
      </article>

      <section id="kontakt">
        <a href="tel: 04381 9028930" class="btn" id="tel"><img src="icons/phone-icon.svg" alt="">04381 9028930</a>
        <a href="https://g.page/Dekawt?share" class="btn" id="loc"><img src="icons/map-icon.svg" alt="">Oberstraße 12,
          24321 Lütjenburg</a>
        <a href="mailto: rhodos.restaurant@web.de" class="btn"><img src="icons/email.svg" alt="">rhodos.restaurant@web.de</a>
        <a href="https://www.fb.com/Rhodos-l%C3%BCtjenburg-107158127869376" target="_blank" class="btn"><img src="icons/fb.svg" alt="">Rhodos Lütjenburg</a>
      </section>

      <div id="preload" class="active">
        <img src="icons/round-frame.svg" alt="">
        <h1>Bitte warten,<br>Karte laden..</h1>
      </div>
      <iframe id="map"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9314.646825600754!2d10.5868587!3d54.2922491!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x39781fe7ce9c2748!2sRESTAURANT%20RHODOS!5e0!3m2!1sen!2sde!4v1610359915895!5m2!1sen!2sde"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
    </div>
    <?php $this->view("minima/components/footer", $data); ?>
</body>

</html>