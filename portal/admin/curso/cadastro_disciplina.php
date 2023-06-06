<!DOCTYPE html>

<html lang="pt-br">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Portal</title>

		<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
					
</head>


<body>

		<form id="form_login" name="form_login" class="form_login" method="post" action="valida_login.php">
			<div><h1>CADASTRAR DISCIPLINA</h1></div>

			    <div class="agrupamento_cadastrar_disciplina">
				<div>
					<div><label>Código do curso</label></div>
					<div><input type="text" id="nome_cadastrar_disciplina" name="nome_cadastrar_disciplina" required autofocus></div>

					<div><label>Nome da disciplina</label></div>
					<div><input type="text" id="nome_cadastrar_disciplina" name="nome_cadastrar_disciplina" required autofocus></div>

					<div><label>Carga horária</label></div>
					<div><input type="number"min="0" id="nome_cadastrar_disciplina" name="nome_cadastrar_disciplina" required autofocus></div>

					<div><input type="submit" id="btn_cadastrar" name="btn_entrar" value="Cadastrar"></div>
				</div>
			</div>
		</form>
		
</body>
</html>