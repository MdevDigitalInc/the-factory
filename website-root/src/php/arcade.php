<?php /* Template Name: Arcade */
include 'hero-headers/header-inner-video.php'; ?>

<main role="main">
  <div class="mdev-main-wrapper">

    <!-- Page Intro -->
    <?php include 'modules/page-intro.php'; ?>
    <!-- Grid Showcase -->
    <?php include 'modules/grid-showcase.php'; ?>

    <!-- Laser Feature Splash -->
    <section class="tfac-splash tfac-splash-center">
      <h3 class="tfac-featuring tfac-blue u-uppercase">Featuring</h3>
      <h2 class="tfac-splash-activity-title u-uppercase">Laser Maze</h2>
      <!-- Splash Module Include -->
      <?php include 'modules/splash-activity-module.php'; ?>

      <!-- First BKG Url is for the mask, second is for the desired image -->
      <div class="tfac-splash-hero">
        <div class="tfac-splash-mask" style="background-image: url('../img/splashes/splash-activity.svg');" ></div>
        <div class="tfac-splash-image" style="background-image: url('./img/arcade/arcade-laser-bkg.png');"></div>
      </div>
    </section>

    <!-- Trampoline Feature Splash -->
    <section class="tfac-splash tfac-splash-center">
      <h3 class="tfac-featuring tfac-blue u-uppercase">Featuring</h3>
      <h2 class="tfac-splash-activity-title u-uppercase">Trampoline Ninja</h2>
      <!-- Splash Module Include -->
      <?php include 'modules/splash-activity-module.php'; ?>

      <!-- First BKG Url is for the mask, second is for the desired image -->
      <div class="tfac-splash-hero">
        <div class="tfac-splash-mask" style="background-image: url('../img/splashes/splash-activity.svg');" ></div>
        <div class="tfac-splash-image" style="background-image: url('./img/arcade/arcade-ninja-bkg.png');"></div>
      </div>
    </section>
  </div>
</main>

<?php include 'structure/footer.php'; ?>
