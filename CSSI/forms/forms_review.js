function greeting() {
  var userName = $("#username").val();
  alert("HI " + userName + " WELCOME" );
  var header =$("h2");
  changeHeader(userName)
  var Hobbies = $("#hobbies").val();
  alert("Hi " + userName + " your hobbies are " + Hobbies);
}
function nameSetup() {
  $("#ok_button").click(greeting);
  header.text(userName + " Hi");
}
function hobbySetup() {
  $("#enter_button").click(greeting);
}
function changeColor



$(document).ready(setup);
