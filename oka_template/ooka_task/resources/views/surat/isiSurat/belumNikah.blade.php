@extends('surat.layouts.kopSurat', ['title' => 'Surat Belum Nikah'])

@section('content')
<div class="surat-title text-center">
        <h6 class="text-decoration-underline fs-4">SURAT KETERANGAN BELUM MENIKAH</h6>
        <p>Nomor: </p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0 lh-lg">
        <p style="text-indent: 2em;" >Yang bertanda tangan di bawah ini ___ Kalabbirang, Kecamatan ___, Kabupaten Takalar, menerangkan bahwa:</p>
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
                <td>NIK</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Status</td>
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
                <td>Alamat</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>
        <p style="text-indent: 2em;" >Yang tersebut namanya diatas adalah benar penduduk ___, Kelurahan Kalabbirang, Kecamatan ___, yang sepanjang sepengetahuan kami <span class="fw-bold fst-italic"> belum pernah Menikah / Kawin. </span></p>
        <p style="text-indent: 2em;" >Demikian surat keterangan ini diberikan dan untuk dipergunakan sebagaimana mestinya.</p>
    </div>

    @include('surat.layouts.ttd1')

@endsection