
<?php session_start(); ?>

<html>
	<head>
		<title>Gerenciador de Tarefas</title>
	</head>
	<body>

<style>
	body {
    font-family: Sans-serif;
	color: #333;
        }
        
    h1 {
     text-align: center;
        }
        
    .erro {
     color: #F44;
        }
        
    fieldset {
     border: 3px double #333;
    color: #000;
    margin: 10px 0 0 0;
        }
        
	label {
    display: block;
    margin: 10px 0 0 0;
        }
        
    input[type=text],
    textarea {
    width: 100%;
    border: 1px solid #333;
    padding: 3px;
    border-radius: 5px;
        }
    
    input[type=submit] {
    float: right;
     clear: both;
        }
        
    table {
    width: 100%;
        }
        
    table th {
    background-color: #EEE;
    font-size: 18px;
        }
</style>

		<h1>Gerenciador de Tarefas</h1>
		<!-- Aqui irá o restante do código -->
		<form>
			<fieldset>
				<legend>Nova tarefa</legend>
					<label>
						Tarefa:
						<input type="text" name="nome" />
					</label>
						<input type="submit" value="Cadastrar" />
					<label>
						Descrição (Opcional):
						<textarea name="descricao"></textarea>
					</label>
					<label>
						Prazo (Opcional):
						<input type="date" name="prazo" />
					</label>
				<fieldset>
					<legend>Prioridade:</legend>
					<label>
						<input type="radio" name="prioridade" value="baixa" checked />
						Baixa
						<input type="radio" name="prioridade" value="media" />
						Média
						<input type="radio" name="prioridade" value="alta" />
						Alta
					</label>
				</fieldset>
					<label>
						Tarefa concluída:
						<input type="checkbox" name="concluida" value="sim" />
					</label>
						<input type="submit" value="Cadastrar" />
			</fieldset>
		</form>

		<?php
			if (isset($_GET['nome'])) {
			$_SESSION['lista_tarefas'][] = $_GET['nome'];
			}
			$lista_tarefas = array();
			
			if (isset($_SESSION['lista_tarefas'])) {
			$lista_tarefas = $_SESSION['lista_tarefas'];
			}
		?>

		<table>
			<tr>
				<th>Tarefas</th>
			</tr>
			<?php foreach ($lista_tarefas as $tarefa) : ?>
			<tr>
				<td><?php echo $tarefa; ?> </td>
			</tr>

			

		<?php endforeach; ?>
		</table>

	</body>
</html>