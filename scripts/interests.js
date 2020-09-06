// this function will allow the smooth school to the top of the page
// Anon. (2017) jQuery .scrollTop(); + animation Available from: https://stackoverflow.com
// /questions/16475198/jquery-scrolltop-animation [Accessed 02 April 2020]
function smoothScrollTop()
{
  var body = $("html, body");
  body.stop().animate({scrollTop:0}, 500, 'swing', function() {
});
}
