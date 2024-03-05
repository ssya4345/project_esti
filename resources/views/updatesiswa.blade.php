<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formsiswa</title>
</head>
<body>
    <div class="card-header"><h1>Edit Data</h1>
    <form action="/siswa/update/{{$siswa->nis}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="col-mb-3">
        <label for="" class="form-label">nis</label>
        <input type="text" name="nis" id="nis" value="{{ $siswa->nis}}" class="form-control">
    </div>
    <div class="col-mb-3">
        <label for="" class="form-label">nama</label>
        <input type="text" name="nama" id="nama" value="{{ $siswa->nama}}" class="form-control">
    </div>
    <div class="col-mb-3">
        <label for="" class="form-label">nohp</label>
        <input type="text" name="nohp" id="nohp" value="{{ $siswa->nohp}}" class="form-control">
    </div>
    <div class="col-mb-3">
        <label for="" class="form-label">alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ $siswa->alamat}}" class="form-control">
    </div>
    <div class="col-mb-3">
        <label for="" class="form-label">kelas</label>
        <input type="text" name="kelas" id="kelas" value="{{ $siswa->kelas}}" class="form-control">
    </div>
    <div class="pt-3">
        <input type="submit" value="simpan">
    </div>
    </form>
    </div>
</body>
</html>