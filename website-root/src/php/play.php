<?php /* Template Name: Play */
include 'hero-headers/header-video.php'; ?>

<main role="main">
  <section class="tfac-splash tfac-splash-left">
    <!-- Splash Module Include -->
    <?php include 'modules/splash-module.php'; ?>

    <!-- First BKG Url is for the mask, second is for the desired image -->
    <div class="tfac-splash-hero">
      <div class="tfac-splash-mask" style="background-image: url('../img/splashes/splash-feature.svg');" ></div>
      <div class="tfac-splash-image" style="background-image: url('./img/play/play-splash-ropes.png');"></div>
    </div>
   </div>
  </section>

  <section class="tfac-splash tfac-splash-right">
    <!-- Splash Module Include -->
    <?php include 'modules/splash-module.php'; ?>

    <!-- First BKG Url is for the mask, second is for the desired image -->
    <div class="tfac-splash-hero">
      <div class="tfac-splash-mask" style="background-image: url('../img/splashes/splash-feature.svg');" ></div>
      <div class="tfac-splash-image" style="background-image: url('./img/play/play-splash-kids.png');"></div>
    </div>
   </div>
  </section>

  <section class="tfac-splash tfac-splash-left">
    <!-- Splash Module Include -->
    <?php include 'modules/splash-module.php'; ?>

    <!-- First BKG Url is for the mask, second is for the desired image -->
    <div class="tfac-splash-hero">
      <div class="tfac-splash-mask" style="background-image: url('../img/splashes/splash-feature.svg');" ></div>
      <div class="tfac-splash-image" style="background-image: url('./img/play/play-splash-trampoline.png');"></div>
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
  <!-- Plan Section -->
  <section class="tfac-adventure-plan" style="background-image:url('./img/plan-bkgs/plan-bkg-trampoline.png')">
    <?php include 'modules/plan-module.php'; ?>
  </section>
</main>
<?php include 'structure/footer.php'; ?>
