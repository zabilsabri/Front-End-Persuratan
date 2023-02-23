@extends('surat.layouts.kopSurat', ['title' => 'Surat Keterangan Berkelakuan Baik'])

@section('content')
<div class="surat-title text-center">
        <h6 class="fs-4">SURAT KETERANGAN BERKELAKUAN BAIK</h6>
        <h6 class="text-decoration-underline">TIDAK TERLIBAT ORGANISASI TERLARANG</h6>
        <p>Nomor: </p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0 lh-3">
        <p style="text-indent: 2em;" >Yang bertanda tangan di bawah ini ___ Kalabbirang, Kecamatan ___, Kabupaten Takalar, menerangkan bahwa:</p>
        <table class="ps-5 lh-sm">
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
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
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
            <tr>
                <td>Untuk Keperluan</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>
        <p class="mt-3" style="text-indent: 2em;" >
           Oknum tersebut diatas adalah benar - benar penduduk
            yang berdomisili Lingkungan ___, Kelurahan Kalabbirang
            , Kecamatan ___, Kabupaten Takalar
        </p>
        <p class="mt-3" style="text-indent: 2em;" >
           Sepanjang sepengetahuan kami serta penyelidikan Kami,
           yang bersangkutan tidak pernah terlibat baik secara
           langsung maupun tidak langsung dalam suatu organisasi
           terlarang oleh pemerintah seperti perbuatan kriminal/Kejahatan/G30S/PKI
           atau semacamnya.
        </p>
        <p class="mt-3">Demikian surat keterangan ini diberikan dan untuk dipergunakan sebagaimana mestinya.</p>
    </div>

    @include('surat.layouts.ttd2')

@endsection