<?php
				
	$nome = $uf = $cidade = "";

	if (isset($_POST["nome"])) {
		$nome = $_POST["nome"];
	}

	if (isset($_POST["uf"])) {
		$uf =  $_POST["uf"];
	}

	if (isset($_POST["cidade"])) {
		$cidade =  $_POST["cidade"];
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Resposta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../img/cucumber.png" type="icon/png">
        <link href="../css/response.style.css" rel="stylesheet">
    </head>
    <body>
		<article id="container">
			
			<section>
				<ul>
					<li>Nome: <?php echo $nome; ?></li>
					<li>UF: <?php echo $uf; ?></li>
					<li>Cidade: <?php echo $cidade; ?></li>			
				</ul>
				
			
			</section>
			
			<section>
				<figure>
					<img src="../img/lula_molusco.png" alt="lula_molusco" />				
				</figure>
			
			
			</section>
		
			
		
		
		</article>
    
    
    </body>
</html>