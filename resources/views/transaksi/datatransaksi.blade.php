<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    @extendS('tampilan.mainbar')

    @section('nama')
    TRANSAKSI
    @endsection

    @section('nama2')
    Data Transaksi
    @endsection

    @section('tombol')
    <a href="/tambahtransaksi"><button type="button" class="btn btn-success">tambah</button></a>
    @endsection

    @section('conten')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Laundry</th>
                <th scope="col">Paket</th>
                <th scope="col">Berat</th>
                <th scope="col">Outlet</th>
                <th scope="col">Status</th>
                <th scope="col">Total Pembayaran</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no= 1;
            @endphp

            @foreach ( $dataTransaksi as $index =>$row)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->namacustomer }}</td>
                <td>{{ $row->jenislaundry}}</td>
                <td>{{ $row->paket }}</td>
                <td>{{ $row->berat }} Kg</td>
                <td>{{ $row->outlet }}</td>
                <td>
                    <div class="progress">
                        <div class="progress-bar {{($row->status =='selesai') ? 'bg-success' : 'bg-danger'}}" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="20">{{$row->status}}</div>
                    </div>
                </td>
                <td>
                    <center>
                        {{ $row->totalbayar }}.000
                    </center>
                </td>
                <td>
                    <a href="/tampiltransaksi/{{$row->id}}"><button type="button" class="btn btn-warning">Edit</button></a>
                    <a href="/hapustransaksi/{{$row->id}}"><button type="button" class="btn btn-danger">Hapus</button></a>
                    <a href="/nota/{{$row->id}}"><button type="button" class="btn btn-success">Nota</button></a>
                </td>
            </tr>
            @endforeach
            @endsection
        </tbody>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>