<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>ID</td>
			<td>Description</td>
		</tr>
		@foreach($datastreams as $datastream)
		<tr>
			<td>{{$datastream->ID}}</td>
			<td>{{$datastream->DESCRIPTION}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>