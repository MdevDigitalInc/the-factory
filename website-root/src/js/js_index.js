// [ INDEX PAGE ]
// In this file you could have functions pertinent to
// just the index page as well as import libraries that
// will only be used in that page. Webpack will take care
// of splitting the bundles.
//
(function(){
  // Make sure we are live and ready..
  $(document).ready(function() {
    // Vars & Declarations
    // -------------------------------

    // Timers
    // -------------------------------
    var resizeTimer;

    // Initialization Functions
    // --------------------------------
    //
    // Fix Dropdown Heights
    normalizeDropdown();

    // Scroll Events
    // -------------------------------
    $(document).scroll(function (event) {
      // Variables
      var top  = $(window).scrollTop();
      // Targets ( Use Custom Data Attr )
      var mainNav = $('[data-main-navigation]');

      if ( top >= 50 ) {
        mainNav.addClass('tfac-nav-active');
      }
      else if ( top === 0 ) {
        mainNav.removeClass('tfac-nav-active');
      }
    });

    // Resize Events (debounced)
    // -----------------------------
    $(window).on('resize', function(e) {
      // Clear Timer
      clearTimeout(resizeTimer);
      // Fire function after 250ms
      resizeTimer = setTimeout(function() {
        // Normalize Dropdowns Again...
        normalizeDropdown();
      },250);
    });
  });

  // Auxiliary Functions
  // -------------------------
  //
  // Fix Dropdown Function
  function normalizeDropdown() {
    var mainNavDropdown = $('[data-main-navigation]'),
        navHiddenDropdown = $('[data-hidden-menu]'),
        heightAdjustment = mainNavDropdown.outerHeight();

    navHiddenDropdown.css({
      "top": heightAdjustment + 'px'
    });

    console.log('done');

  };
})();
