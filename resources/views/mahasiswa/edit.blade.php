<DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <div class="container">
    <h1>Edit Data Mahasiswa</h1>
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
   {{session('sukses')}}
</div>
    @endif
        <div class="row">
        <div class="col-lg-12">
     <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
     {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputID">ID</label>
    <input name="id" type="text" class="form-control" id="exampleInputID" aria-describedby="emailHelp" placeholder="ID" value="{{$mahasiswa->id}}"> 
    </div>
    
  <div class="form-group">
    <label for="exampleInputNIM1">NIM</label>
    <input name="NIM" type="text" class="form-control" id="exampleInputNIM1" placeholder="NIM" value="{{$mahasiswa->nim}}"> 
  </div>

  <div class="form-group">
    <label for="exampleInputNAMA_LENGKAP">NAMA LENGKAP</label>
    <input name="NAMA_LENGKAP" type="text" class="form-control" id="exampleInputNAMA_LENGKAP" placeholder="NAMA LENGKAP" value="{{$mahasiswa->nama}}"> 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
      </div>
      </div>
        </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>
