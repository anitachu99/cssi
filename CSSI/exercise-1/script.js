/* You will save your code during today's demos and exercises here. */
$( "#right" ).click(function() {
  $( ".frame#string" ).animate({ "left": "+=50px" }, "slow" );
});

$( "#left" ).click(function(){
  $( ".frame#android" ).animate({ "left": "-=50px" }, "slow" );
});
