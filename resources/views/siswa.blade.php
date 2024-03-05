<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/siswa/add"><button>Tambah data</button></a>
<table border="2">
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>No Hp</th>
        <th>Alamat</th>
        <th>Kelas</th>
        <th>AKSI</th>
    </tr>

    @foreach ($siswas as $key => $item )
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->nis }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->nohp}}</td>
        <td>{{ $item->alamat}}</td>
        <td>{{ $item->kelas}}</td>
        <td>
            <a href="/siswa/edit/{{$item->nis}}"><button>Edit</button></a>
            <a href="/siswa/delete/{{$item->nis}}"><button>Hapus</button></a>
        </td>
        @endforeach
    </tr>
</tr>
</table>
</body>
</html>