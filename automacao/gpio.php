<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/gpio.css">
		<script type="text/javascript" src="js/teste.js"></script>

</head>
<body>
<script>
function checkAddress(){


		var chkBox1 = document.getElementById('checkbox1');
		var chkBox2 = document.getElementById('checkbox2');
		var chkBox3 = document.getElementById('checkbox3');
		var chkBox4 = document.getElementById('checkbox4');
		var chkBox5 = document.getElementById('checkbox5');
		var chkBox6 = document.getElementById('checkbox6');
		var chkBox7 = document.getElementById('checkbox7');
		var chkBox8 = document.getElementById('checkbox8');
			
			if (chkBox1.checked){
				var x1 = document.cookie = "checkbox1=Ligado";
			} else if (!chkBox1.checked){
				var x1 = document.cookie = "checkbox1=Desligado";
			}

			if (chkBox2.checked){
				var x2 = document.cookie = "checkbox2=Ligado";
			} else if (!chkBox2.checked){
				var x2 = document.cookie = "checkbox2=Desligado";
			}

			if (chkBox3.checked){
				var x3 = document.cookie = "checkbox3=Ligado";
			} else if (!chkBox3.checked){
				var x3 = document.cookie = "checkbox3=Desligado";
			}

			if (chkBox4.checked){
				var x4 = document.cookie = "checkbox4=Ligado";
			} else if (!chkBox4.checked){
				var x4 = document.cookie = "checkbox4=Desligado";
			}

			if (chkBox5.checked){
				var x5 = document.cookie = "checkbox5=Ligado";
			} else if (!chkBox5.checked){
				var x5 = document.cookie = "checkbox5=Desligado";
			}

			if (chkBox6.checked){
				var x6 = document.cookie = "checkbox6=Ligado";
			} else if (!chkBox6.checked){
				var x6 = document.cookie = "checkbox6=Desligado";
			}

			if (chkBox7.checked){
				var x7 = document.cookie = "checkbox7=Ligado";
			} else if (!chkBox7.checked){
				var x7 = document.cookie = "checkbox7=Desligado";
			}

			if (chkBox8.checked){
				var x8 = document.cookie = "checkbox8=Ligado";
			} else if (!chkBox8.checked){
				var x8 = document.cookie = "checkbox8=Desligado";
			}

}


</script>


<?PHP 
	//$nome = $_COOKIE["nome"];
	//echo "<h1>Bem vindo, $nome</h1>";
?>


	<div id="container">
		<form method="post" name="formcheck1">
			
			<div class="wrapper">
			  <span>Quarto</span>
			  <input type="checkbox" id="checkbox1" class="slider-toggle" onclick="checkAddress()" onchange="submit()">				<label class="slider-viewport" for="checkbox1">
				<div class="slider">
					<div class="slider-button">&nbsp;</div>
					<div class="slider-content left"><span>On</span></div>
					<div class="slider-content right"><span>Off</span></div>
				</div>
				</label>
			</div>


			<div class="wrapper">
			  <span>Corredor</span>
			  <input type="checkbox" id="checkbox2" class="slider-toggle" onclick="checkAddress()" onchange="submit()">				<label class="slider-viewport" for="checkbox2">
				<div class="slider">
					<div class="slider-button">&nbsp;</div>
					<div class="slider-content left"><span>On</span></div>
					<div class="slider-content right"><span>Off</span></div>
				</div>
				</label>
			</div>

			<div class="wrapper">
			  <span>Banheiro</span>
			  <input type="checkbox" id="checkbox3" class="slider-toggle" onclick="checkAddress()" onchange="submit()">				<label class="slider-viewport" for="checkbox3">
				<div class="slider">
					<div class="slider-button">&nbsp;</div>
					<div class="slider-content left"><span>On</span></div>
					<div class="slider-content right"><span>Off</span></div>
				</div>
				</label>
			</div>

			<div class="wrapper">
			  <span>Sala</span>
			  <input type="checkbox" id="checkbox4" class="slider-toggle" onclick="checkAddress()" onchange="submit()">				<label class="slider-viewport" for="checkbox4">
				<div class="slider">
					<div class="slider-button">&nbsp;</div>
					<div class="slider-content left"><span>On</span></div>
					<div class="slider-content right"><span>Off</span></div>
				</div>
				</label>
			</div>

			<div class="wrapper">
			  <span>Cozinha</span>
			  <input type="checkbox" id="checkbox5" class="slider-toggle" onclick="checkAddress()" onchange="submit()">				<label class="slider-viewport" for="checkbox5">
				<div class="slider">
					<div class="slider-button">&nbsp;</div>
					<div class="slider-content left"><span>On</span></div>
					<div class="slider-content right"><span>Off</span></div>
				</div>
				</label>
			</div>

			<div class="wrapper">
			  <span>Quarto Visitas</span>
			  <input type="checkbox" id="checkbox6" class="slider-toggle" onclick="checkAddress()" onchange="submit()">				<label class="slider-viewport" for="checkbox6">
				<div class="slider">
					<div class="slider-button">&nbsp;</div>
					<div class="slider-content left"><span>On</span></div>
					<div class="slider-content right"><span>Off</span></div>
				</div>
				</label>
			</div>

			<div class="wrapper">
			  <span>Quintal</span>
			  <input type="checkbox" id="checkbox7" class="slider-toggle" onclick="checkAddress()" onchange="submit()">				<label class="slider-viewport" for="checkbox7">
				<div class="slider">
					<div class="slider-button">&nbsp;</div>
					<div class="slider-content left"><span>On</span></div>
					<div class="slider-content right"><span>Off</span></div>
				</div>
				</label>
			</div>

			<div class="wrapper">
			  <span>Lavanderia</span>
			  <input type="checkbox" id="checkbox8" class="slider-toggle" onclick="checkAddress()" onchange="submit()">				<label class="slider-viewport" for="checkbox8">
				<div class="slider">
					<div class="slider-button">&nbsp;</div>
					<div class="slider-content left"><span>On</span></div>
					<div class="slider-content right"><span>Off</span></div>
				</div>
				</label>
			</div>

		</form>
	</div>

<?PHP

//setando os pinos que serão usados
	$setmode21 = shell_exec("gpio -g mode 21 out");//ok
	$setmode20 = shell_exec("gpio -g mode 20 out");//ok
	$setmode26 = shell_exec("gpio -g mode 26 out");//ok
	$setmode16 = shell_exec("gpio -g mode 16 out");//ok
	$setmode19 = shell_exec("gpio -g mode 19 out");//ok
	$setmode13 = shell_exec("gpio -g mode 13 out");//ok
	$setmode12 = shell_exec("gpio -g mode 12 out");//ok
	$setmode06 = shell_exec("gpio -g mode 06 out");//ok


	//armazenando COOKIE
	$cok1 = $_COOKIE['checkbox1'];
	$cok2 = $_COOKIE['checkbox2'];
	$cok3 = $_COOKIE['checkbox3'];
	$cok4 = $_COOKIE['checkbox4'];
	$cok5 = $_COOKIE['checkbox5'];
	$cok6 = $_COOKIE['checkbox6'];
	$cok7 = $_COOKIE['checkbox7'];
	$cok8 = $_COOKIE['checkbox8'];

	
	if($cok1 == 'Ligado'){
		echo "<BR>O cookie1 está Ligado";
		shell_exec("gpio -g write 21 1");
		echo "<script type='text/javascript'> document.getElementById('checkbox1').checked = true;</script>";
	}else if($cok1 == "Desligado"){
		echo "<BR>O cookie1 está Desligado";
		shell_exec("gpio -g write 21 0");
	}

	if($cok2 == 'Ligado'){
		echo "<BR>O cookie2 está Ligado";
		shell_exec("gpio -g write 20 1");
		echo "<script type='text/javascript'> document.getElementById('checkbox2').checked = true;</script>";
	}else if($cok2 == "Desligado"){
		echo "<BR>O cookie2 está Desligado";
		shell_exec("gpio -g write 20 0");
	}

	if($cok3 == 'Ligado'){
		echo "<BR>O cookie3 está Ligado";
		shell_exec("gpio -g write 26 1");
		echo "<script type='text/javascript'> document.getElementById('checkbox3').checked = true;</script>";
	}else if($cok3 == "Desligado"){
		echo "<BR>O cookie3 está Desligado";
		shell_exec("gpio -g write 26 0");
	}

	if($cok4 == 'Ligado'){
		echo "<BR>O cookie4 está Ligado";
		shell_exec("gpio -g write 16 1");
		echo "<script type='text/javascript'> document.getElementById('checkbox4').checked = true;</script>";
	}else if($cok4 == "Desligado"){
		echo "<BR>O cookie4 está Desligado";
		shell_exec("gpio -g write 16 0");
	}

	if($cok5 == 'Ligado'){
		echo "<BR>O cookie5 está Ligado";
		shell_exec("gpio -g write 19 1");
		echo "<script type='text/javascript'> document.getElementById('checkbox5').checked = true;</script>";
	}else if($cok5 == "Desligado"){
		echo "<BR>O cookie5 está Desligado";
		shell_exec("gpio -g write 19 0");
	}

	if($cok6 == 'Ligado'){
		echo "<BR>O cookie6 está Ligado";
		shell_exec("gpio -g write 13 1");
		echo "<script type='text/javascript'> document.getElementById('checkbox6').checked = true;</script>";
	}else if($cok6 == "Desligado"){
		echo "<BR>O cookie6 está Desligado";
		shell_exec("gpio -g write 13 0");
	}

	if($cok7 == 'Ligado'){
		echo "<BR>O cookie7 está Ligado";
		shell_exec("gpio -g write 12 1");
		echo "<script type='text/javascript'> document.getElementById('checkbox7').checked = true;</script>";
	}else if($cok7 == "Desligado"){
		echo "<BR>O cookie7 está Desligado";
		shell_exec("gpio -g write 12 0");
	}

	if($cok8 == 'Ligado'){
		echo "<BR>O cookie8 está Ligado";
		shell_exec("gpio -g write 6 1");
		echo "<script type='text/javascript'> document.getElementById('checkbox8').checked = true;</script>";
	}else if($cok8 == "Desligado"){
		echo "<BR>O cookie8 está Desligado";
		shell_exec("gpio -g write 6 0");
	}

?>


</body>
</html>
