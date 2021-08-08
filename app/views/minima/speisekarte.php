<?php $this->view("minima/components/head", $data); ?>


  <body>
    <div class="wrapper light">
    <?php $this->view("minima/components/menu", $data); ?>

    <?php $this->view("minima/components/nav", $data); ?>

      <div class="content grid" id="speisekarte">
        <header id="speisekarte">
          <img src="icons/speisekarte-icon.svg" alt="" />
          <h1>Speisekarte</h1>
        </header>

        <article class="paragraph" id="speisekarte">
          <span
            >Durchstöbern Sie unsere abwechslungsreiche Speisekarte mit einer
            Vielzahl der besten griechischen Gerichte und Getränke, bei denen
            garantiert auch für Sie etwas dabei sein wird.</span
          >
        </article>

        <div class="menu">
          <div id="preload" class="active">
            <img src="icons/round-frame.svg" alt="" />
            <h1>Bitte warten,<br />Speisekarte laden..</h1>
          </div>
          <div class="real-menu">
            <!-- <div class="img-item img-visible">
            <img src="https://i.lensdump.com/i/0xz70i.jpg" alt="1" border="0">
          </div> -->
            <div class="img-item img-visible">
              <img
                src="https://i.lensdump.com/i/0xzKfm.jpg"
                alt="2"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i1.lensdump.com/i/0xzOqo.jpg"
                alt="3"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i1.lensdump.com/i/0xzHY9.jpg"
                alt="4"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i.lensdump.com/i/0xzz22.jpg"
                alt="5"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i.lensdump.com/i/0xzSCv.jpg"
                alt="6"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i1.lensdump.com/i/0xzeSC.jpg"
                alt="7"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i1.lensdump.com/i/0xznw5.jpg"
                alt="8"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i.lensdump.com/i/0xzL1z.jpg"
                alt="9"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i.lensdump.com/i/0xzMpT.jpg"
                alt="10"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i1.lensdump.com/i/0xzYfb.jpg"
                alt="11"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i1.lensdump.com/i/0xzu07.jpg"
                alt="12"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i.lensdump.com/i/0xzDBr.jpg"
                alt="13"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i.lensdump.com/i/0xzNYF.jpg"
                alt="14"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i1.lensdump.com/i/0xzf23.jpg"
                alt="15"
                border="0"
              />
            </div>
            <div class="img-item">
              <img
                src="https://i1.lensdump.com/i/0xzFJ0.jpg"
                alt="16"
                border="0"
              />
            </div>
            <div id="control-seite">
              <button id="prev-btn" aria-label="Previous slide"><</button>
              <h1 id="seite-nummer">Seite: 1</h1>
              <button id="next-btn" aria-label="Next slide">></button>
            </div>
          </div>
        </div>
      </div>
      <?php $this->view("minima/components/footer", $data); ?>
  </body>
</html>
