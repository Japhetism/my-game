<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script>
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
</script>
<body>
<div id="countdown">100</div>
<button>Pause</button>
<button>Resume</button>
</body>
</html>