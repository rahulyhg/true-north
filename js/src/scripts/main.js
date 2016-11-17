$(document).ready(function() {
  if ($('.timestamp').length > 1) {
    var updateTime = function() {
      $('.timestamp').text(moment().tz("America/New_York").format('hh:mma'));
    };
    updateTime();
    setInterval(updateTime, 1000);
  }
  if ($('.pin-content').length > 0) {
    $('.pin-content').panzoom({
      cursor: 'grab',
      disableZoom: true,
      contain: 'invert'
    });
  }
});

$(document).ajaxStop(function() {
  // sunset
  var sunset = $('.sunrise-sunset .sunset').last().text();
  var sunsetStart = moment(sunset, ['hh:mma', 'H:m']).tz("America/New_York");
  var sunsetEnd = sunsetStart.clone().add(18, 'minutes');
  var sunsetRange = moment.range(sunsetStart, sunsetEnd);
  // sunrise
  var sunrise = $('.sunrise-sunset .sunrise').last().text();
  var sunriseStart = moment(sunrise, ['hh:mma', 'H:m']).tz("America/New_York");
  var sunriseEnd = sunriseStart.clone().add(18, 'minutes');
  var sunriseRange = moment.range(sunriseStart, sunriseEnd);
  // night
  var dayRange = moment.range(sunriseEnd, sunsetStart);
  var n = 1;
  var reversibleEase = function (t) { return 2 * (t<0.5 ? 2*t*t : 1 - 2*t*t); };
  var updateSun = function() {
    var now = moment().tz("America/New_York");
    // debug sunset
    // now = sunsetStart.clone().add(n++, 'minutes');
    // debug sunrise
    // now = sunriseStart.clone().add(n++, 'minutes');
    var diff, ratio;
    if (sunsetRange.contains(now)) {
      // sunset
      diff = now.diff(sunsetStart, 'minutes');
      ratio = diff / 18;
      $('.sunset-gradient').animate({
        opacity: reversibleEase(ratio)
      }, 1000);
      $('.gray-background').animate({
        opacity: ratio * ratio
      }, 1000);
      if (ratio > 0.4) {
        $('body').addClass('night');
      }
      else {
        $('body').removeClass('night');
      }
    }
    else if (sunriseRange.contains(now)) {
      // sunrise
      diff = now.diff(sunriseStart, 'minutes');
      ratio = diff / 18;
      $('.sunset-gradient').animate({
        opacity: reversibleEase(ratio)
      }, 1000);
      $('.gray-background').animate({
        opacity: 1 - ratio * ratio
      }, 1000);
      if (ratio > 0.7) {
        $('body').removeClass('night');
      }
      else {
        $('body').addClass('night');
      }
    }
    else if (!dayRange.contains(now)) {
      $('.gray-background').animate({
        opacity: 1
      }, 100);
      $('body').addClass('night');
    }
  };
  updateSun();
  setInterval(updateSun, 1000);
});