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
    var mainNav = $('[data-main-navigation]');
    activeNavigation( mainNav );

    // Scroll Events
    // -------------------------------
    $(document).scroll(function (event) {
      // Variables
      // Targets ( Use Custom Data Attr )
      var mainNav = $('[data-main-navigation]');
      // Activate Nav Background
      activeNavigation( mainNav );
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
        // Check Nav
        activeNavigation( mainNav );
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

  function activeNavigation( target ) {
    var top = $(window).scrollTop();

    if ( top >= 50 ) {
      target.addClass('tfac-nav-active');
    }
    else if ( top === 0 ) {
      target.removeClass('tfac-nav-active');
    }
  };
})();
