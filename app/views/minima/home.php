<?php $this->view("minima/components/head", $data); ?>
<body>

  <div class="wrapper">
    <?php $this->view("minima/components/menu", $data); ?>

    <?php $this->view("minima/components/nav", $data); ?>

    

    <div class="content">
      <header id="willkommen">
        <h1 id="overlay-text">Rhodos <br>
          Griesches Restaurant
        </h1>
        <div class="slider">
          <div class="slider-content">
            <img src="<?=ASSETS?>minima/slider-img/img00.jpg" alt="img0">
            <img src="<?=ASSETS?>minima/slider-img/img0.jpg" alt="img0">
            <img src="<?=ASSETS?>minima/slider-img/img3.jpg" alt="img3">
            <img src="<?=ASSETS?>minima/slider-img/img2.jpg" alt="img2">
            <img src="<?=ASSETS?>minima/slider-img/img4.jpg" alt="img4">
            <img src="<?=ASSETS?>minima/slider-img/img5.jpg" alt="img5">
            <img src="<?=ASSETS?>minima/slider-img/img1.jpg" alt="img1">
          </div>
        </div>
      </header>

      <article class="paragraph" id="willkommen">
        <h1>Willkommen im Restaurant Rhodos: Ihrem authentischen Griechen in Lütjenburg!</h1>
        <p>Unser griechisches Restaurant existiert bereits seit über 5 Jahren – und genau so, wie sich die Zeiten
          verändern, hat auch das Restaurant Rhodos einen Wandel vollzogen: das haben wir garantiert, indem wir
          mittlerweile noch mehr Wert auf ausgezeichnete Qualität bei unseren Gerichten sowie einen großartigen
          Kundenservice legen, der auch Sie garantiert überzeugen wird.</p>
        <br>
        <p>Entdecken Sie unsere original griechische Küche und lassen Sie sich von unseren erfahrenen und
          professionellen Köchen verwöhnen. Wir begrüßen Sie gerne mit einem Glas unseres hochwertigen Ouzos, den vor
          und nach Ihrer Mahlzeit serviert wird – so, wie es bei uns Griechen Tradition ist.</p>
        <br>
        <p>Sind Sie neugierig geworden, welche tollen Gerichte und Getränke Sie bei uns im Restaurant Rhodos finden
          können? Dann werfen Sie einen Blick auf unser vielseitiges <a href="speisekarte.html">Menü.</a></p>
        <br>
        <p>Haben Sie Fragen, Wünsche oder Anliegen? Dann <a href="kontakt.html">kontaktieren</a> Sie uns einfach. Wir
          melden uns stets schnell und zuverlässig bei Ihnen.</p>
      </article>

      <section id="öffnungszeit">
        <div id="clock">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.729 71.729">
            <g id="clock" transform="translate(-0.351 -0.152)">
              <path id="Path_234" data-name="Path 234"
                d="M72.08,36.016A35.864,35.864,0,1,1,36.215.152,35.865,35.865,0,0,1,72.08,36.016Z" />
              <path id="Path_235" data-name="Path 235"
                d="M100.51,69.982A30.331,30.331,0,1,1,70.179,39.651,30.332,30.332,0,0,1,100.51,69.982Z"
                transform="translate(-33.964 -33.965)" fill="#eee" />
              <path id="Path_236" data-name="Path 236"
                d="M94.608,87.32A30.368,30.368,0,1,0,57.743,97.526h0A30.322,30.322,0,0,0,94.581,87.359l.032-.034Zm-36.683-.263-4.479,7.206c-.319-.214-.629-.436-.938-.662L57,86.377C57.3,86.611,57.611,86.839,57.926,87.057Zm.667.44q.871.554,1.8,1.024l-5.807,6.471c-.157-.1-.309-.2-.464-.3Zm8.218,3.067v8.546a29.347,29.347,0,0,1-8.09-2.037l2.525-8.142A20.918,20.918,0,0,0,66.811,90.564Zm.8.1q1.021.11,2.069.12l-1.493,8.432c-.193-.011-.384-.029-.576-.044V90.665ZM80.062,88.17l2.492,8.246a29.337,29.337,0,0,1-9.727,2.707l-2.193-8.352A20.948,20.948,0,0,0,80.062,88.17Zm1.163,1.086,4.681,5.285a29.84,29.84,0,0,1-2.626,1.513Zm-11.333.736a20.3,20.3,0,1,1,20.3-20.3A20.325,20.325,0,0,1,69.892,89.992Zm-29.579-20.3c0-.7.033-1.4.083-2.091l3.184,1.406L40.332,70.44C40.326,70.19,40.313,69.942,40.313,69.691Zm7.318-12.122,2.837,3.88a20.93,20.93,0,0,0-1.45,5.155l-4.45,1.966L40.46,66.754a29.34,29.34,0,0,1,2.682-9.671ZM43.52,56.321q.644-1.265,1.4-2.457L46.993,56.7Zm7.327,4.291-2.141-2.927,3.584.388A21.012,21.012,0,0,0,50.848,60.612Zm-1.9,11.6H40.429c-.026-.3-.053-.6-.07-.909l4.21-1.859,4.293,1.9Q48.9,71.777,48.947,72.21Zm-.136-1.768-3.253-1.437L48.9,67.529a21.2,21.2,0,0,0-.11,2.162C48.791,69.943,48.8,70.193,48.81,70.442Zm.244,2.567a20.928,20.928,0,0,0,.725,3.059l-7.408,4.44a29.329,29.329,0,0,1-1.867-7.5Zm.987,3.833q.2.547.423,1.08l-7.317,4.386c-.164-.347-.324-.7-.475-1.049Zm.754,1.813c.164.347.334.689.516,1.026l-7.272,4.36c-.185-.334-.363-.673-.536-1.013Zm.912,1.72q.525.89,1.132,1.722l-8.121,3.1c-.095-.154-.187-.309-.28-.465Zm.161,2.948-4.91,5.022a29.792,29.792,0,0,1-1.8-2.46Zm4.7-40.03c.278-.141.557-.279.84-.411l4.259,7.376c-.263.111-.522.231-.779.352l-3.833-2.8Zm-.385,3.878-2.776-2.029q1.162-.783,2.4-1.458ZM73.973,48.99V40.4a29.36,29.36,0,0,1,10.455,3.545l-4.2,7.362A20.939,20.939,0,0,0,73.973,48.99Zm-.8-.143q-.568-.09-1.145-.149V40.2c.384.027.765.058,1.145.1Zm-1.944-.21c-.2-.013-.41-.021-.616-.029l-1.884-4.259,1.857-4.22c.214.005.43.006.643.016Zm-1.5-.043a21.228,21.228,0,0,0-2.972.23L68.3,45.339Zm-1.441-5.235-1.37-3.1q1.381-.138,2.8-.144Zm-.436.991-2.041,4.639a20.994,20.994,0,0,0-3.4.972l-4.278-7.409a29.3,29.3,0,0,1,7.953-2.189Zm-7.769,6.665a21.233,21.233,0,0,0-2.515,1.561l-.4-3.691ZM88.9,78.841l7.4,4.152c-.084.166-.168.334-.255.5l-8.128-2.84Q88.449,79.774,88.9,78.841Zm.332-.73a20.941,20.941,0,0,0,1.6-5.895h8.521a29.391,29.391,0,0,1-2.7,10.06Zm1.681-6.693q.047-.569.062-1.145h8.48c-.008.383-.018.765-.04,1.145Zm.072-1.944q-.006-.586-.046-1.165h8.5c.018.386.027.775.03,1.165Zm-.107-1.963a20.914,20.914,0,0,0-1.866-6.726l7.221-4.524a29.36,29.36,0,0,1,3.149,11.25h-8.5Zm-2.221-7.446q-.263-.51-.552-1l7.187-4.5c.2.327.388.657.571.992ZM95.652,84.2a29.794,29.794,0,0,1-1.625,2.558l-5.086-4.9Zm-.782-30.325-7.182,4.5a21.276,21.276,0,0,0-6.771-6.669l4.2-7.366A29.808,29.808,0,0,1,94.871,53.877Zm-42.15-8.248,3.58,2.617.529,4.892a21.25,21.25,0,0,0-4.019,4.187l-4.742-.512-2.682-3.668A29.819,29.819,0,0,1,52.721,45.629ZM47.477,88.958l5.952-6.089a21.3,21.3,0,0,0,2.941,3.005l-4.5,7.245A29.785,29.785,0,0,1,47.477,88.958ZM55.291,95.4l4.756-5.3-2.066,6.657A29.524,29.524,0,0,1,55.291,95.4Zm13.7,3.848,1.225-6.917,1.8,6.855c-.7.05-1.41.085-2.126.085C69.591,99.27,69.293,99.256,68.993,99.247ZM86.58,94.1,80.9,87.683a21.267,21.267,0,0,0,6.489-6.213l6.168,5.945A29.823,29.823,0,0,1,86.58,94.1Z"
                transform="translate(-33.676 -33.674)" />
              <path id="Path_237" data-name="Path 237"
                d="M187.6,172.255l-2.244.8-2.4.4-13.977,10.231-9.01,4.094-.042.02-1.486,1.927-1.764,1.6.163.315,2.325-.522,2.431-.11,8.691-5.13.012-.007.022-.017,14.643-9.394.037-.023,1.241-2.091,1.557-1.8Z"
                transform="translate(-134.43 -147.992)" fill="#424242" />
              <path id="Path_238" data-name="Path 238"
                d="M244.365,241.831a2.333,2.333,0,1,1-2.333-2.334A2.333,2.333,0,0,1,244.365,241.831Z"
                transform="translate(-205.816 -205.814)" fill="#212121" />
            </g>
          </svg>
        </div>
        <div id="time-table">
          <h1>Öffnungszeit</h1>

          <div class="day">
            <span>Montag</span>
            <span>17:00-22:00 Uhr</span>
          </div>
          <div class="day">
            <span>Dienestag</span>
            <span>17:00-22:00 Uhr</span>
          </div>

          <div class="day">
            <span>Mittwoch</span>
            <span style="white-space: pre;">---Ruhetage---</span>
          </div>

          <div class="day">
            <span>Donnerstag</span>
            <span>17:00-22:00 Uhr</span>
          </div>

          <div class="day">
            <span>Freitag</span>
            <span>17:00-22:00 Uhr</span>
          </div>

          <div class="day">
            <span>Samstag</span>
            <span>12:00-14:30 Uhr, <br>17:00-22:00 Uhr</span>
          </div>

          <div class="day">
            <span>Sonntag</span>
            <span>12:00-22:00 Uhr</span>
          </div>

          </table>
      </section>
    </div>
    <?php $this->view("minima/components/footer", $data); ?>
</body>

</html>