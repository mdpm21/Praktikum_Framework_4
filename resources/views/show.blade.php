<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <title>Lihat Data Game</title>

    <style>    
    * {
    /* font-family: "Zen Antique"; */
    font-family: "Trebuchet MS";
    background-color: lightblue;
    /* background-color: green; */
    }
    
    
    h1 {
    text-transform: uppercase;
    color: black;
    background-color: white;
    }
    
    
    table {
    border: solid 1px white;
    /* border: solid 1px #DDEEEE; */
    border-collapse: collapse;
    border-spacing: 0;
    width: 90%;
    margin: 10px auto 10px auto;
    }
    
    
    table thead th {
    background-color: white;
    /* background-color: #DDEFEF; */
    /* border: solid 1px #DDEEEE; */
    border: solid 1px lightblue;
    color: #336B6B;
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px white;
    /* text-shadow: 1px 1px 1px red; */
    text-decoration: none;
    }
    
    table tbody td {
    border: solid 1px white;
    color: black;
    padding: 5px;
    /* padding: 10px; */
    text-shadow: 1px 1px 1px #fff;
    }
    
    a {
      background-color: #E1578A;
      /* background-color: red; */
      color: white;
      padding: 6px;
      border-radius: 10px;
      text-decoration: none;
      font-size: 12px;
    }
    
    
    button {
        background-color: #E1578A;
        color: white;
        padding: 10px;
        text-decoration: none;
        font-size: 12px;
        border: 0px;
        margin-top: 20px;
    }
    
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    
    
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: white;
      border: 2px solid #ccc;
      outline-color: red;
    }
    
    
    div {
      width: 100%;
      height: auto;
    }
    
    
    .base {
      width: 450px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: white;
      /* background: #E1578A; */
    }
    </style>
</head>
<body >

    <center>
        <h1>Lihat Data</h1>
    <center>
    <div class="container">
        <form action="/store" method="post">
            <section class="base">
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input value="{{$games->judul}}" readonly class="form-label"></input>
                
                <label class="form-label">Tahun</label>
                <input value="{{$games->tahun}}" readonly class="form-label"></input>
                
                <label class="form-label">Platform</label>
                <input value="{{$games->platform}}" readonly class="form-label"></input>
                
                <label class="form-label">Pengembang</label>
                <input value="{{$games->publisher->pengembang}}" readonly class="form-label"></input>
                
                <label class="form-label">Mesin</label>
                <input value="{{$games->publisher->mesin}}" readonly class="form-label"></input>
                
                <label class="form-label">Perangkat</label>
                <input value="{{$games->publisher->perangkat}}" readonly class="form-label"></input>
            </div>
            <div style=" padding-top:8px; padding-bottom: 13px;">
                <a href="/games" >Kembali</a>
            </div>
            </section>
        </form>
    </div>
</body>
</html>