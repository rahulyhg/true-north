$(document).ready(function() {
  var updateTime = function() {
    $('.timestamp').text(moment().tz("America/New_York").format('hh:mma'));
  };
  updateTime();
  setInterval(updateTime, 5000); 
});

$(document).ajaxStop(function() {
  var now = moment().tz("America/New_York");
  var sunset = $('.sunrise-sunset .sunset').last().text();
  var sunsetStart = moment(sunset, ['hh:mma', 'H:m']).tz("America/New_York");
  var sunsetEnd = sunsetStart.clone().add(18, 'minutes');
  // debug sunset
  // now = sunsetStart.clone();
  if (now.within(moment.range(sunsetStart, sunsetEnd))) {
    // sunset
    console.log("sunset");
  }
  else {
    var sunrise = $('.sunrise-sunset .sunrise').last().text();
    var sunriseStart = moment(sunrise, ['hh:mma', 'H:m']).tz("America/New_York");
    var sunriseEnd = sunriseStart.clone().add(18, 'minutes');
    // debug sunrise
    // now = sunriseStart.clone();
    if (now.within(moment.range(sunriseStart, sunriseEnd))) {
      // sunrise
      console.log("sunrise");
    }
  }
});
