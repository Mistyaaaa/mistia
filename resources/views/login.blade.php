<!doctype html>
<html lang="en">

<style>

.one {
  margin-left: 55%;
  margin-top: -20%;
}

.two {
    text-align: left;
    margin-left: 25%;
    margin-top: 5%;
}

</style>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMKN 1 JARO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body style="background: hsl(119, 60%, 90%);">
<div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="two">Login</h1>
                    <img class="one" src="https://l.top4top.io/p_2739gkdvx1.png" alt="Gambar" width="95" height="95" float="light" >
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Login</button>
                                <div class="mb-4">
                                    <br><center>Belum Punya Akun</center></br>
                                    <p><center>&#8675;,&#8675;,&#8675;,&#8675;,&#8675;</center></p>                                   
                                    <a href="http://127.0.0.1:8000/register"><center>Silakan Registrasi dulu</center></a>
                                    
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>