<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Пример Админки</title>
</head>
<body>
<h1>Пользователи</h1>
<a href="{{ route('admin') }}">Назад</a><br><br>
<a href="{{ route('admin.users.create') }}">Создать</a><br><br>
<table style="min-width: 50%">
	@foreach($users as $user)
		<tr>
			<td><a href="{{ route('admin.users.edit',$user->id) }}">{{ $user->name }}</a></td>
			<td>
				<form action="{{ route('admin.users.destroy',$user->id) }}" method="post">
					@csrf
					@method('DELETE')
					<input type="submit" value="Удалить">
				</form>
			</td>
		</tr>
	@endforeach
</table>
</body>
</html>