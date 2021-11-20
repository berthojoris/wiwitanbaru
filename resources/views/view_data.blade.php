<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <style>
        table {
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
    <thead>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Golongan Darah</th>
        <th>Alamat</th>
        <th>Pendidikan Terakhir</th>
        <th>No Telp</th>
        <th>Email</th>
        <th>Konfirmasi</th>
        <th>Waktu Submit</th>
        {{-- <th>Ijazah/Rapor</th>
        <th>Essay</th> --}}
    </thead>
    <tbody>
        @foreach ($registed_user as $user)
            <tr>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->tempat_lahir }}</td>
                <td>{{ $user->tanggal_lahir }}</td>
                <td>{{ $user->golongan_darah }}</td>
                <td>{{ $user->alamat }}</td>
                <td>{{ $user->pendidikan_terakhir }}</td>
                <td>{{ $user->nomor_telp }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->konfirmasi }}</td>
                <td>{{ $user->created_at }}</td>
                {{-- <td><a href="{{ route('download_ijazah', ['fileName' => $user->scan_ijazah]) }}">Download</a></td>
                <td><a href="{{ route('download_essay', ['fileName' => $user->essay]) }}">Download</a></td> --}}
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>