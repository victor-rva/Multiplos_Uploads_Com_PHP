<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload de Arquivos</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="text" name="nome" placeholder="Seu Nome">			
		
		<!-- File para arquivo único -->
		<input type="file" name="arquivo[]" multiple> 
		
		<input type="submit" name="enviar">
	</form>

	<?php 
	if (isset($_POST['enviar'])) {
		//print_r($_FILES['arquivo']);
		if (!empty($_FILES['arquivo']['name'][0])) {
		 	$totalArquivos = count($_FILES['arquivo']['name']);
		 	$erros = array();

		 	for ($i = 0; $i < $totalArquivos; $i++) {		 	
			 	$nomeArquivo = $_FILES['arquivo']['name'][$i];
			 	$tipo = $_FILES['arquivo']['type'][$i];
			 	$nomeTemporario = $_FILES['arquivo']['tmp_name'][$i];
			 	$tamanho = $_FILES['arquivo']['size'][$i];

			 	$tamanhoMaximo = 1024 * 1024 * 5; //5MB
			 	if ($tamanho > $tamanhoMaximo) {
			 		$erros[] = "O arquivo $nomeArquivo excede o tamanho máximo.<br>";
			 	}

			 	$arquivosPermitidos = ["png", "jpg", "jpeg"];
			 	$extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
			 	if (!in_array($extensao, $arquivosPermitidos)) {
			 		$erros[] = "Arquivo $nomeArquivo não permitido.<br>";
			 	}

				$typesPermitidos = ["image/png", "image/jpg", "image/jpeg"];
				if (!in_array($tipo, $typesPermitidos)) {
				 	$erros[] = "Tipo de arquivo $nomeArquivo não permitido.<br>";
				}
			
				if (empty($erros)) {
					$caminho = "uploads/";
					$hoje = date("d-m-Y_h-i");
					$user = $_POST['nome'];
					$novoNome = $user . "-" . $nomeArquivo;
					if (move_uploaded_file($nomeTemporario, $caminho . $novoNome)) {
						echo "Upload do arquivo $nomeArquivo feito com sucesso!<br>";
					} else {
						echo "Erro ao enviar o arquivo $nomeArquivo!<br>";
					}
				}
			}

			if (!empty($erros)) {
				foreach ($erros as $erro) {
					echo $erro;
				}
			}
		}
	}
	?>
</body>
</html>
