<!DOCTYPE html>
<html>
<head>
	<title>Produtos Listar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<h1 s>Listar produtos</h1>
	<a class="btn btn-primary" href="/produtos/novo">Novo Produto</a>

	<table class="table table-striped" border="1">
	@foreach ($produtos as $produtos)
	  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Valor</th>
    </tr>
  
		<tr class="table-primary">
			<td class="table-primary">{{ $produtos->id }}</td>
			<td class="table-primary">{{ $produtos->slug }}</td>
			<td class="table-primary">{{ $produtos->descricao}}</td>
			<td class="table-primary">{{ $produtos->quantidade }}</td>
			<td class="table-primary">{{ $produtos->valor }}</td>
			<td ><a href="/produtos/{{ $produtos->id}}">Exibir</a></td>
			<td ><a href="/produtos/editar/{{ $produtos->id}}">Editar</a></td>
			<td ><a href="/produtos/apagar/{{ $produtos->id}}">Apagar </a></td>
		</tr>
	@endforeach	
	</table>
</body>
</html>