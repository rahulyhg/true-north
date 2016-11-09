$(document).ready(function() {
  $('.unit-box').click(function() {
    var img_urls = gallery_json[$(this).attr('data-name')];
    if ($('.unit.carousel').data('flickity')) {
      $('.unit.carousel').flickity('destroy').empty();
    }
    $.each(img_urls, function(index, elem) {
      var $div = $('<div>', {class: 'carousel-cell'});
      var $a = $('<a>', {href: elem});
      var $img = $('<img>', {'data-flickity-lazyload': elem});
      $a.append($img);
      $div.append($a);
      $('.unit.carousel').append($div);       
    });
    $('.unit.carousel').flickity({
      setGallerySize: false,
      wrapAround: true,
      lazyLoad: true,
      imagesLoaded: true
    });
    $('.unit-boxes').addClass('hidden');
    $('.unit-detail').removeClass('hidden');
  });
});