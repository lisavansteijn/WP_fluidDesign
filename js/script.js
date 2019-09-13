
// Credits: https://www.w3schools.com/howto/howto_js_countdown.asp

var countDownDate = new Date("Sept 20, 2019 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("countdown-text").innerHTML =
      '<span class="countdown-numeric">'    + days    + '</span>'   + " dagen " +
      '<span class="countdown-numeric">'    + hours   + '</span>'   + " uur " +
      '<span class="countdown-numeric">'    + seconds + '</span>'   + " seconden ";
}, 1000);
