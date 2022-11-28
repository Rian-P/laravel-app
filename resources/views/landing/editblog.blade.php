<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
 

	<h3>Data artikel</h3>
 
	<a href="{{ route('updateblog.index') }}"> Kembali</a>
	
	<br/>
	<br/>
    @foreach($blog as $p)
	<form action="{{ route('update.index') }}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		image <input type="text" name="image" required="required" value="{{ $p->image}}"> <br/>
		jobs <input type="text" name="jobs" required="required" value="{{ $p->jobs}}"> <br/>
		title <input name="title" required="required" value="{{ $p->title}}"> <br/>
        description <input type="text" name="description" required="required" value="{{ $p->description}}"> <br/>
        reading <input type="test" name="reading" required="required" value="{{ $p->reading}}"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>











