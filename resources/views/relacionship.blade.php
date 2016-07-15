<!doctype html>
<html>
<head>
	<title>Relaciones</title>
</head>
<body>
	@foreach($categories as $category)
		<p>
			{{$category->name}}
			({{$category->num_books}})
		</p>
		<ul>
			@foreach($category->books_public as $book)
				<li>
					<strong>{{$book->title}}</strong>
						<em>{{$book->status}}</em>
				</li>
			@endforeach
		</ul>
	@endforeach
</body>
</html>