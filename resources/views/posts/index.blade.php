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

<body style="background: hsl(119, 60%, 90%);">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">DATA SMKN 1 JARO</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH SISWA</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">JURUSAN</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($posts as $post)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{!! $post->kelas !!}</td>
                                    <td>{!! $post->jurusan !!}</td>
                                    <td>{!! $post->content !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>