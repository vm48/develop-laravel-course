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
<a href="{{ route('start.books.export') }}" target="_blank">Скачать Excel</a>

@foreach($books as $book)
	<ul>
		<li>
			<b><a href="#">{{$book->name}}</a></b>
			<ul>
				<li>{{ $book->user->name }}
					@if($book->categories->isNotEmpty())
						{{ '(' }}
						@foreach($book->categories as $category)
							{{ $category->implode('name', ', ') }}
						@endforeach
						{{ ')' }}
					@endif
				</li>
			</ul>

		</li>
	</ul>
@endforeach

</body>
</html>