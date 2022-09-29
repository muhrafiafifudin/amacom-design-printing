<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print PDF</title>
    <style>
        body {
            padding-left: 30px;
            padding-right: 30px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <table width="100%" style="border: none">
        <tr style="border: none">
            <td width="30%" style="border: none">
                <h1>AMACOM</h1>
            </td>
            <td width="70%" style="border: none; line-height:10px">
                <h2 class="text-center">AMACOM</h2>
                <p class="text-center">Jl. Kebangkitan Nasional, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141</p>
            </td>
        </tr>
    </table>

    <h3 class="text-center" style="line-height: 10px; margin-top: 5rem">Laporan Penjualan</h3>
    <p class="text-center" style="line-height: 10px; margin-bottom: 3rem">Dari Tanggal : {{ date('d M Y', strtotime($fromDate)) }} Sampai Tanggal : {{ date('d M Y', strtotime($toDate)) }}</p>

    <table width="100%">
        <tr>
            <th>No.</th>
            <th>Pembeli</th>
            <th>Nomor Transaksi</th>
            <th>Pekerjaan</th>
            <th>Tanggal Masuk</th>
            <th colspan="2">Total</th>
        </tr>
        @php $no=1; $gross_amount = 0; @endphp
        @foreach ($transactions as $transaction)
            @php
                $gross_amount += $transaction->total
            @endphp

            <tr class="text-center">
                <td>{{ $no++ }}</td>
                <td>{{ $transaction->users->name }}</td>
                <td>{{ $transaction->order_number }}</td>
                <td>{{ $transaction->products->name }}</td>
                <td>{{ date('d M Y', strtotime($transaction->created_at)) }}</td>
                <td style="border-right-color: white">Rp.</td>
                <td style="text-align: right; padding-right: 20px">{{ number_format($transaction->total, 2, ',', '.') }}</td>
            </tr>
        @endforeach

        @if ($transactions->count() > 0)
            <tr>
                <td colspan="4"></td>
                <td class="text-center"><strong>Total</strong></td>
                <td class="text-center" style="border-right-color: white"><strong>Rp.</strong></td>
                <td style="text-align: right; padding-right: 20px"><strong>{{ number_format($gross_amount, 2, ',', '.') }}</strong></td>
            </tr>
        @else
            <tr>
                <td class="text-center" colspan="7"><strong>Data Kosong</strong></td>
            </tr>
        @endif
    </table>

    <table width="100%" style="border: none; margin-top: 8rem">
        <tr style="border: none">
            <td width="25%" style="border: none">
            </td>
            <td width="25%" style="border: none">
            </td>
            <td width="25%" style="border: none">
            </td>
            <td width="25%" style="border: none; line-height:10px">
                <h3 class="text-center">Admin,</h3>
                <br><br><br><br>
                <p class="text-center">Amacom</p>
            </td>
        </tr>
    </table>
</body>

</html>
