@extends('surat.layouts.kopSurat', ['title' => 'Surat Keterangan Janda'])

@section('content')
<div class="surat-title text-center">
        <h6 class="text-decoration-underline fs-4">SURAT KETERANGAN JANDA</h6>
        <p>Nomor: </p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0">
        <p style="text-indent: 2em;" >Yang bertanda tangan di bawah ini ___ Kalabbirang, Kecamatan ___, Kabupaten ___, menerangkan sebenar-benarnya:</p>
        <table class="ps-5 lh-sm">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td class="fw-bold"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Tempat / Tgl Lahir</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>

        <p class="mt-4 mb-1">Yang tersebut diatas adalah benar - benar isteri dari Almarhum:</p>

        <table class="ps-5 lh-sm">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td class="fw-bold"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Tempat / Tgl Lahir</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>

        <p class="mt-4 mb-1" >Yang telah meinggal Dunia: </p>

        <table class="ps-5 lh-sm">
            <tr>
                <td>Hari / Tanggal</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>
        <p class="mt-4" >Demikian surat keterangan ini diberikan dan untuk dipergunakan sebagaimana mestinya.</p>
    </div>

    @include('surat.layouts.ttd1')

@endsection