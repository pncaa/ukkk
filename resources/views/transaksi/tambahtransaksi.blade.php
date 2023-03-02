<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Tambah Transaksi</title>
</head>
<div class="mb-4">

    <body>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="md-6">
            <div class="card">
                <div class="card-body">
                    <h1><strong>Tambah Transaksi</strong></h1>
                    <form action="/inserttransaksi" method="POST">

                        @csrf

                        <form>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namapelanggan">
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jenis Laundry</label>
                                    <select class="form-control" aria-label="Default select example" name="jenislaundry">
                                        <option selected>Jenis Laundry</option>
                                        <option value="pakaian">Pakaian</option>
                                        <option value="jaket">Jaket</option>
                                        <option value="bedcover">Bedcover</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Paket</label>
                                    <select class="form-control" aria-label="Default select example" name="paket">
                                        <option selected>Jenis Paket</option>
                                        <option value="gold">Gold</option>
                                        <option value="silver">Silver</option>
                                        <option value="bronze">Bronze</option>
                                    </select>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Berat</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="berat">
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Outlet</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="outlet">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>