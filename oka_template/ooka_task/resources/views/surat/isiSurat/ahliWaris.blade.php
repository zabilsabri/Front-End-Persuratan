<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ public_path('style/css/tempSurat2.css') }}">
    <title>Surat Keterangan Ahli Waris</title>
</head>
<body>
<div class="surat-title text-center">
        <h6 class="text-decoration-underline fs-4">SURAT KETERANGAN AHLI WARIS</h6>
        <p>Nomor: </p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0 lh-3">
        <p>Yang bertanda tangan di bawah ini, menerangkan bahwa pada Hari ___, ____ meninggal dunia :</p>
        <table class="ps-5">
            <tr >
                <td>Nama</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Tempat / Tgl Lahir</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>
        <p class="mt-3" >Adapun Ahli Waris dari Almarhumah adalah sebagai berikut: </p>
        <table class="ps-5">
            <tr>
                <td>Nama</td>
                <td>(status)</td>
            </tr>
            <tr>
                <td>Tempat / Tgl Lahir</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>
        <p style="text-indent: 2em;" class="mt-3"> 
            Adalah benar yang tersebut namanya diatas adalah para ahli waris dari
            almarhum ___ yang menunjuk kepada ___ sebagai ahli waris yang mengurus
            segala administrasi dan keuangan almarhum.
        </p>
        <p class="mt-1" >Demikian surat pengantar ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya.</p>

        @include ('surat.layouts.ttd3')
</div>
</body>
</html>