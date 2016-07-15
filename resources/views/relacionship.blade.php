<!doctype html>
<html>
<head>
	<title>Relaciones</title>
</head>
<body>
	@foreach($categories as $category)
		<p>{{$category->name}} {{count($category->books)}}</p>
		<ul>
			@foreach($category->books as $book)
				<li> <strong>{{$book->title}}</strong>
				{{$book->descripcion}}
				</li>
			@endforeach
		</ul>
	@endforeach
</body>
</html>