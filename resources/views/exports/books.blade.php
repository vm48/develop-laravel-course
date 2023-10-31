<table>
	<thead>
	<tr style="background: #a70909;">
		<th style="width: 50px;text-align: center;text-transform: uppercase;"><b>ID</b></th>
		<th style="width: 250px;text-align: center;text-transform: uppercase;"><b>Created At</b></th>
		<th style="width: 250px;text-align: center;text-transform: uppercase;"><b>Updated At</b></th>
		<th style="width: 50px;text-align: center;text-transform: uppercase;"><b>User Id</b></th>
		<th style="width: 300px;text-align: center;text-transform: uppercase;"><b>Name</b></th>
	</tr>
	</thead>
	<tbody>
	@foreach($books as $book)
		<tr>
			<td>{{ $book->id }}</td>
			<td>{{ $book->created_at }}</td>
			<td>{{ $book->updated_at }}</td>
			<td>{{ $book->user_id }}</td>
			<td>{{ $book->name }}</td>
		</tr>
	@endforeach
	</tbody>
</table>