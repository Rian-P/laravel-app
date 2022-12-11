<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
 

<h3>Data artikel</h3>
 
 <a href="{{ route('users') }}"> Kembali</a>
 
 <br/>
 <br/>
 @foreach($user as $p)
 <form action="{{ route('updateusers') }}" method="post">
     {{ csrf_field() }}
     <input type="hidden" name="id" value="{{ $p->id_user }}"> <br/>
     username <input type="text" name="username" required="required" value="{{ $p->username}}"> <br/>
     password <input type="text" name="password" required="required" value="{{ $p->password}}"> <br/>
     role <input name="text" required="role" value="{{ $p->role}}"> <br/>
     email <input type="email" name="email" required="required" value="{{ $p->email}}"> <br/>
     <input type="submit" value="Simpan Data">
 </form>
 @endforeach
</body>
</html>











