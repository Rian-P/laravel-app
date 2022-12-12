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
    <form action="/updateteam/{{$data->id}}" method="post" enctype="multipart/form-data"  >
    {{ csrf_field() }}
    <div class="mb-3 mt-5">
        <h1>Form Tambah Portofolio</h1>
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{$data->nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pendidikan</label>
            <select class="form-select" aria-label="Default select example" name="pendidikan">
                <option selected>{{$data->pendidikan}}</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
                <option value="Kuliah">Kuliah</option>
              </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
        <select class="form-select" aria-label="Default select example" name="jabatan">
            <option selected>{{$data->jabatan}}</option>
            <option value="Chief Executive Officer">Chief Executive Officer</option>
            <option value="Chief Operating Officer">Chief Operating Officer</option>
            <option value="Chief Technology Officer">Chief Technology Officer</option>
            <option value="Chief Marketing Officer">Chief Marketing Officer</option>
            <option value="Chief International Officer">Chief International Officer</option>
            <option value="Chief Creative Officer">Chief Creative Officer</option>
            <option value="Chief Product Officer">Chief Product Officer</option>
            <option value="Senior iOS Developer">Senior iOS Developer</option>
            <option value="UI/UX Designer">UI/UX Designer</option>
            <option value="Senior Full Stack Programmer">Senior Full Stack Programmer</option>
            <option value="Senior Mobile Programmer">Senior Mobile Programmer</option>
            <option value="Senior Android Programmer">Senior Android Programmer</option>
            <option value="Senior Backend Engineer">Senior Backend Engineer</option>
            <option value="Senior Web Programmer">Senior Web Programmer</option>
            <option value="Senior Frontend Programmer">Senior Frontend Programmer</option>
            <option value="Creative Director">Creative Director</option>
            <option value="Videographer & Editing">Videographer & Editing</option>
          </select>
    </div>
    <label for="exampleFormControlInput1" class="form-label">{{$data->image}}</label>
    <input type="file" class="form-control" id="exampleFormControlInput1" name="image">

    <button type="submit" class="btn btn-success mt-4">Submit</button>
</form>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>