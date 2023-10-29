<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Редактирование пользователя</title>
</head>
<body>
<h1>Пользователь {{ $user->name }}</h1>
<a href="{{ route('admin') }}">Назад</a><br><br>
<form action="{{ route('admin.users.update',$user->id) }}" method="post">
	@csrf
	<table style="min-width: 25%">
		<tr>
			<td><label for="name">Имя</label></td>
			<td>
				<input type="text" name="name" placeholder="Имя" value="{{ $user->name }}" style="width: 100%;max-width: 100%;display: block;">
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Обновить" style="width: 100%;"></td>
		</tr>
	</table>
</form>
</body>
</html>