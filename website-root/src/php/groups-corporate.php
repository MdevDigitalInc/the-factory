<?php /* Template Name: Corporate Groups */
include 'hero-headers/header-inner.php'; ?>

<main role="main">
  <div class="mdev-main-wrapper">
    <?php include 'modules/page-intro-groups.php'; ?>
  </div>
    <!-- Meeting Rooms -->
    <?php include 'components/corporate-meeting-rooms.php'; ?>
    <!-- Breakout Rooms -->
    <?php include 'components/breakout-rooms.php'; ?>
    <!-- Party Rooms -->
    <?php include 'components/corporate-party-rooms.php'; ?>
  <!-- Party Bookings -->
  <?php include 'components/party-bookings.php'; ?>
  <div class="mdev-main-wrapper">
  <!-- Activity Component -->
  <?php include 'components/group-activities.php'; ?>
  <!-- Auxiliary Activities -->
  <?php include 'components/auxiliary-activities.php'; ?>
  <!-- Party Food -->
  <?php include 'components/party-food.php'; ?>
  </div>
</main>
<?php include 'structure/footer.php'; ?>
