

<!DOCTYPE html>
<html>
<head>
	<title>Data Buku</title>
</head>
<body>

<h3>Data Surat Masuk</h3>
<table>
<table>
	<thead>
	<tr>
	
	<th>No</th>
                                            <th>Incoming At</th>
                                            <th>Mail Date</th>
                                            <th>Mail From</th>
                                            <th>Mail To</th>
                                            <th>Subject</th>
                                            <th>User</th>

	</tr>
	
	</thead>
	
	
<br>

<tbody>
                                             @php($no = 1 )

	@foreach($mail as $data)
		<tr>
		
				<td>{{$no++}}</td>
                                             <td>{{$data->incoming_at}}</td>
                                             <td>{{$data->mail_date}}</td>
                                             <td>{{$data->mail_from}}</td>
                                             <td>{{$data->mail_to}}</td>
                                             <td>{{$data->mail_subject}}</td>
                                             
                                             <td>{{$data->user->name }}</td>

				
				</tr>
	@endforeach
</tbody>
</table>

</body>
</html>
