@extends('surat.layouts.kopSurat', ['title' => 'Surat Keterangan Pemekaran Wilayah'])

@section('content')
<div class="surat-title text-center">
        <h6 class="text-decoration-underline fs-4">SURAT KETERANGAN Pemekaran Wilayah</h6>
        <p>Nomor: </p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0 lh-lg">
        <p>Yang bertanda tangan di bawah ini Kepala Kelurahan Kalabbirang, Kecamatan Pattallassang, Kabupaten Takalar dengan ini menerangkan dengan dengan sebenar benarnya bahwa
            berdasarkan peraturan daerah Kabupaten Takalar ___
            tentang ___ maka, letak tanah di lingkungan ___, Kelurahan ____ Kecamatan
            ____, Kabupaten Takalar yang tercantum dalam sertifikat:
        </p>
        <ol>
            <li>
                
            </li>
        </ol>
        <p class="mt-5">
            Pemegang Hak Atas Nama ___ dengan No. NIB. <span class="fw-bold" >____</span>
            mengalami pemekaran Wilayah/perubahan Wilayah kerja dari Kelurahan ____,
            Kecamatan ____ menjadi Lingkungan ____ Kelurahan ____ Kec. Pattallassang
            Kabupaten Takalar.
        </p>
        <p>
            Demikian surat keterangan Pemekaran Wilayah ini diberikan kepada yang bersangkutan untuk dipergunakan
            sebagaimana mestinya.
        </p>
    </div>

    @include('surat.layouts.ttd1')

@endsection