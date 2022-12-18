<!DOCTYPE html>
<html>
<head>
<style>
div#test {

border:#000 1px solid;
padding: 10px 40px 40px 40px;
background-color: #46E1A1;
}
*{
background-color: #93E1C1;
}
</style>
</head>
<body>
<h2 id="test_status"></h2>
<div id="test"></div>
<script>
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, count=0, correct = 0;
var questions = [
    ["1. Little interest or pleasure in doing things", "Never", "Often", "All the time", "B"],
    ["2. Feeling down, depressed, or hopeless", "Never", "Often", "All the time", "C"],
    ["3. Trouble falling or staying asleep, or sleeping too much", "Never", "Often", "All the time", "C"],
    ["4. Feeling tired or having little energy", "Never", "Often", "All the time", "C"],
    ["5. Poor appetite or overeating", "Never", "Often", "All the time", "C"],

];

function _(x) {

   return document.getElementById(x);

}
function redirectFunc() {
        window.location.replace("https://infocenter.nimh.nih.gov/sites/default/files/2022-01/depression.pdf");
      }
function renderQuestion () {

   test = _("test");
   if(pos >= questions.length) {
     test.innerHTML = "<h2>Your Score is  </h2>"+(correct)+"/10";
	if(correct>=5){
     _("test_status").innerHTML = "There is a great chance that you have depression<br>Please learn more from this pdf related to depression<br>Redirecting...";
      setTimeout("redirectFunc()", 3000);
     }
	if(correct<5) _("test_status").innerHTML = "There is a low chance that you have depression";
     pos = 0;
     correct = 0;
     return false;
     }



   _("test_status").innerHTML = "Question "+(pos+1)+" of "+questions.length;
  question = questions[pos] [0];
  chA = questions[pos] [1];
  chB = questions[pos] [2];
  chC = questions[pos] [3];
  test.innerHTML = "<h3>"+question+"</h3>";
  test.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
  test.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
  test.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br><br>"; 
  test.innerHTML +="<button onclick='checkAnswer()'>submit Answer</button>"; 
   }

   function checkAnswer() {
     choices = document.getElementsByName("choices");
     for (var i=0; i<choices.length; i++) {
     if(choices[i].checked) {
       choice = choices[i].value;
   }
   }
    if(choice == 'B') {
     correct++;
     }
    else if(choice == 'C') {
	correct=correct+2;
	}
     pos++;
     renderQuestion();
   }
   window.addEventListener("load", renderQuestion, false);
</script>
</body>
</html>