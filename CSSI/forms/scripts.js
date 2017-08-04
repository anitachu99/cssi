function greeting() {
  var userName = $("#username").val();
  alert("HI " + userName + " WELCOME" );
  var header =$("h2");
  changeHeader(userName)
}
function setup() {
  $("#ok_button").click(greeting);
  header.text(userName + " Hi");
}
$(document).ready(setup);
