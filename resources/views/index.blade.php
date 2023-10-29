<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Пример страницы</title>
</head>
<body>
<h1>Авторы</h1>
<a href="/login">В админку</a>
@foreach($users as $user)
	<ul>
		<li>
			<b><a href="#">{{$user->name}}</a></b>
			<ul>
				@foreach($user->books as $book)
					<li>{{ $book->name }}</li>
				@endforeach
			</ul>

		</li>
	</ul>
@endforeach

</body>
</html>