
var answer = "";
var answer1 = "";
var name = "";
var score = 0;
var wrong = 0;
var correct = 0;
var coin = 0;
var scores = 0;
var coins = 0;
var total = 0;
var wrongs = 0;
var timer;
var num;
var getCoin;
var rate;
var rate1;
var coin1;
var end;
var coin2;
var me = [];




function next(){
	var layer = document.getElementById('layer');
	layer.style.display='block';
}

function next1(){
	var layer = document.getElementById('layer');
	var layer1 = document.getElementById('layer1');


	layer.style.display='none';
	layer1.style.display='block';

	document.getElementById('name').focus();
}

function next2(){
	var layer1 = document.getElementById('layer1');
	var layer2 = document.getElementById('layer2');
	name = document.getElementById('name').value;
		layer1.style.display='none';
		layer2.style.display='block';

		if(name==null || name==""){
			name = "Anonymous";
		}

		document.getElementById('name1').innerHTML = name;
		document.getElementById('questions').focus();
}

function lay(){
	num = document.getElementById('timer').value;
	var lay3a = document.getElementById('lay3a');
	/*var end = document.getElementById('questions').value;*/
	end = document.getElementById('questions').value;
	if(end==null || end==""){
			end = 100;
		}
	if(num==null || num==""){
		num=60;
	}
	document.getElementById('timer2').innerHTML = num;
	
	lay3a.style.display = 'block';
}

function next3(){
	var layer2 = document.getElementById('layer2');
	var layer3 = document.getElementById('layer3');
	
	
	layer2.style.display='none';
	layer3.style.display='block';

	
		var me = Math.floor((Math.random()*10));
		var me1 = Math.floor((Math.random()*10));

		var operators = ['+', '-', '*', '/'];
		
		op = operators[Math.floor(Math.random()*4)];
		


		if(me<me1 && op==='/'){
			var me2 = me;
			me = me1;
			me = me2;
		}else if(me<me1 && op==='-'){
			var me2 = me;
			me = me1;
			me = me2;
		}else if(me==0 || me1==0 && op==='/'){
			var dem = Math.floor((Math.random()*10)*1);
			var dem1 = Math.floor((Math.random()*10)*1);
			me = dem;
			me2 = dem1;
		}else{
			if(me%me1!=0){
				me=me1;
			}
		answer = eval(me+op+me1);
	document.getElementById('op').innerHTML = op;
	document.getElementById('me').innerHTML = me;
	document.getElementById('me1').innerHTML = me1;
	document.getElementById('gameName').innerHTML = name;
	total++;
	document.getElementById('ans').focus();

	console.log(typeof(me));
	console.log(typeof(op));
	console.log(typeof(me1));
}
}

function roundUp2dp(num){
	return +(Math.round(num + "e+2") + "e-2");
}

function clearAns(){
	var ans = "";
	var sign = " ";
	document.getElementById('sign').innerHTML = sign;
	document.getElementById('ans').value = ans;
}

function check(){
	var ans = document.getElementById('ans').value;
	var answer1 = roundUp2dp(answer);
	if(answer1 == ans){
		score+=2;
		scores+=2;
		correct+=1;
		rep = "<img src='images/Correct.png' height='200px' width='200px'>";
		next3();

	}else{
		wrong+=1;
	 	rep = "<img src='images/wrong.png' height='200px' width='200px'>";
	 	next3();
	}

	clearAns();
	document.getElementById('sign').innerHTML = rep;
	document.getElementById('gameScore').innerHTML = score;
	document.getElementById('gameCorrect').innerHTML = correct;
	document.getElementById('gameWrong').innerHTML = wrong;

		getCoin = (scores/50>>0);
		coin = coins +(getCoin * 2);

	
	
	if(wrong == end){
		var layer3 = document.getElementById('layer3');
		var layer4 = document.getElementById('layer4');

		layer3.style.display = 'none';
		layer4.style.display = 'block';

		if(coin<5){
			var continueGame = document.getElementById('continueGame');

			continueGame.style.display = 'none';
		}

		document.getElementById('endScore').innerHTML = score;
		document.getElementById('endCorrect').innerHTML = correct;
		document.getElementById('endWrong').innerHTML = wrong+wrongs;

		total = correct + wrong +wrongs;
		rate = ((correct/total)*100);

		rate1 = roundUp2dp(rate);

		document.getElementById('endRate').innerHTML = rate1+"%";
		document.getElementById('endNumber').innerHTML = total;
		document.getElementById('endCoin').innerHTML = coin;
	}	

		document.getElementById('coinGained').innerHTML = coin;

}


function endGame(){
	window.location = "index.html";
}

function again(){
	var layer4 = document.getElementById('layer4');
	if(coin>=5){
		layer4.style.display = 'none';
		me = "";
		me1 = "";
		next3();
		coin2 = document.getElementById('endCoin').innerHTML;
		coins = coin2-5;
		wrongs = wrong+wrongs;
		wrong = 0;
		scores = 0;
		rep = ""
		clearAns();
		lay();
		countdown();
		document.getElementById('coinGained').innerHTML = coins;
		document.getElementById('gameWrong').innerHTML = wrong;
		document.getElementById('sign').innerHTML = rep;
		document.getElementById('ans').focus();
	}

}

//function not to accept alphabets in  a textbox
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 46 && charCode > 31
    && (charCode < 48 || charCode > 57))
        return false;

    return true;
}


//meant for the timer for the gaming system
var seconds;
  var second;
 
  var temp;

  function countdown() {
    seconds = document.getElementById('timer2').innerHTML;
    seconds = parseInt(seconds, 10);
    coin1 = document.getElementById('coinGained').innerHTML;


 
    if (seconds == 1) {
      var layer3 = document.getElementById('layer3');
		var layer4 = document.getElementById('layer4');

		layer3.style.display = 'none';
		layer4.style.display = 'block';

		if(coin1<5){
			var continueGame = document.getElementById('continueGame');

			continueGame.style.display = 'none';
		}

		document.getElementById('endScore').innerHTML = score;
		document.getElementById('endCorrect').innerHTML = correct;
		document.getElementById('endWrong').innerHTML = wrong+wrongs;
		total = correct + wrong +wrongs;
		rate = ((correct/total)*100);

		rate1 = roundUp2dp(rate);

		if(total==0){
			rate1 = 0;
		}

		document.getElementById('endRate').innerHTML = rate1+"%";
		document.getElementById('endNumber').innerHTML = total;
		document.getElementById('endCoin').innerHTML = coin1;


      return;
    }


    seconds--;
    
    temp = document.getElementById('timer2');
    temp.innerHTML = seconds;
   
    timeoutMyOswego = setTimeout(countdown, 1000);

  } 

 
  countdown();

function endQuestion(checkbox){
	var timerSec = document.getElementById('checker2');
	/*var endQue = document.getElementById('checker1');*/
	var after_question = document.getElementById('after_question');
	var after_question1 = document.getElementById('after_question1');
	var play = document.getElementById('play');
	if(checkbox.checked){
		timerSec.style.display = 'none';
		after_question.style.display = 'block';
		after_question1.style.display = 'block';
		play.style.display = 'block';
		after_question.focus();
		
	}else{
		timerSec.style.display = 'block';
		after_question.style.display = 'none';
		after_question1.style.display = 'none';
		play.style.display = 'none';
		
	}
}

function endTime(checkbox){
	var endQue = document.getElementById('checker1');
	/*var timerSec = document.getElementById('checker2');*/
	var after_time = document.getElementById('after_time');
	var after_time1 = document.getElementById('after_time1');
	var play = document.getElementById('play');
	if(checkbox.checked){
		endQue.style.display = 'none';
		after_time.style.display = 'block';
		after_time1.style.display = 'block';
		play.style.display = 'block';
		after_time.focus();
		
	}else{
		endQue.style.display = 'block';
		after_time.style.display = 'none';
		after_time1.style.display = 'none';
		play.style.display = 'none';
	}
}

//function to pause the game timer
function pauseTimer(){
	var button_say = document.getElementById('pauseGame').innerHTML;
	var time_left = document.getElementById('timer2').innerHTML;
	if(time_left != "NaN" && time_left != "Paused"){
		me.push(time_left);
	}
	document.getElementById('ans').disabled = true;
	document.getElementById('timer2').innerHTML = NaN;
	document.getElementById('pauseGame').style.display = 'none';
	document.getElementById('timer2').style.display = 'none';
	document.getElementById('resumeGame').style.display = 'block';
	document.getElementById('gameMode').innerHTML = 'Paused';
	document.getElementById('gameMode').style.display = 'block';
}

//function to resume the game timer
function resumeTimer(){
	document.getElementById('ans').disabled= false;
	document.getElementById('timer2').innerHTML = me[0];
	document.getElementById('timer2').style.display = 'block';
	document.getElementById('gameMode').style.display = 'none';
	document.getElementById('pauseGame').style.display = 'block';
	document.getElementById('resumeGame').style.display = 'none';
	me.pop();
	next3();
}