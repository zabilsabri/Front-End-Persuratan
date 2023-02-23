@extends('surat.layouts.kopSurat', ['title' => 'Surat Keterangan Kurang Mampu'])

@section('content')
<div class="surat-title text-center">
        <h6 class="text-decoration-underline fs-4">SURAT KETERANGAN KURANG MAMPU</h6>
        <p>Nomor: </p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0 lh-sm">
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
                <td>NIK</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Jumlah Tanggungan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Jumlah Penghasilan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>
        <p class="mt-2" >Yang tersebut diatas benar adalah orang tua / wali dari anak:</p>
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
                <td>Pekerjaan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Nama Sekolah</td>
                <td>:</td>
                <td></td>
            </tr>  
            <tr>
                <td>NIS / Kelas</td>
                <td>:</td>
                <td></td>
            </tr>  
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td></td>
            </tr>            
        </table>
        <p class="mt-2" style="text-indent: 2em;" >
            Orang tua / Wali tersebut diatas adalah seorang ___ berdomisili
            di Lingkungan ___ dengan penghasilan ___ setiap bulannya sehingga
            benar kurang mampu membiayai pendidikan anaknya dengan Tanggungan 2 Orang.
        </p>
        <p>Demikian surat keterangan ini diberikan dan untuk dipergunakan sebagaimana mestinya.</p>
    </div>

    @include('surat.layouts.ttd1')

@endsection