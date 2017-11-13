<?php include 'hero-headers/header.php'; ?>

<main role="main">
  <!-- Splash Section [ ROPES ] -->
  <section class="tfac-splash tfac-splash-left">
    <!-- Splash Module Include -->
    <?php include 'modules/splash-module.php'; ?>

    <!-- First BKG Url is for the mask, second is for the desired image -->
    <div class="tfac-splash-hero">
      <div class="tfac-splash-mask" style="background-image: url('../img/splashes/splash-feature.svg');" ></div>
      <div class="tfac-splash-image" style="background-image: url('./img/home/home-splash-ropes.png');"></div>
    </div>
   </div>
  </section>

  <section class="mdev-promo-tiles">
    <div class="mdev-main-wrapper">
      <!-- Wordpress Loop -->
      <div class="tile">
        <img src="" alt="" />
        <div class="tile-tag">
          <p>Event</p>
        </div>
        <h3>Trampoline Tuesday</h3>
        <p>Organized trampoline challenges every Tuesday from 7-9pm.</p>
        <a href="cta-button">More</a>
      </div>
    </div>
  </section>

  <!-- Splash Section [ KIDS ] -->
  <section class="tfac-splash tfac-splash-right">
    <!-- Splash Module Include -->
    <?php include 'modules/splash-module.php'; ?>

    <!-- First BKG Url is for the mask, second is for the desired image -->
    <div class="tfac-splash-hero">
      <div class="tfac-splash-mask" style="background-image: url('../img/splashes/splash-feature.svg');" ></div>
      <div class="tfac-splash-image" style="background-image: url('./img/home/home-splash-kids.png');"></div>
    </div>
   </div>
  </section>
  <!-- Arcade Module -->
  <?php include 'modules/arcade-module.php'; ?>
  <!-- Activity Module -->
  <?php include 'modules/activity-module.php' ?>
  <!-- Splash Section [ Wristband ] -->
  <section class="tfac-splash tfac-splash-left">
    <!-- Splash Module Include -->
    <?php include 'modules/splash-module.php'; ?>

    <!-- First BKG Url is for the mask, second is for the desired image -->
    <div class="tfac-splash-hero">
      <div class="tfac-splash-mask" style="background-image: url('../img/splashes/splash-feature.svg');" ></div>
      <div class="tfac-splash-image" style="background-image: url('./img/home/home-splash-selfies.png');"></div>
    </div>
   </div>
  </section>

  <section class="mdev-party-tiles">
    <div class="mdev-main-wrapper">
      <h4>Parties <span class="green">&</span>Event</span></h4>
      <p>Be the hero of your group and plan the best birthday party or special ever!  Book you party package using our a-la-carte online system or contact us for a more hands-on customized approach.</p>
      <div class="tile">
        <img src="" alt="" />
        <h6>Kids</h6>
        <p>Create a unique and fun birthday party experience for kids, that will leave them smiling for days</p>
        <a href="#" class="green">Learn More</a>
      </div>
    </div>
  </section>
  <section class="food-module">
    <div class="mdev-main-wrapper">
      <img src="" alt="" />
      <img src="" alt="" />
      <img class="top" src="" alt="" />
      <img src="" alt="" />
      <img src="" alt="" />
      <h2>Food <span class="green">&amp;</span> Drink</h2>
      <p>Take a breather from your adventure and grab a drink or a bit to eat.  Our food options include an ice cream bar, coffee house, Italian eatery, subs and salads and good ole' burgers and fries.  Don't worry adults, we've got a fully stocked "beverage" station for you.</p>
      <a href="#" class="green">See all food &amp; drink</a>
    </div>
  </section>
  <!-- Plan Section -->
  <section class="tfac-adventure-plan" style="background-image:url('./img/plan-bkgs/plan-bkg-ropes.png')">
    <?php include 'modules/plan-module.php'; ?>
  </section>
</main>

<?php include 'structure/footer.php'; ?>
