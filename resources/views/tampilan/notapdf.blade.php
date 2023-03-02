<center>
    <h3>NOTA PEMBAYARAN DWILaund</h3>
</center>
<p>Kepada Yth. : {{$transaksi ->namacustomer}}</p>

<table border="2" align="center" cellpadding="15">
    <tr align="center">
        <th>jenis Laundry</th>
        <th>Berat</th>
        <th>Jumlah Bayar</th>

    </tr>
    <tr>
        <td>{{$transaksi ->jenislaundry}}</td>
        <td>{{$transaksi ->berat}} Kg</td>
        <td>{{$transaksi ->totalbayar}}.000</td>
    </tr>
</table>