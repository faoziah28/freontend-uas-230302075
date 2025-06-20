<!DOCTYPE html>
<html>
<head>
    <title>Export Data Pasien</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #000; padding: 5px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Data Pasien</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i => $pasien)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $pasien['nama'] }}</td>
                <td>{{ $pasien['alamat'] }}</td>
                <td>{{ $pasien['tanggal_lahir'] }}</td>
                <td>{{ $pasien['jenis_kelamin'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
