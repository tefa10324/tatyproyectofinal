<link rel="shortcut icon" href="istockphoto-1413922045-612x612.jpg">
<h1>
<title>CURSO OFIMÁTICA </title>


	<center>
	<img src="img/IMG9.png">
	
	</center>
</h1>


<body background ="img/herramientas-digitales.jpg">
<fieldset style="background-color:#E8C999" style= "border-color:#00D0AA">
<span class="Estilo7"> <legend><strong>REGISTRO</strong></legend> </span> 
<?php
header('Content-Type: text/html; charset=UTF-8;');

if (!empty($_POST["cedula"])) {
	$c = $_POST["cedula"];

	if (!empty($_POST["fecha"])) {
		$f = $_POST["fecha"];

		if (!empty($_POST["email"])) {
			$r = $_POST["email"];

			$mensaje1 = "CÉDULA: ";
			$mensaje2 = "FECHA DE NACIMIENTO: ";
			$mensaje3 = "TEMA: ";

			print $mensaje1 . $c . "<br>";
			print $mensaje2 . $f . "<br>";
			print $mensaje3 . $r . "<br>";
		}
	}
}
?>
</fieldset>


<fieldset style="background-color:#E8C999" style= "border-color:#00D0AA">
<span class="Estilo7"> <legend><strong>INFORMACIÓN PERSONAL DEL ESTUDIANTE</strong></legend> </span> 
	<?php

	if (!empty($_POST["apellido"])) {
		$ap = $_POST["apellido"];

		if (!empty($_POST["nombre"])) {
			$nom = $_POST["nombre"];

			if (!empty($_POST["edad"])) {
				$ed = $_POST["edad"];

				if (!empty($_POST["direccion"])) {
					$dir = $_POST["direccion"];

					$mensaje1 = "APELLIDO: ";
					$mensaje2 = "NOMBRE: ";
					$mensaje3 = "EDAD: ";
					$mensaje4 = "DIRECCIÓN: ";

					print $mensaje1 . $ap . "<br>";
					print $mensaje2 . $nom . "<br>";
					print $mensaje3 . $ed . "<br>";
					print $mensaje4 . $dir . "<br>";

					if (!empty($_POST["genero"])) {
						$g = $_POST["genero"];

						if ($g == "masculino") {
							$sex = "GÉNERO: ";
							$m = "MASCULINO";
							print $sex . $m;
						} else {
							if ($g == "femenino") {
								$sex = "GÉNERO: ";
								$m = "FEMENINO";
								print $sex . $m;
							} else {
								if ($g == "otro") {
									$sex = "GÉNERO: ";
									$m = "OTRO";
									print $sex . $m;
	

							}
						}
					}
				}
			}
		}
	}
	?>
</fieldset>


<fieldset style="background-color:#E8C999" style= "border-color:#00D0AA">
<span class="Estilo7"> <legend><strong>TEMA </strong></legend>  </span> 
	<?php

	if (!empty($_POST["tema"])) {
		$his = $_POST["tema"];

		if ($his == "PREGUERRA") {
			$sms = "PREGUERRA ";
			print $sms . "<br>";
		} else {
			$sms = "PREGUERRA ";
			print $sms . "<br>";
		}
	}

	if (!empty($_POST["tema1"])) {
		$his = $_POST["tema1"];

		if ($his == "1910") {
			$sms = "1910 ";
			print $sms . "<br>";
		} else {
			$sms = "1910 ";
			print $sms . "<br>";
		}
	}

	if (!empty($_POST["tema2"])) {
		$his = $_POST["tema2"];

		if ($his == "INICIO") {
			$sms = "INICIO ";
			print $sms . "<br>";
		} else {
			$sms = "INICIO ";
			print $sms . "<br>";
		}
	}

	if (!empty($_POST["tema3"])) {
		$his = $_POST["tema3"];

		if ($his == "PAZ") {
			$sms = "PAZ ";
			print $sms . "<br>";
		} else {
			$sms = "PAZ ";
			print $sms . "<br>";
		}
	}

	if (!empty($_POST["tema4"])) {
		$his = $_POST["tema4"];

		if ($his == "RENDICION") {
			$sms = "RENDICION ";
			print $sms . "<br>";
		} else {
			$sms = "RENDICION ";
			print $sms . "<br>";
		}
	}

	if (!empty($_POST["tema5"])) {
		$his = $_POST["tema5"];

		if ($his == "1918") {
			$sms = "1918 ";
			print $sms . "<br>";
		} else {
			$sms = "1918";
			print $sms . "<br>";
		}
	}


	?>
</fieldset>




<fieldset style="background-color:#E8C999" style= "border-color:#00D0AA">
<span class="Estilo7"> <legend><strong>RETROALIMENTACIÓN</strong></legend> </span> 

	<?php

if (!empty($_POST["medicacion_ahora"])) {
	$med = $_POST["medicacion_ahora"];

	if ($med == "si") {
		$medi = "REFUERZO: ";
		$m = "Si";
		print $medi . $m . "<br>";
		
	if (!empty($_POST["medicacion_especifica"])) {
	$esp = $_POST["medicacion_especifica"];
	print "ESPECIFICACIÓN: ". $esp . "<br>";
}
	} else {
		if ($med == "no") {
			$medi = "REFUERZO: ";
			$m = "No";
			print $medi . $m . "<br>";
		}
	}
}
	?>
</fieldset>


</fieldset>

<fieldset style="background-color:#E8C999" style= "border-color:#00D0AA">
<span class="Estilo7"> 	<legend><strong>VIDEOS INTERACTIVOS</strong></legend>  </span> 
	<?php
	if (!empty($_POST["select"])) {
		$exa = $_POST["select"];

		if ($exa == "ANTESCEDENTES") {
			$msm = "ANTESCEDENTES";
			print $msm . "<br>";
		} else {

			if ($exa == "BELLA EPOQUE") {
				$msm = "BELLA EPOQUEA";
				print $msm . "<br>";
			} else {
				if ($exa == "PAZ ARMADA") {
					$msm = "PAZ ARMADA";
					print $msm . "<br>";
				} else {

					if ($exa == "IMPERIOS") {
						$msm = "IMPERIOS";
						print $msm . "<br>";
					} else {

						if ($exa == "FIN") {
							$msm = "FIN";
							print $msm . "<br>";
						}
						}
					}
				}
			}
		}
	}
	?>

</fieldset>
<center>
	<br/>
	<a href="formulario1.php"><input type="button" value="Regresar" /></a>
</center>