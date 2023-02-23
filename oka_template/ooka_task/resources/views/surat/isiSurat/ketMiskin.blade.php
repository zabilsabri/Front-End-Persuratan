@extends('surat.layouts.kopSurat', ['title' => 'Surat Keterangan Miskin'])
<style>
    .table-mis {
        border: 0.01em solid black;
        border-collapse: collapse;
    }
    table th {
        border: 0.01em solid black;
        text-align:center;
    }
    .tber {
        border-left: 0.01em solid black;
        border-right: 0.01em solid black;
    }
    .tbrn{
        border-right: 0.01em solid black;
    }
</style>

@section('content')
<div class="surat-title text-center">
        <h6 class="text-decoration-underline fs-4">SURAT KETERANGAN MISKIN</h6>
        <p>Nomor: </p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0 lh-lg">
        <p style="text-indent: 2em;" >Yang bertanda tangan di bawah ini ___ Kalabbirang, Kecamatan ___, Kabupaten Takalar, menerangkan bahwa:</p>
        <table class="table table-mis pe-5 ps-5">
            <thead>
                <tr>
                <th scope="col" colspan="2">NAMA</th>
                <th scope="col">TEMPAT / TGL LAHIR</th>
                <th scope="col">JENIS KELAMIN</th>
                <th scope="col">ALAMAT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-end pe-2">1.</td>
                    <td class="tbrn ps-0 pe-4">Mark</td>
                    <td class="tber">Otto</td>
                    <td class="tber">@mdo</td>
                    <td class="tber">Rumah</td>
                </tr>
                <tr>
                    <td class="text-end pe-2">2.</td>
                    <td class="tbrn ps-0 pe-4">Jacob</td>
                    <td class="tber">Thornton</td>
                    <td class="tber">@fat</td>
                    <td class="tber">Rumah</td>
                </tr>
                <tr>
                    <td class="text-end pe-2">3.</td>
                    <td class="tbrn ps-0 pe-4">Name</td>
                    <td class="tber">TTL</td>
                    <td class="tber">JKL</td>
                    <td class="tber">Rumah</td>
                </tr>
            </tbody>
        </table>
        <p style="text-indent: 2em;" >
            Yang tersebut namanya diatas saat ini benar di Lingkungan Bilacaddi,
            Kelurahana Kalabbirang, Kecamatan ___, Kabupaten Takalar.
        </p>
        <p>
            Demikian surat keterangan ini diberikan dan untuk dipergunakan sebagaimana mestinya.
        </p>
    </div>

    @include('surat.layouts.ttd1')

@endsection