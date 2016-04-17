<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/test1.css">
	<script src="../js/test1.js"></script>
	<title>Testing gaming power</title>
	
<body onload="next();countdown()">
	<div class="banner" id="myTab">
		<div class="banner1" style="display: none;" id="layer">
			<h3>welcome to simple arithmetic game system</h3>
			<a data-toggle="tab" href="#enter_name"><button onclick="next1()" id="enter">Enter</button></a>
		</div>

		<div class="banner2" style="display: none;" id="layer1">
			<h3>Enter Your Name:<h3>
			<input type="text" name="name" id="name" onkeydown = "if (event.keyCode == 13)
	                        document.getElementById('continue').click()"><br>
					<a data-toggle="tab" href="#welcome_gaming_system"><button onclick="next2()" id="continue">Continue</button></a>
		</div>

		<div class="banner3" style="display: none;" id="layer2">
			<h3>Welcome&nbsp<label id="name1"></label></h3>
			<label>Game End Format</label><p>
			<label id="checker1"><input type="checkbox" id="chk1" value="Wrong Question(s)" onclick="endQuestion(this)">Wrong Question(s)</label><p>
			<label id="checker2"><input type="checkbox" id="chk2" value="Time" onclick="endTime(this)">Time in Seconds</label><p>
			<label id="after_question" style="display:none">After<input type="text" id="questions" onkeydown = "if (event.keyCode == 13)
	                        document.getElementById('play').click()">Wrong Questions</label>
			<span id="after_question1" style="display:none">Default wrong questions is 10</span>
			<label id="after_time" style="display: none;">After<input type="text" id="timer" onkeydown = "if (event.keyCode == 13)
	                        document.getElementById('play').click()">Seconds</label>
			<span id="after_time1" style="display: none">Default time is 60seconds</span><br>
				<a data-toggle="tab" href="#game-time"><button onclick="next3();lay()" id="play" style="display: none">Play</button></a>
		</div>

		<div class="main" id="layer3" style="display: none;">
			Player Name:<span id="gameName"></span><br>
			Game Score:<span id="gameScore"></span><br>
			<span id="gameNumber"></span><br>
			<div class="lay3a" id="lay3a" style="display: none">
				Timer: <span id="timer2" style="display: block">
				</span><span id="gameMode" style="display: none"></span>
				<button onclick="pauseTimer()" id="pauseGame" style="display: block">Pause Game</button>
				<button onclick="resumeTimer()" id="resumeGame" style="display: none">Resume Game</button><br>
			</div>
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
			<button onclick="check()" id="check" style="display: none;">check</button><br>
			<label id="sign"></label>
		</div>

		<div class="main1" style="display: none;" href="#game_over" id="layer4">
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