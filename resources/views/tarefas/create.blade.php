<!DOCTYPE html>
<html>
<head>
	<title>Tarefas - Criar</title>
</head>
<body>

	<form action=" {{ route('tarefas.salvar') }} " method="POST">
		@csrf
		<input type="text" name="descricao"/>
		<button>Enviar</button>
	</form>

	<a href="{{ url('/tarefas') }}">Inicio</a>

</body>
</html>
