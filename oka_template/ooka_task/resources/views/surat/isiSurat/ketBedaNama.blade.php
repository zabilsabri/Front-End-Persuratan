@extends('surat.layouts.kopSurat', ['title' => 'Surat Keterangan Beda Nama'])

@section('content')
<div class="surat-title text-center">
        <h6 class="text-decoration-underline fs-4">SURAT KETERANGAN BEDA NAMA</h6>
        <p>Nomor: </p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0 lh-lg">
        <p style="text-indent: 2em;" >Yang bertanda tangan di bawah ini ___ Kalabbirang, Kecamatan ___, Kabupaten ___, menerangkan bahwa:</p>
        <p class="ps-5 mb-0">Identitas dalam Kartu Tanda Penduduk (KTP)</p>

        <table class="ps-5">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td class="fw-bold"></td>
            </tr>
            <tr>
                <td>Tempat / Tgl Lahir</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>
        <p style="text-indent: 2em;">Bahwa yang tersebut di atas sesuai data dan pengakuan yang bersangkutan adalah: 
        Orang yang sama pada ___, atas nama ___, Tanggal Lahir ___, ___</p>
        <p>Demikian surat keterangan ini diberikan dan untuk dipergunakan sebagaimana mestinya.</p>
    </div>

    @include('surat.layouts.ttd1')

@endsection