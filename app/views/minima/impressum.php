<?php $this->view("minima/components/head", $data); ?>


<body>

  <div class="wrapper light">
  <?php $this->view("minima/components/menu", $data); ?>

  <?php $this->view("minima/components/nav", $data); ?>

    <div class="content" id="impressum">
      <header id="impressum">
        <h1>Impressum</h1>
        <p>
          Name: Rezha M Rashid Abdulsamad 
          <br>
          Address: Oberstraße 12 
          <br>
          Kontakt: 
          Rhodos.Restaurant@web.de
          <br>
          Tel: 015771410664 
          <br>
          Steuernummer: 26/173/05313</p>
      </header>

      <?php $this->view("minima/components/footer", $data); ?>
</body>

</html>