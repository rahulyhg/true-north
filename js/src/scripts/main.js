$(document).ready(function() {
  var updateTime = function() {
    $('.timestamp').text(moment().tz("America/New_York").format('hh:mma'));
  };
  updateTime();
  setInterval(updateTime, 1000); 
});