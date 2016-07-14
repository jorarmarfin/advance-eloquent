<!doctype html>
<html>
<head>
	<title>Eliminar Varios Items, Destroy</title>
</head>
<body>
	{{count($books)}} Registros
	<form action="{{ url('destroy') }}" method="post" >
		{!! csrf_field()!!}
		{!!method_field('delete')!!}
		@foreach($books as $book)
			<input type="checkbox" name="ids[]" value="{{$book->id}}">{{$book->title}}<br>
		@endforeach
		<input type="submit" name="Enviar" value="Enviar">
	</form>
</body>
</html>