$(document).ready(function() {
  $('.unit-box').click(function() {
    var unit_name = $(this).attr('data-name');
    var img_urls = gallery_json[unit_name];
    $('.unit-detail-name').text("Unit " + unit_name);
    if ($('.unit.carousel').data('flickity')) {
      $('.unit.carousel').flickity('destroy').empty();
    }
    $.each(img_urls, function(index, elem) {
      var $div = $('<div>', {class: 'carousel-cell'});
      var $a = $('<a>', {href: elem});
      var $img = $('<img>', {'src': elem});
      $a.append($img);
      $div.append($a);
      $('.unit.carousel').append($div);       
    });
    $('.unit.carousel').flickity({
      setGallerySize: false,
      wrapAround: true,
      // lazyLoad: true,
      imagesLoaded: true,
      cellAlign: 'left'
    });
    $('.unit-detail-box').attr('data-name', unit_name);
    violetboxes.apply($('.unit-detail-box'));
    $('.unit-boxes').addClass('hidden');
    $('.unit-detail').removeClass('hidden');
    $('.unit.carousel').css('width', $('.unit-detail-box').width());
  });
  $(".unit-detail .close").click(function() {
    $('.unit-boxes').removeClass('hidden');
    $('.unit-detail').addClass('hidden');    
  });
  var limeboxes = function() {
    var num = $(this).attr('data-name').replace(/\D/g,'');
    $(this).find('.unitsvg').css('fill', '');
    $(this).find('.unitsvg_' + num).css('fill', '#B3FF00');
  };
  var violetboxes = function() {
    var num = $(this).attr('data-name').replace(/\D/g,'');
    $(this).find('.unitsvg').css('fill', '');
    $(this).find('.unitsvg_' + num).css('fill', '#5600D9');
  };
  $('.unit-box').each(limeboxes);
  $('.unit-box').on('mouseenter touchstart', violetboxes);
  $('.unit-box').on('mouseleave touchend', limeboxes);
  
  $(window).resize(function() {
    $('.unit.carousel').css('width', $('.unit-detail-box').width());
  });
});