<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAPORAN DATA BAWANG-{{ date('Y') }}</title>
</head>

<body>

    <table border="0" style="margin: 0px auto;">
        <tr>
            <td style="padding-left: 20px; padding-right: 20px;">
                <center>
                    <h2 style="margin-bottom: 5px; margin-top: 0px;">LAPORAN DATA BAWANG</h2>
                    <h3>{{ date('d-m-Y') }}</h3>
                </center>
            </td>
        </tr>
    </table>
    <hr>
    <table border="1" cellspacing="0" cellpadding="2" style="width: 100%; margin-top:20px; border: 1px solid #000">

        <thead>
            <tr>
                <th>No</th>
                <th>No. Whatsapp</th>
                <th>Nama</th>
                <th>Jumlah Bawang</th>
                <th>Harga Bawang</th>
                <th>Tanggal Pembelian</th>
            </tr>
        </thead>
        <tbody>




            @if ($customers->count())
                @foreach ($customers as $customer)
                    <tr>
                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                        <td style="text-align: center;">{{ $customer->no_wa }}</td>
                        <td style="text-align: center;">{{ $customer->nama }}</td>
                        <td style="text-align: center;">{{ $customer->jml_bawang }}</td>
                        <td style="text-align: center;">{{ $customer->hrg_bawang }}</td>
                        <td style="text-align: center;">{{ $customer->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">
                        <h4 style="margin-top: 20px; text-align: center;">Data tidak belum tersedia</h1>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>

</body>

</html>
