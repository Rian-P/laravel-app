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
    <form action="/insertTeam" method="post" enctype="multipart/form-data"  >
    {{ csrf_field() }}
    <div class="mb-3 mt-5">
        <h1>Form Tambah Portofolio</h1>
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pendidikan</label>
            <select class="form-select" aria-label="Default select example" name="pendidikan">
                <option selected>Pilih Pendidikan</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
              </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
        <select class="form-select" aria-label="Default select example" name="jabatan">
            <option selected>Pilih Jabatan</option>
            <option value="Ketua">Ketua</option>
            <option value="Wakil">Wakil</option>
            <option value="Sekertaris">Sekertaris</option>
          </select>
    </div>
    <label for="exampleFormControlInput1" class="form-label">Image</label>
    <input type="file" class="form-control" id="exampleFormControlInput1" name="image">

    <button type="submit" class="btn btn-success mt-4">Submit</button>
</form>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>