<table>
	<thead>
		<tr>
			<th>Category ID</th>
			<th>Category Title</th>
			<th>Create Date</th>
		</tr>
	</thead>

	<tbody>
		@foreach($categories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td>{{ date("d F,Y",strtotime($category->created_at)) }}</td>
			</tr>
		@endforeach
	</tbody>
</table>