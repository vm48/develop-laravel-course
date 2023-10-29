<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Пример Админки</title>
</head>
<body>
<h1>Привет {{ Auth::user()->name }}</h1>
<a href="{{ route('admin.users') }}">Пользователи</a>
<a href="/admin/books">Книги</a>
<form action="{{ route('logout') }}" method="post">
	@csrf
	<input type="submit" value="Выйти" id="">
</form>
</body>
</html>