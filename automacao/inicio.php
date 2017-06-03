<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Automação Residencial</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->

<link rel="stylesheet" type="text/css" href="css/gpio.css">
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link rel="stylesheet" href="css/reset.min.css">
<link rel='stylesheet prefetch' href='css/vietnamese.css'>
<link rel="stylesheet" href="css/style2.css">  
<link href="css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- =======================================================
    Theme Name: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>
<script language="JavaScript" src="js/gpio.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
<script>

	function check(){
		

		var estadoBtn1 = document.getElementById("btn1").className
		var estadoBtn2 = document.getElementById("btn2").className
		var estadoBtn3 = document.getElementById("btn3").className
		var estadoBtn4 = document.getElementById("btn4").className
		var estadoBtn5 = document.getElementById("btn5").className
		var estadoBtn6 = document.getElementById("btn6").className
		var estadoBtn7 = document.getElementById("btn7").className
		var estadoBtn8 = document.getElementById("btn8").className
		var estadoBtn9 = document.getElementById("btn9").className
		
		if(estadoBtn1 == "btn btn-lg btn-toggle" || estadoBtn1 == "btn btn-lg btn-toggle active focus"){
			var x1 = document.cookie = "checkbox1=Desligado";
		}else{
			var x1 = document.cookie = "checkbox1=Ligado";
		}if(estadoBtn2 == "btn btn-lg btn-toggle" || estadoBtn2 == "btn btn-lg btn-toggle active focus"){
			var x2 = document.cookie = "checkbox2=Desligado";
		}else{
			var x2 = document.cookie = "checkbox2=Ligado";
		}if(estadoBtn3 == "btn btn-lg btn-toggle" || estadoBtn3 == "btn btn-lg btn-toggle active focus"){
			var x3 = document.cookie = "checkbox3=Desligado";
		}else{
			var x3 = document.cookie = "checkbox3=Ligado";
		}if(estadoBtn4 == "btn btn-lg btn-toggle" || estadoBtn4 == "btn btn-lg btn-toggle active focus"){
			var x4 = document.cookie = "checkbox4=Desligado";
		}else{
			var x4 = document.cookie = "checkbox4=Ligado";
		}if(estadoBtn5 == "btn btn-lg btn-toggle" || estadoBtn5 == "btn btn-lg btn-toggle active focus"){
			var x5 = document.cookie = "checkbox5=Desligado";
		}else{
			var x5 = document.cookie = "checkbox5=Ligado";
		}if(estadoBtn6 == "btn btn-lg btn-toggle" || estadoBtn6 == "btn btn-lg btn-toggle active focus"){
			var x6 = document.cookie = "checkbox6=Desligado";
		}else{
			var x6 = document.cookie = "checkbox6=Ligado";
		}if(estadoBtn7 == "btn btn-lg btn-toggle" || estadoBtn7 == "btn btn-lg btn-toggle active focus"){
			var x7 = document.cookie = "checkbox7=Desligado";
		}else{
			var x7 = document.cookie = "checkbox7=Ligado";
		}if(estadoBtn8 == "btn btn-lg btn-toggle" || estadoBtn8 == "btn btn-lg btn-toggle active focus"){
			var x8 = document.cookie = "checkbox8=Desligado";
		}else{
			var x8 = document.cookie = "checkbox8=Ligado";
		}if(estadoBtn9 == "btn btn-lg btn-toggle" || estadoBtn9 == "btn btn-lg btn-toggle active focus"){
			var x9 = document.cookie = "checkbox9=Desligado";
		}else{
			var x9 = document.cookie = "checkbox9=Ligado";
		}
	}
</script>
<?PHP
	function get_post_action($name)
	{
		$params = func_get_args();

		foreach ($params as $name) {
			if (isset($_POST[$name])) {
				return $name;
			}
		}
	}
//setando os pinos que serão usados
	$setmode21 = shell_exec("gpio -g mode 21 out");//ok
	$setmode20 = shell_exec("gpio -g mode 20 out");//ok
	$setmode26 = shell_exec("gpio -g mode 26 out");//ok
	$setmode16 = shell_exec("gpio -g mode 16 out");//ok
	$setmode19 = shell_exec("gpio -g mode 19 out");//ok
	$setmode13 = shell_exec("gpio -g mode 13 out");//ok
	$setmode12 = shell_exec("gpio -g mode 12 out");//ok
	$setmode06 = shell_exec("gpio -g mode 06 out");//ok
	$setmode05 = shell_exec("gpio -g mode 05 out");//ok

	
	//armazenando COOKIE
	$cok1 = $_COOKIE['checkbox1'];
	$cok2 = $_COOKIE['checkbox2'];
	$cok3 = $_COOKIE['checkbox3'];
	$cok4 = $_COOKIE['checkbox4'];
	$cok5 = $_COOKIE['checkbox5'];
	$cok6 = $_COOKIE['checkbox6'];
	$cok7 = $_COOKIE['checkbox7'];
	$cok8 = $_COOKIE['checkbox8'];
	$cok9 = $_COOKIE['checkbox9'];
	
	$classebtn1 =  "btn btn-lg btn-toggle";
	$classebtn2 =  "btn btn-lg btn-toggle";
	$classebtn3 =  "btn btn-lg btn-toggle";
	$classebtn4 =  "btn btn-lg btn-toggle";
	$classebtn5 =  "btn btn-lg btn-toggle";
	$classebtn6 =  "btn btn-lg btn-toggle";
	$classebtn7 =  "btn btn-lg btn-toggle";
	$classebtn8 =  "btn btn-lg btn-toggle";
	$classebtn9 =  "btn btn-lg btn-toggle";
	
	switch (get_post_action('btn1', 'btn2', 'btn3', 'btn4', 'btn5', 'btn6', 'btn7', 'btn8', 'btn9')) {
    case 'btn1':
		shell_exec("gpio -g write 21 1");
		$classebtn1 =  "btn btn-lg btn-toggle active";
		echo "<script>alert('teste');</script>";
        break;

    case 'btn2':
        //save article and redirect
        break;

    case 'btn3':
        //publish article and redirect
        break;

    default:
        //no action sent
}
	
	
	if($cok1 == 'Ligado'){
		//echo "<BR>O cookie1 está Ligado";
		shell_exec("gpio -g write 21 1");
		$classebtn1 =  "btn btn-lg btn-toggle active";
	}else if($cok1 == "Desligado"){
		//echo "<BR>O cookie1 está Desligado";
		shell_exec("gpio -g write 21 0");
		$classebtn1 =  "btn btn-lg btn-toggle";
	}

	if($cok2 == 'Ligado'){
		//echo "<BR>O cookie2 está Ligado";
		shell_exec("gpio -g write 20 1");
		$classebtn2 =  "btn btn-lg btn-toggle active";
	}else if($cok2 == "Desligado"){
		//echo "<BR>O cookie2 está Desligado";
		shell_exec("gpio -g write 20 0");
		$classebtn2 =  "btn btn-lg btn-toggle";
	}

	if($cok3 == 'Ligado'){
		//echo "<BR>O cookie3 está Ligado";
		shell_exec("gpio -g write 26 1");
		$classebtn3 =  "btn btn-lg btn-toggle active";
	}else if($cok3 == "Desligado"){
		//echo "<BR>O cookie3 está Desligado";
		shell_exec("gpio -g write 26 0");
		$classebtn3 =  "btn btn-lg btn-toggle";
	}

	if($cok4 == 'Ligado'){
		//echo "<BR>O cookie4 está Ligado";
		shell_exec("gpio -g write 16 1");
		$classebtn4 =  "btn btn-lg btn-toggle active";
	}else if($cok4 == "Desligado"){
		//echo "<BR>O cookie4 está Desligado";
		shell_exec("gpio -g write 16 0");
		$classebtn4 =  "btn btn-lg btn-toggle";
	}

	if($cok5 == 'Ligado'){
		//echo "<BR>O cookie5 está Ligado";
		shell_exec("gpio -g write 19 1");
		$classebtn5 =  "btn btn-lg btn-toggle active";
		echo "teste";
		echo "<script type='text/javascript'>document.getElementById('btn5').submit();</script>";
	}else if($cok5 == "Desligado"){
		//echo "<BR>O cookie5 está Desligado";
		shell_exec("gpio -g write 19 0");
		$classebtn5 =  "btn btn-lg btn-toggle";
	}

	if($cok6 == 'Ligado'){
		//echo "<BR>O cookie6 está Ligado";
		shell_exec("gpio -g write 13 1");
		$classebtn6 =  "btn btn-lg btn-toggle active";
	}else if($cok6 == "Desligado"){
		//echo "<BR>O cookie6 está Desligado";
		shell_exec("gpio -g write 13 0");
		$classebtn6 =  "btn btn-lg btn-toggle";
	}

	if($cok7 == 'Ligado'){
		//echo "<BR>O cookie7 está Ligado";
		shell_exec("gpio -g write 12 1");
		$classebtn7 =  "btn btn-lg btn-toggle active";
	}else if($cok7 == "Desligado"){
		//echo "<BR>O cookie7 está Desligado";
		shell_exec("gpio -g write 12 0");
		$classebtn7 =  "btn btn-lg btn-toggle";
	}

	if($cok8 == 'Ligado'){
		//echo "<BR>O cookie8 está Ligado";
		shell_exec("gpio -g write 6 1");
		$classebtn8 =  "btn btn-lg btn-toggle active";
	}else if($cok8 == "Desligado"){
		//echo "<BR>O cookie8 está Desligado";
		shell_exec("gpio -g write 6 0");
		$classebtn8 =  "btn btn-lg btn-toggle";
	}
	if($cok9 == 'Ligado'){
		//echo "<BR>O cookie8 está Ligado";
		shell_exec("gpio -g write 5 1");
		$classebtn9 =  "btn btn-lg btn-toggle active";
	}else if($cok9 == "Desligado"){
		//echo "<BR>O cookie8 está Desligado";
		shell_exec("gpio -g write 5 0");
		$classebtn9 =  "btn btn-lg btn-toggle";
	}
?>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="inicio.php"><span>Automação Residencial</span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li  class="active"><a href="inicio.php">Início</a></li>
                        <li><a href="sobre.html">Sobre</a></li>
                        <li><a href="contact.html">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->

<!--corpo-->
<section>
<form method="post" action="test.php">
<div class="container example" align="center">
  
<table width="500pt">
<tr><td height = "100px">
      <h4>Quarto</h4>
    <div class="col-sm-2">
    </div>

    <div class="col-sm-5">
      <button type="submit" class="<?php echo $classebtn1; ?>" data-toggle="button" aria-pressed="false" autocomplete="off" id="btn1" name="btn1" onclick="check()">
        <div class="handle"></div>
      </button>
    </div>

</td>
<td>
      <h4>Corredor</h4>
    <div class="col-sm-2">
    </div>

    <div class="col-sm-5">
      <button type="submit" class="<?php echo $classebtn2; ?>" data-toggle="button" aria-pressed="false" autocomplete="off" id="btn2" name="btn2"  onclick="check()">
        <div class="handle"></div>
      </button>
    </div>

</td>
<td>
      <h4>Banheiro</h4>
    <div class="col-sm-2">
    </div>

    <div class="col-sm-5">
      <button type="submit" class="<?php echo $classebtn3; ?>" data-toggle="button" aria-pressed="false" autocomplete="off"  id="btn3"  name="btn3" onclick="check()">
        <div class="handle"></div>
      </button>
    </div>

</td></tr>
<tr><td height = "100px">
      <h4>Sala</h4>
    <div class="col-sm-2">
    </div>

    <div class="col-sm-5">
      <button type="submit" class="<?php echo $classebtn4; ?>" data-toggle="button" aria-pressed="false" autocomplete="off"  id="btn4" name="btn4"  onclick="check()">
        <div class="handle"></div>
      </button>
    </div>

</td>
<td>
      <h4>Cozinha</h4>
    <div class="col-sm-2">
    </div>

    <div class="col-sm-5">
      <button type="submit" class="<?php echo $classebtn5; ?>" data-toggle="button" aria-pressed="false" autocomplete="off"  id="btn5"  name="btn5" onclick="check()">
        <div class="handle"></div>
      </button>
    </div>

</td
<tr><td>
      <h4>Quarto2</h4>
    <div class="col-sm-2">
    </div>

    <div class="col-sm-5">
      <button type="submit" class="<?php echo $classebtn6; ?>" data-toggle="button" aria-pressed="false" autocomplete="off"  id="btn6" name="btn6"  onclick="check()">
        <div class="handle"></div>
      </button>
    </div>

</td></tr>
<tr><td>
      <h4>Quintal</h4>
    <div class="col-sm-2">
    </div>

    <div class="col-sm-5">
      <button type="submit" class="<?php echo $classebtn7; ?>" data-toggle="button" aria-pressed="false" autocomplete="off"  id="btn7" name="btn7"  onclick="check()">
        <div class="handle"></div>
      </button>
    </div>

</td>
<td>
      <h4>Lavanderia</h4>
    <div class="col-sm-2">
    </div>

    <div class="col-sm-5">
      <button type="submit" class="<?php echo $classebtn8; ?>" data-toggle="button" aria-pressed="false" autocomplete="off"  id="btn8" name="btn8"  onclick="check()">
        <div class="handle"></div>
      </button>
    </div>

</td>
<td>
      <h4>Quarto3</h4>
    <div class="col-sm-2">
    </div>

    <div class="col-sm-5">
      <button type="submit" class="<?php echo $classebtn9; ?>" data-toggle="button" aria-pressed="false" autocomplete="off"  id="btn9" name="btn9"  onclick="check()">
        <div class="handle"></div>
      </button>
    </div>

</td></tr>
</table>
</div>
</form>

</section>
	<footer>
	&nbsp;&nbsp;&nbsp;Projeto Automação residencial
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>&copy; Moderna Theme. All right reserved.</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Moderna
                            -->
                            <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	</footer>	
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
</body>
</html>
