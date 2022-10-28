<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register Page</title>
    <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    
    <center>
        <h1>DAFTAR</h1>
    <center>
    @if(session('success'))
    <div class="alert alert-success">
        <b>Hell Yeah!</b> {{session('success')}}
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">
        <b>Opps!</b> {{session('error')}}
    </div>
    @endif
    <form action="{{url('/action-register')}}" method="POST"> <!-- ini file tembus ke create2.php -->
    @csrf
    <section class="base">
    <div>
        <label>Nama pengguna</label>
        <input type="text" placeholder="masukkan nama" name="name" autocomplete="off" required />
    </div>

    
    
    <div>
        <label>Email</label>
        <input type="email" placeholder="masukkan email" name="email" required>
    </div>

    <div>
        <label>Sandi</label>
        <input type="password" placeholder="masukkan sandi" name="password" autocomplete="off" required />
    </div>

    <div>
        <label>Konfirmasi Sandi</label>
        <input type="password" placeholder="masukkan sandi" name="confirm_password" autocomplete="off" required>
    </div>        
    
    <div>
        <button type="submit" >Daftar</button>
    </div>
    
    </section>
    </form>
    <p class="text-muted">Sudah memiliki akun? <a href="/login">Login!</a></p>
</body>

</html>