@extends('surat.layouts.kopSurat2', ['title' => 'Surat Pengantar Penikahan'])
<style>
    @page { 
        margin-top: 20px;
        margin-bottom: 0px; 
    }
</style>
@section('content')

<div class="surat-title text-center">
        <h6 class="text-decoration-underline fs-4">SURAT PENGANTAR PERNIKAHAN</h6>
        <p>Nomor: </p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0 lh-3">
        <p>Yang bertanda tangan di bawah ini menjelaskan dengan sesungguhnya bahwa:</p>
        <table class="ps-5 lh-sm">
            <tr >
                <td>1. Nama</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>2. Nomor Induk Kependudukan (NIK)</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>3. Jenis Kelamin</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>4. Tempat dan Tanggal Lahir</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>5. Kewarganegaraan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>6. Agama</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>7. Pekerjaan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>8. Alamat</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>9. Status Pernikahan: </td>
            </tr>
            <tr>
                <td class="ps-5">a. Laki-laki : Jejaka, Duda, Atau beristri ke </td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td class="ps-5">b. Perempuan : Perawan, Janda</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>10. Nama istri atau suami terdahulu: </td>
            </tr>
            <tr>
                <td class="ps-3">Adalah benar anak dari perkawinan seorang pria :</td>
            </tr>
            <tr>
                <td>Nama Lengkap dan Alias</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Nomor Induk Kependudukan (NIK)</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Tempat dan Tanggal Lahir</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
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
            <tr>
                <td class="ps-3" >Dengan seorang wanita :</td>
            </tr>
            <tr>
                <td>Nama Lengkap dan Alias</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Nomor Induk Kependudukan (NIK)</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Tempat dan Tanggal Lahir</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
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
        <p class="mt-1 mb-1" style="text-indent: 2em;" >Demikian surat pengantar ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya.</p>
    </div>

    @include('surat.layouts.ttd1')


@endsection