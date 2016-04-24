<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	function countdown() {
    timer = document.getElementById('timer').value;
    alert(timer);
    }

</script>
	<link rel="stylesheet" type="text/css" href="../css/test1.css">
	<script src="../js/test1.js"></script>
	<title>Testing gaming power</title>
<body onload="countdown()">
<div class="banner">
 <!-- <div class="banner1" style="display: none;" id="layer">
<h3>welcome to simple arithmetic game system</h3>
<button onclick="next1()" id="enter">Enter</button>
</div>
<div class="banner2" style="display: none;" id="layer1">
<h3>Enter Your Name:<h3>
	<input type="text" name="name" id="name" onkeydown = "if (event.keyCode == 13)
                        document.getElementById('continue').click()"><br>
	<button onclick="next2()" id="continue">Continue</button>
</div>
<div class="banner3" style="display: none;" id="layer2">
<h3>Welcome&nbsp<label id="name1"></label></h3>
<label>Game End Format</label><p>
<label>After</label><input type="text" id="questions" onkeydown = "if (event.keyCode == 13)
                        document.getElementById('play').click()"><label>Questions</label><p>
<label>After</label><input type="text" id="timer" onkeydown = "if (event.keyCode == 13)
                        document.getElementById('play').click()"><label>Seconds</label><br>
<button onclick="next3()" id="play">Play</button>
</div>  -->
<div class="main" id="layer3">
Player Name:<span id="gameName"></span><br>
Game Score:<span id="gameScore"></span><br>
Timer: <span id="timer2"></span><br>
<span id="gameNumber"></span><br>
Coins:<span id="coinGained"></span><br>
Correct:<span id="gameCorrect"></span><br>
Wrong:<span id="gameWrong"></span>
<p>
<label id="me"></label>
<label id="op"></label>
<label id="me1"></label>
<label id="equal">=</label>
<input type="text" id="ans"  maxlength="4" onkeydown = "if (event.keyCode == 13)
                        document.getElementById('check').click()" onkeypress="return isNumberKey(event)"><br>
<button onclick="check()" id="check">check</button><br>
<label id="sign"></label>
</div>
<div class="main1" style="display: none;" id="layer4">
	<label>Game Over!!!</label><br>
	<label>Your Score</label><br>
	<label id="endScore"></label><br>
	Coins Gained:<label id="endCoin"></label><br>
	Played:<label id="endNumber"></label><br>
	Got Right:<label id="endCorrect"></label><br>
	Got Wrong:<label id="endWrong"></label><br>
	Rate:<label id="endRate"></label><br>
	<button onclick="again()" id="continueGame">Continue -5 coins</button>
	<button onclick="endGame()">End game</button>
</div>
</div>
</body>
</html>