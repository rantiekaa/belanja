$( document ).ready(function() {
  $(".js-select2").each(function() {
    $(this).select2({
      minimumResultsForSearch: 20,
      dropdownParent: $(this).next('.dropDownSelect2')
    });
  })

  $('.parallax100').parallax100();

  $('.gallery-lb').each(function() { // the containers for all your galleries
    $(this).magnificPopup({
      delegate: 'a', // the selector for gallery item
      type: 'image',
      gallery: {
        enabled: true
      },
      mainClass: 'mfp-fade'
    });
  });

  $('.js-addwish-b2').on('click', function(e) {
    e.preventDefault();
  });

  $('.js-addwish-b2').each(function() {
    var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
    $(this).on('click', function() {
      swal(nameProduct, "is added to wishlist !", "success");
      $(this).addClass('js-addedwish-b2');
      $(this).off('click');
    });
  });

  $('.js-addwish-detail').each(function() {
    var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();
    $(this).on('click', function() {
      swal(nameProduct, "is added to wishlist !", "success");
      $(this).addClass('js-addedwish-detail');
      $(this).off('click');
    });
  });

  $('.js-addcart-detail').each(function() {
    var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
    $(this).on('click', function() {
      swal(nameProduct, "is added to cart !", "success");
    });
  });

  $('.js-pscroll').each(function() {
    $(this).css('position', 'relative');
    $(this).css('overflow', 'hidden');
    var ps = new PerfectScrollbar(this, {
      wheelSpeed: 1,
      scrollingThreshold: 1000,
      wheelPropagation: false,
    });
    $(window).on('resize', function() {
      ps.update();
    })
  });

  //navbar sticky
  var headerDesktop = $('.container-menu-desktop');
  var wrapMenu = $('.wrap-menu-desktop');

  if ($('.top-bar').length > 0) {
    var posWrapHeader = $('.top-bar').height();
  } else {
    var posWrapHeader = 0;
  }
  
  if ($(window).scrollTop() > posWrapHeader) {
    $(headerDesktop).addClass('fix-menu-desktop');
    $(wrapMenu).css('top',0); 
  } else {
    $(headerDesktop).removeClass('fix-menu-desktop');
    $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop()); 
  }

  $(window).on('scroll',function(){
    if($(this).scrollTop() > posWrapHeader) {
      $(headerDesktop).addClass('fix-menu-desktop');
      $(wrapMenu).css('top',0); 
      $(".main-menu li a").removeClass('text-white');
      $(".main-menu li a").addClass('text-dark');
      $(".icon-header-item").removeClass('text-white');
      $(".icon-header-item").addClass('text-dark');
    } else {
      $(headerDesktop).removeClass('fix-menu-desktop');
      $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop());
      $(".main-menu li a").addClass('text-white');
      $(".main-menu li a").removeClass('text-dark');
      $(".icon-header-item").addClass('text-white');
      $(".icon-header-item").removeClass('text-dark');
    } 
  });
})
