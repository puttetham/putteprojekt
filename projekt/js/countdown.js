function setTimer(elem_id, date, completeMsg) {
// set the date we're counting down to
var target_date = new Date(date).getTime();
// variables for time units
var days, hours, minutes, seconds;
// get tag element
var timer;

var countDownElem = document.getElementById(elem_id);
//update the tag with id "countdown" every 1 second
setInterval(function () {
   // find the amount of "seconds" between now and target
  var current_date = new Date().getTime();
  var seconds_left = (target_date - current_date) / 1000;
  // do some time calculations
  if (seconds_left < 0) {
        clearInterval(timer);
        countDownElem.innerHTML = completeMsg;
        return;
  }
  // return msg
  days = parseInt(seconds_left / 86400);
  seconds_left = seconds_left % 86400;
  hours = parseInt(seconds_left / 3600);
  seconds_left = seconds_left % 3600;
  minutes = parseInt(seconds_left / 60);
  seconds = parseInt(seconds_left % 60);
  // format countdown string + set tag value
  countDownElem.innerHTML = days + " days, " + hours + " hrs, " + minutes + " mins, " + seconds + " secs. ";
}, 1000);
}
setTimer("countdown1","Jan 15, 2018", "I'm on LIA!");
setTimer("countdown","May 31, 2018", "Graduated like a BOSS!");
