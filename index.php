<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Casa Do Doce</title>

    <link rel="stylesheet" href="css/style.css"/>
                    
</head>

<body>

<header>

<div class="center">
	<div class="logo"> 
		<a href="index.php"><h2><img src="images/icon.png" alt="" class="logo"></h2></a>
	</div><!--logo-->
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="index.php?paginas=quemsomos">Quem Somos</a>
        <a href="index.php?paginas=contato">Contato</a>
		<a href="index.php?paginas=localizacao">Localização</a>

    </div><!--menu-->
</div><!--center-->

</header>

<section class="main">
    <div class="center2">
        <div class="main_cta">
            <h2>Casa do doce</h2>
            <p>o melhor dos doces</p>
        </div>
    </div><!--center-->
</section><!--main-->

<div class="conteudo">
	<div class="cont">
	<?php
		$paginas = "home";

		if(isset($_GET['paginas'])){ 

			if(file_exists("pages/".$_GET['paginas'].".php")){
				$paginas = $_GET['paginas'];
			}
		}
		include("pages/$paginas.php");
	?>
	</div>

</div>

<footer>
	Aluno: Carlos Daniel Cotrim Vieira da Silva / RA: 20040203-5
</footer>

<script src="https://kit.fontawesome.com/cff692a46a.js" crossorigin="anonymous"></script>
</body>

</html>