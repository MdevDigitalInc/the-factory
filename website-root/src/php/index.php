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

  <section class="tfac-activity-module" style="background-image: url('./img/home/home-bkg-promo.png');" >
    <?php include 'modules/promo-module.php' ?>
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
  <!-- TODO - Add proper BKG Image -->
  <section class="tfac-activity-module" style="background-image: url(../img/home/home-bkg-intro.png);">
    <?php include 'modules/activity-module.php' ?>
  </section>
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
  <!-- Groups -->
  <section class="tfac-content-section tfac-extra-padding" style="background-image: url(../img/home/home-bkg-intro.png);">
    <div class="mdev-main-wrapper">
      <div class="tfac-content-blurb flex flex-row flex-hor-between flex-vert-end">
        <h3 class="tfac-content-title u-uppercase">Parties <span class="tfac-blue">&</span> Event</h3>
        <p>Be the hero of your group and plan the best birthday party or special ever!  Book you party package using our a-la-carte online system or contact us for a more hands-on customized approach.</p>
      </div>
      <!-- Card Module -->
      <?php include 'modules/card-module.php'; ?>
    </div>
  </section>
  <!-- Food -->
   <section class="tfac-content-section tfac-food-hoist">
    <!-- Film Strip -->
    <?php include 'modules/film-strip-module.php'; ?>
    <div class="mdev-main-wrapper">
      <div class="tfac-content-blurb flex flex-row flex-hor-between flex-vert-end">
        <h3 class="tfac-content-title u-uppercase">Food <span class="tfac-blue"></br>&</span> Drink</h3>
        <p>Be the hero of your group and plan the best birthday party or special ever!  Book you party package using our a-la-carte online system or contact us for a more hands-on customized approach.</p>
      </div>
      <a href="#" class="cta-small-link u-uppercase tfac-blue" title="">See all food & drink </a>
    </div>
  </section>
  <!-- Plan Section -->
  <section class="tfac-adventure-plan" style="background-image:url('./img/plan-bkgs/plan-bkg-ropes.png')">
    <?php include 'modules/plan-module.php'; ?>
  </section>
</main>

<?php include 'structure/footer.php'; ?>
