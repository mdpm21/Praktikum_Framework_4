<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h1>Tambah Data</h1>
    <center>
    <div class="container">
        <form action="/store" method="post">
            @csrf
            <section class="base">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>

                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                    placeholder="Masukkan judul" required>

                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>

                <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun"
                    placeholder="Masukkan tahun" required>

                @error('tahun')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            
            <div class="mb-3">
                <label for="platform" class="form-label">Platform</label>
                
                <input type="text" class="form-control @error('platform') is-invalid @enderror" id="platform" name="platform"
                placeholder="Masukkan platform" required>
                
                @error('platform')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            
            <div class="mb-3">
                <label for="pub" class="form-label ">Pengembang</label>
                <select style="background-color: white;" name="pengembang_id" id="pengembang_id" class="form-select @error('pengembang_id') is-invalid @enderror"
                    aria-label="Default select example">
                    <option value="" selected>Pilih</option>
                    @foreach ($publishers as $pub)
                        <option value={{ $pub->id }}>{{ $pub->pengembang }}</option>
                    @endforeach
                </select>
                @error('pengembang_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div >
                <button type="submit" >Simpan Data</button>
            </div>
            </section>
        </form>
    </div>
</body>
</html>