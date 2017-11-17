<?php /* Template Name: Softplay */
include 'hero-headers/header-inner.php'; ?>

<main role="main">
  <section class="mdev-main-wrapper">
    <!-- Intro Module With Splash -->
    <?php include 'modules/intro-module.php'; ?>

    <!-- playground course Splash -->
    <section class="tfac-splash tfac-splash-center">
      <h2 class="tfac-splash-activity-title u-uppercase">
        <span class="tfac-blue">Adventure</span> Playground
      </h2>
      <!-- Splash Module Include -->
      <?php include 'modules/splash-activity-module.php'; ?>

      <!-- First BKG Url is for the mask, second is for the desired image -->
      <div class="tfac-splash-hero">
        <div class="tfac-splash-mask" style="background-image: url('../img/splashes/splash-activity.svg');" ></div>
        <div class="tfac-splash-image" style="background-image: url('./img/kids/kids-playground-bkg.png');"></div>
      </div>
    </section>

    <!-- Infant Area course Splash -->
    <section class="tfac-splash tfac-splash-center">
      <h2 class="tfac-splash-activity-title u-uppercase">
        <span class="tfac-blue">Infant</span> Area
      </h2>
      <!-- Splash Module Include -->
      <?php include 'modules/splash-activity-module.php'; ?>

      <!-- First BKG Url is for the mask, second is for the desired image -->
      <div class="tfac-splash-hero">
        <div class="tfac-splash-mask" style="background-image: url('../img/splashes/splash-activity.svg');" ></div>
        <div class="tfac-splash-image" style="background-image: url('./img/kids/kids-playground-bkg.png');"></div>
      </div>
    </section>

    <!-- Interactive Play course Splash -->
    <section class="tfac-splash tfac-splash-center">
      <h2 class="tfac-splash-activity-title u-uppercase">
        <span class="tfac-blue">Interactive</span> Play
      </h2>
      <!-- Splash Module Include -->
      <?php include 'modules/splash-activity-module.php'; ?>

      <!-- First BKG Url is for the mask, second is for the desired image -->
      <div class="tfac-splash-hero">
        <div class="tfac-splash-mask" style="background-image: url('../img/splashes/splash-activity.svg');" ></div>
        <div class="tfac-splash-image" style="background-image: url('./img/kids/kids-interactive-bkg.png');"></div>
      </div>
    </section>
  </section>
</main>
<?php include 'structure/footer.php'; ?>
