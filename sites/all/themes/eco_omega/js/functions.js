

//Set the home page top image (know has hp-box) to the height of the view port

  jQuery(document).ready(function() {
    function setHeight() {
      windowHeight = jQuery(window).innerHeight();
      jQuery('.hp-box').css('min-height', windowHeight);
    };
    setHeight();
    
    jQuery(window).resize(function() {
      setHeight();
    });
  });


  //alert("Hello! Window height has loaded");

  //==============================

