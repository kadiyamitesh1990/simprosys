<table>
	<thead>
		<tr>
			<th>Product ID</th>
			<th>Category</th>
			<th>Title</th>
			<th>Description</th>
			<th>Price</th>
			<th>Status</th>
			<th>Create Date</th>
		</tr>
	</thead>

	<tbody>
		@foreach($products as $product)
			<tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->category->name }}</td>
				<td>{{ $product->title }}</td>
				<td>{{ $product->description }}</td>
				<td>{{ $product->price }}</td>
				<td>{{ ($product->status == 0) ? 'Deactive' : 'Active' }}</td>
				<td>{{ date("d F,Y",strtotime($product->created_at)) }}</td>
			</tr>
		@endforeach
	</tbody>
</table>