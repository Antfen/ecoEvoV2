var pContainerHeight = $('.hp-box').height();

jQuery(window).scroll(function(){

  var wScroll = jQuery(this).scrollTop();

  if (wScroll <= pContainerHeight) {

    jQuery('.paralogo').css({
      'transform' : 'translate(0px, '+ wScroll /2 +'%)'
    });

    /*$('.parallax-logo-shadow').css({
      'transform' : 'translate(0px, '+ wScroll /4 +'%)'
    });*/

    /*$('.parallax-fore').css({
      'transform' : 'translate(0px, -'+ wScroll /40 +'%)'
    });*/

  }

});
