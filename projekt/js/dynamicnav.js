// NAVIGATION ACTIVE HIGHLIGHT

$(document).ready(function($){
var path = window.location.search;

  if (path == '') {
    path = '?page=home';
  }

  var target = $('nav a[href="index.php'+path+'"]');

  target.addClass('active');
});
