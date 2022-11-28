<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
 
	
	<h3>Data artikel</h3>
 
	<a href="{{ route('updateblog.index') }}"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="{{ route('tambahblog.index') }}" method="post">
		{{ csrf_field() }}
		image <input type="text" name="image" required="required"> <br/>
		jobs <input type="text" name="jobs" required="required"> <br/>
		title <textarea name="title" required="required"></textarea> <br/>
        description <input type="text" name="description" required="required"> <br/>
        reading <input type="test" name="reading" required="required"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>











