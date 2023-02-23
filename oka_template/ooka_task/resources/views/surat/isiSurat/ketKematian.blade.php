@extends('surat.layouts.kopSurat', ['title' => 'Surat Keterangan Kematian'])

@section('content')
<div class="surat-title text-center">
        <h6 class="text-decoration-underline fs-4">SURAT KETERANGAN KEMATIAN</h6>
        <p>Nomor: </p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0 lh-3">
        <p style="text-indent: 2em;" >Yang bertanda tangan di bawah ini ___ Kalabbirang, Kecamatan ___, Kabupaten Takalar, menerangkan bahwa:</p>
        <table class="ps-5 lh-base">
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
        <p class="mt-3" style="text-indent: 2em;" >
            Yang Tersebut namanya diatas adalah benar Penduduk Lingkungan ___,
            Kelurahan Kalabbirang, Kec. ___, Kab. Takalar yang telah meninggal
            dunia pada hari ___, tanggal ___ pukul ___ WITA karena sakit yang
            dideritanya, surat keterangan ini dibuat atas dasar yang sebenarnya:
        </p>
        <table class="ps-5 lh-base">
            <tr >
                <td>Nama yang melapor</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Hubungan dengan yang meninggal</td>
                <td>:</td>
                <td></td>
            </tr>          
        </table>
        <p class="mt-3" >Demikian surat keterangan ini diberikan dan untuk dipergunakan sebagaimana mestinya.</p>
    </div>

    @include('surat.layouts.ttd2')

@endsection