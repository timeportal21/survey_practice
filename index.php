<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){

}else {
	header('Location: https://www.google.com');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<style type="text/css">
		.navp	{
			color: #fff;
			text-align: center;
		}
		.abc>button	{
			width: 200px;

		}
		.display_content {
			display: none;
		}
		@media only screen and (max-width:992px) {
			.yoyo21 {
				margin-right: 40% !important;
			}
		}
	
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<p class="navp"><strong>Stand a chance to win an<br>New Apple iPhone X</strong></p>
	</nav>
	<div class="container">
		<div class="row">
			<div style="float: left">
				<h3><strong style="color: red">Congratulations</strong></h3>
				<p>We give a limited number of people in your area to get into this giveaway participation in a short survey.<br>You are preselected for an 
				<strong style="color: red">iPhone X</strong></p>
				<p>To claim please answer 3 questions below:</p>
			</div>
			<img src="IPhonex.jpg" alt="image" class="img-responsive yoyo21" style="float: right; margin-right: 12px;">
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="panel border" style="margin-top: 25px; border-color: #000; text-align: center;">
					<h1 id="latestQuestion">Question 1 of 3</h1>
					<h1 id="question">Do you live in Australia?</h1>
					<div class="progress display_content" id="display_content" style="width: 41%; margin-left: 29%;">
					  	<div class="progress-bar progress-bar-striped active" id="bar_progress" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
					</div>
					<div  class="abc" style="margin-bottom: 20px;">
						<button class="btn btn-danger border round-large" id="choice1" onclick="clickYes()">Yes</button>
						<button class="btn btn-danger border round-large" id="choice2" >No</button><br><br>
						<button style="display: none;" class="btn btn-danger border round-large" id="choice3"></button>
						<button style="display: none;" class="btn btn-danger border round-large" id="choice4"></button>
					</div>
				</div>
			</div>
	  	</div>	
	</div>		

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script>
		var click = 0;
		function clickYes(){
			click +=1;

			switch(click){
				case 1:
					$('#latestQuestion').html('Question 2 of 3');
					$('#question').html('Do you own any Apple Products?');
					break;

				case 2:
					$('#latestQuestion').html('Question 3 of 3');
					$('#question').html('What is your favourite Apple product?');

					$('#choice1').html('iPhone');
					$('#choice2').html('iPad');
					$('#choice3').html('Macbook');
					document.getElementById('choice3').style.display='inline';
					$('#choice4').html('iMac');
					document.getElementById('choice4').style.display='inline';
					break;

				case 3: 
					$('#latestQuestion').html('Your answers are being processed...');
					$('#question').html('');
					document.getElementById('choice1').style.display='none';
					document.getElementById('choice2').style.display='none';
					document.getElementById('choice3').style.display='none';
					document.getElementById('choice4').style.display='none';

					
					document.getElementById('display_content').style.display='block';
					var elem = document.getElementById('bar_progress');
					var width = 1;
					var id = setInterval(frame, 100);
					function frame() {
						if (width >=100) {
							clearInterval(id);
						} else {
							width ++;

							if(width >=50 && width <=60){
								$('#latestQuestion').html('No double-registration found '+'<span class="glyphicon glyphicon-ok"></span>');
								$('#question').html('Three(3 vouchers left) '+'<span class="glyphicon glyphicon-ok"></span>');
							} else if (width >=70 && width <=80){
								$('#latestQuestion').html('You have been selected! '+'<span class="glyphicon glyphicon-ok"></span>');
								$('#question').html('Enter your delivery address ');
							} else if(width==100){
								
								window.location.href = 'redirectpage.php';	
							}
							elem.style.width = width + '%';
						}
					}
					break;
			}		
		}
	</script>
</body>
</html>