<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
 
	
	<h3>Data artikel</h3>
 
	<a href="{{ route('tambahblog.index') }}"> + Tambah Pegawai Baru</a><br><br>
	<a href="{{ route('blog.index') }}">  view artikel</a>
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>image</th>
			<th>date</th>
			<th>jobs</th>
			<th>title</th>
			<th>description</th>
            <th>reading</th>
		</tr>
		@foreach($blog as $p)
		<tr>
			<td>{{ $p->image }}</td>
			<td>{{ $p->date }}</td>
			<td>{{ $p->jobs}}</td>
            <td>{{$p->title}}</td>
			<td>{{ $p->description }}</td>
            <td>{{ $p->reading }}</td>
			<td>
				<a href="/updateblog/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/updateblog/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>