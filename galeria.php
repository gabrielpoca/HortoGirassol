<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!-- InstanceBegin template="/Templates/temp1.dwt" codeOutsideHTMLIsLocked="false" -->
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Empresa orientado à venda e prestação de serviços relacionados com jardinagem" />
		<meta name="keywords" content="horto girassol, plantas, interior, exterior" />
		<meta name="author" content="Gabriel Poça" />
		<link rel="stylesheet" type="text/css" href="andreas02.css" media="screen" title="andreas02 (screen)" />
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />

		<title>Horto Girassol - Home</title>

		<script type="text/javascript" src="js/prototype.js"></script>
		<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
		<script type="text/javascript" src="js/lightbox.js"></script>
		<script type="text/javascript" src="lightbox.js"></script>

	</head>

	<body>
		<div id="toptabs">
			<p>Páginas <a class="activetoptab" href="index.php">Home</a><span class="hide"> | </span>
			    <!--<a class="toptab" href="index.html">My Company</a><span class="hide"> | </span>
		<a class="toptab" href="index.html">Artist projects</a><span class="hide"> | </span>
		<a class="toptab" href="index.html">Shop</a>--></p>
		</div>
		<div id="container">
			<div id="logo">
				<!--<h1><a href="index.html">Horto Girassol</a></h1>-->
			</div>
			<div id="navitabs">
				<h2 class="hide">Site menu:</h2>
				<a class="navitab" href="index.php">Home</a><span class="hide"> | </span>
				<a class="navitab" href="about.php">Sobre nós</a><span class="hide"> | </span>
				<a class="activenavitab" href="galeria.php">Galeria</a><span class="hide"> | </span>
				<a class="navitab" href="contactos.php">Contactos</a><span class="hide"> | </span>
			</div>
			<div id="desc">
				<!-- DESCRICCAO NO LOGO -->
			</div>
			<div id="main">
				<h3>Galeria</h3>
				<div id="galeria">

					<?
					$path = "./images/fotos/";
					$path_thumb = "./images/fotos/thumb";

					$a = 0;
					echo "<table border=\"0\" cellpadding=\"5\" cellspacing=\"5\" width=\"75%\">";
					$point = opendir($path_thumb);
					if ($point) {
						while ($file = readdir($point)) {
							if ($file != "." && $file != "..") {
								if (is_file("$path_thumb/$file")) {
									if ($a == 0)
										echo "<tr>";
									if ($a == 3) {
										echo "</tr><tr>";
										$a = 0;
									}
									echo "<td><a href=\"$path/$file\" rel=\"lightbox\">";
									echo "<img src=\"$path_thumb/$file\" alt=\"$file\"></a></td>";
									$a = $a + 1;
								}
							}
						}
						echo "<tr>";
						closedir($point);
					}

					echo "</table>"
					?>
					<!--<a href="images/fotos/camelias.JPG" rel="lightbox" >
					<img src="images/fotos/thumb/camelias.JPG" /></a>-->
				</div>
			</div>
			<div id="sidebar">
				<?php
				include_once 'sidebar.php';
				?>
				<br/><br/>
			</div>
			<div id="footer"> Horto Girassol </div>
		</div>
	</body>
</html>
