<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ public_path('style/css/tempSurat.css') }}">
    <title>{{ $title }}</title>
    <style>
        td{
            padding-left: 10px;
        }
    </style>
</head>
<body>

    <div class="lampiranSurat text-end lh-1" style="font-size: 15px">
    Lampiran
    <br>
    Kepdirjen Bimas Islam Nomor 473 Tahun 2020 Tentang
    <br>
    Petunjuk Teknis Pelaksanaan Pencatatan Pernikahan
    <br>
    Model N1
    </div>

    <div class="kopSurat lh-1" style="font-size: 15px">
        <table>
            <tr>
                <td>Kantor Desa</td>
                <td>:</td>
                <td>Kalabbirang</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <td>:</td>
                <td>Takalar</td>
            </tr>
        </table>
    </div>

    @yield('content')

</body>
</html>