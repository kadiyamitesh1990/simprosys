<!DOCTYPE html>
<html>
<head>
	<title>Product Create</title>
	<style type="text/css">
		table{
			width: 80%;
			margin-left: 50px;
			margin-top: 80px;
		}
        table tr td{
            border: 1px solid #ddd;
        }
	</style>
</head>
<body>

<form method="post" action="{{ route('product.store') }}">
    @csrf()
<table>
	<tr>
		<td>No of Records</td>
        <td>
            <input type="text" name="numbers" placeholder="Enter number of products" />
        </td>
	</tr>

	<tr>
		<td colspan="2"><input type="submit" name="submit"></td>
	</tr>

	<tr>
		<td>Export To Excel
		<td><a href="{{ route('product.export') }}">Export to Excel</a>
	</tr>
</table>
</form>
</body>
</html>