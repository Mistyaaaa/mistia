<!DOCTYPE html>
<html lang="en">
<title>SMKN 1 JARO</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<style>

/* Style the header */
.city {
  background-color: green;
  padding: 10px;
  padding-bottom: 30px;
  text-align: light;
  font-size: 20px;
  color: white;
  
}

.four {
  border-style: solid;
  border-width: 1px 2px 2px 1px;
  border-color: black;
}

.four:link, .four:visited {
  background-color: blue;
  color: white;
  padding: 8px 20px;
  text-align: center;
  text-decoration: none;
  font-size: 12px;
  display: inline-block;
  float: right;
  margin-top: -4%;
  margin-right: 10%;
}

.one {
  margin-left: 0%;
}

.four:hover, .four:active {
  background-color: darkblue;
  font-size:58%;
}
.five {
  background-color: #f44336;
  color: white;
  padding: 9px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin-top: -4%;
  float: right;
  margin-right: 2%;
  border-style: solid;
  border-width: 1px 2px 2px 1px;
  border-color: black;

}

.five:hover, .five:active {
  background-color: red;
  font-size: 41%;

}

.two {
  margin-left: 7.5%;
  margin-top: -5.5%;
}
</style>
<header class="city">
<img class="one" src="https://l.top4top.io/p_2739gkdvx1.png" alt="Gambar" width="100" height="100" float="light" >
  <h2 class="two">SMKN 1 JARO</h2>
  <a class="four" href="http://127.0.0.1:8000/home">Dashboard</a>
  <h3>
    <a action="{{ route('logout') }}" method="POST" role="search">
                @csrf
                
                @method('DELETE')
                <button class="five" type="submit">Logout</button>
        </a>
    </h3>
</header>

<body style="background: hsl(119, 60%, 90%)">
<h3 class="text-center my-4">EDIT DATA SMKN 1 JARO</h3>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
            <a href="http://127.0.0.1:8000/posts" class="btn btn-md btn-success mb-3">Kembali</a>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $post->title) }}" placeholder="Masukkan Judul Post">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <select class="form-select" name="kelas">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="7" @if ($post->Kelas == "7") selected @endif>7</option>
                            <option value="8"@if ($post->Kelas == "8") selected @endif>8</option>
                            <option value="9"@if ($post->Kelas == "9") selected @endif>9</option>
                            </select><br>

                            <select class="form-select" name="urusan">
                            <option value="">Pilih Jurusan</option>
                            <option value="Agribisnis Ternak Ruminansia" @if ($post->Jurusan == "Agribisnis Ternak Ruminansia") selected @endif>Agribisnis Ternak Ruminansia</option>
                            <option value="Teknik Komputer & Jaringan"@if ($post->Jurusan == "Teknik Komputer & Jaringan") selected @endif>Teknik Komputer & Jaringan</option>
                            <option value="Teknik Sepeda Motor"@if ($post->Jurusan == "Teknik Sepeda Motor") selected @endif>Teknik Sepeda Motor</option>
                            </select><br>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Post">{{ old('content', $post->content) }}</textarea>
                            
                                <!-- error message untuk content -->
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>