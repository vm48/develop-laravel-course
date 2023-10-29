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
<form action="{{ route('admin.users.create') }}" method="post">
	@csrf
	<table style="min-width: 25%">
		<tr>
			<td><label for="name">Имя</label></td>
			<td><input type="text" name="name" placeholder="Имя" style="width: 100%;max-width: 100%;display: block;"></td>
		</tr>
		<tr>
			<td><label for="email">E-mail</label></td>
			<td><input type="email" name="email" placeholder="E-mail" style="width: 100%;max-width: 100%;display: block;">
			</td>
		</tr>
		<tr>
			<td><label for="password">Password</label></td>
			<td>
				<input type="password" name="password" placeholder="Password" style="width: 100%;max-width: 100%;display: block;">
			</td>
		</tr>
		<tr>
			<td><label for="password">Password</label></td>
			<td>
				<input type="password" name="password" placeholder="Password" style="width: 100%;max-width: 100%;display: block;">
			</td>
		</tr>
		<tr>
			<td><label for="password_confirmation">Confirm Password</label></td>
			<td>
				<input type="password" name="password_confirmation" placeholder="Confirm Password" style="width: 100%;max-width: 100%;display: block;">
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Создать" style="width: 100%;"></td>
		</tr>
	</table>
</form>
</body>
</html>