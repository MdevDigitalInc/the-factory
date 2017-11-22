<?php include 'structure/pre-footer.php'; ?>

<footer class="tfac-main-footer">
  <div class="mdev-main-wrapper flex flex-hor-start flex-hor-between flex-start">

    <div class="tfac-footer-brand tfac-footer-content">
      <img src="./img/the-factory-logo.svg" alt="The Factory, Canada's Biggest Indoor Adventure Park">
      <h4 class="u-uppercase tfac-blue u-bold">Sign up for our newsletter</h4>

      <form class="tfac-footer-form flex flex-hor-start flex-vert-start">
        <input class="footer-input" type="text" name="e-newsletter" placeholder="Your Email Address"></input>
        <button class="tfac-btn tfac-secondary-cta">Go <i class="tfac-btn-arrow"></i></button>
      </form>

      <!-- Mobile Only -->
      <div class="tfac-footer-mobile">
      <!-- Social Links -->
      <?php include 'modules/social-icons.php'; ?>

        <div class="tfac-mobile-address">
          <h3 class="u-uppercase">Location</h3>
          <span> 100 kellogg Lane </br> London, Ontario </br> N5W 2T5 </span>
          <a href="#" title="Directions" class="tfac-blue">Directions</a>
        </div>
      </div>
    </div>

    <!-- Footer Navigation -->
    <?php include 'nav/footer-navigation.php'; ?>

    <div class="tfac-footer-social tfac-footer-content">
      <h5 class="u-uppercase u-bold">Connect</h5>
        <div class="tfac-social">
          <a href="#" title="" class="tfac-social-link flex flex-hor-start flex-vert-center">
            <img src="img/icons/icon-social-facebook.svg" />
            <span>Facebook</span>
          </a>
          <a href="#" title="" class="tfac-social-link flex flex-hor-start flex-vert-center">
            <img src="img/icons/icon-social-twitter.svg" />
            <span>Twitter</span>
          </a>
          <a href="#" title="" class="tfac-social-link flex flex-hor-start flex-vert-center">
            <img src="img/icons/icon-social-snapchat.svg" />
            <span>Snapchat</span>
          </a>
          <a href="#" title="" class="tfac-social-link flex flex-hor-start flex-vert-center">
            <img src="img/icons/icon-social-youtube.svg" />
            <span>Youtube</span>
          </a>
          <a href="#" title="" class="tfac-social-link flex flex-hor-start flex-vert-center">
            <img src="img/icons/icon-social-instagram.svg" />
            <span>Instagram</span>
          </a>
        </div>
    </div>
  </div>
</footer>

<div class="copyright">
  <div class="mdev-main-wrapper">
    <p>This website is AODA compliant.</p>
    <p class="copy">Copyright &copy; The Factory 2017<span><a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a></span></p>
  </div>
</div>
	</body>
</html>
