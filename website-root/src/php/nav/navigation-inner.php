<!--Main Navigation -->
<nav data-main-navigation
  class="tfac-main-nav flex flex-hor-start flex-hor-between flex-vert-center u-uppercase">
  <div class="tfac-nav-brand-holder"></div>
  <div class="tfac-nav-branding">
    <img src="./img/the-factory-logo.svg"  alt="The Factory, Canada's Biggest Indoor Adventure Park" />
  </div>
  <div class="tfac-main-nav-inner flex flex-hor-start flex-hor-between flex-vert-center u-uppercase">
    <div class="tfac-nav-slogan">
      <span class="tfac-green">Canada's Biggest</span> Indoor Adventure Park
    </div>

    <div class="tfac-nav-links flex flex-hor-end flex-hor-between flex-no-wrap flex-vert-center">

      <!-- Nav Dropdown -->
      <?php include 'nav/dropdown-menu.php'; ?>

        <!-- Nav Actions -->
        <a class="tfac-btn tfac-main-cta"
          href="#"
          title="Book Now">Book Now<i class="tfac-btn-arrow"></i>
        </a>

        <div class="tfac-account-links u-capitalize">
          <a href="#" title="Account Login">Account login</a>
          <span>|</span>
          <a href="#" title="Register Account">Register</a>
        </div>
    </div>
  </div>
  <!-- Mobile Nav Button -->
  <div class="tfac-menu-open"
    data-open-menu
    role="button" aria-label="Mobile Navigation">
    <span aria-hidden="true" aria-label="Click to open mobile menu"class="hidden">Mobile Menu</span>
  </div>

</nav>
<!--Mobile Navigation-->
<?php include 'nav/mobile-nav.php'; ?>
