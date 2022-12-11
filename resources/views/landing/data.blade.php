<!-- @forelse ($users as $user)) 
{{ $user->username}}
{{ $user->password}}
{{ $user->role}}
{{ $user->email}}
@empty
@endforelse -->

<D!OCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>username</th>
                                    <th>password</th>
                                    <th>role</th>
                                    <th>email</th>
                                </tr>
                                @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->username}}</td>
                                    <td>{{ $user->password}}</td>
                                    <td>{{ $user->role}}</td>
                                    <td>{{ $user->email}}</td>
                                    <td>
                                    <a href="/lihat/edit/{{$user->id_user}}" 
                                        class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>edit</a>

                                    <a href="/lihat/hapus/{{$user->id_user}}" 
                                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" 
                                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>hapus</a>
                                  </td>
                                 </tr>
                                @empty
                                @endforelse
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html>
