function timesTwo (number) {
  var value = number*2;
  return value;
}
function timesSix(number) {
  var result = timesTwo(number)*3;
  return result;
}
function rollDice(){
  return Math.floor((Math.random() * 6) + 1);
}
function arrayDoubled() {
  var originalArray = [1, 2, 3, 4];
  for (var i = 0; i < oringinalArray.length; i++){
    var number = originalArray[i]*2;
    alert(number);
  }
}
function arrayReversed() {
 var numbers = [1, 2, 3, 4, 5, 6]
 var length = StartArray.length;
 var NewArray = [];
 for (var i=0; i<length; i++){
   NewArray.push(StartArray.pop());
 }
}
function arrayMerged() {
  var numbers =[1, 2, 3, 4, 5, 6]
  var letters =["a", "b", "c", "d", "e"]
  var Botharrays =[];

}
function arrayMerged() {
 var JohnLennonFacts = ["Had a son named Julian", "Had a son named Sean", "Had a wife named Yoko Ono", "<3 Monopoly"];
 var ExcitingFacts = [];
 //excitingFacts.push(JohnLennonFacts[0] + "!!!")
 //excitingFacts.push(JohnLennonFacts[0] + "!!!")
 //excitingFacts.push(JohnLennonFacts[0] + "!!!")
 //excitingFacts.push(JohnLennonFacts[0] + "!!!")
 var index = 0; //want index to be 0, 1, 2, 3 (never 4)
 //while(index < 4){
   //excitingFacts.push(JohnLennonFacts[index] + "!!!");
   while(index < JohnLennonFacts.length){
     excitingFacts.push(JohnLennonFacts[index] + "!!!");
     index++;
 }
}
var beatles = [
  "John",
  "Ringo"
  "George"
  "Paul"
];
var instructments =["Guitar", "Drums", "Bass", "Guitar"];
// want ["John played Guitar", "Ringo played Drums", ...]
var newArray = [];
