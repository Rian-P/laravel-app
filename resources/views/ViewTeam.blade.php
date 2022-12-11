<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <div class="container">
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $row)
          <tr>
            <th>{{$row->nama}}</th>
            <td>{{$row->pendidikan}}</td>
            <td>{{$row->jabatan}}</td>
            <td><img src="{{asset('storage/image/team/'.$row->image)}}" alt="" style="width: 50px;"></td>
            <td>
              <a href="/delete/{{$row->id}}" 
                onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" 
                class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>hapus</a>
            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="/team">back to from</a>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>