

<!DOCTYPE html>
<html>
<head>
	<title>Data Buku</title>
</head>
<body>

<h3>Data Buku</h3>
<table>
<table>
	<thead>
	<tr>
	
	<th>No</th>
                                            <th>Nmae</th>
                                            <th>Email</th>
                                            <th>Created At</th>
                                          

	</tr>
	
	</thead>
	
	
<br>

<tbody>
                                             @php($no = 1 )

	@foreach($user as $data)
		<tr>
		
				<td>{{$no++}}</td>
                                             <<td>{{$no++}}</td>
                                             <td>{{$data->name}}</td>
                                             <td>{{$data->email}}</td>
                                             <td>{{$data->created_at}}</td>
                                         

				
				</tr>
	@endforeach
</tbody>
</table>

</body>
</html>
