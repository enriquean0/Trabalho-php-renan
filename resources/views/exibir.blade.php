<!DOCTYPE html>
<html>
<head>
	<title>Exibir Produtos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<h1>{{ $produtos->slug}}</h1>
	<p>Codigo: {{ $produtos->id }}</p>
	<p>Descrição: {{ $produtos->descricao }}</p>
 	<p>Quantidade: {{ $produtos->quantidade }}</p>
	<p>Valor do Produto: {{ $produtos->valor }}</p>
	<p>Slug: {{ $produtos->slug }}</p>
	<a class="btn btn-primary" href="/produtos">Voltar</a>
</body>
</html>