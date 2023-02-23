@extends('surat.layouts.kopSurat', ['title' => 'Surat Rekomendasi Pembelian BBM Jenis Tertentu'])
<style>
    .table-mis {
        border: 0.01em solid black;
        border-collapse: collapse;
    }
    table th, .tber {
        border: 0.01em solid black;
        text-align: center;
        vertical-align: middle;
        font-size: 15px;
    }
    .tber{
        padding-left:0px;
    }
</style>
@section('content')
<div class="surat-title text-center">
        <h6 class="text-decoration-underline fs-4">SURAT REKOMENDASI PEMBELIAN BBM JENIS TERTENTU</h6>
        <p>Nomor: </p>
    </div>
    <div class="surat-body fs-6 p-4 pt-0 lh-1">
        <p class="fw-bold" >Dasar Hukum: </p>
        <ol>
            <li>Undang-undang Nomor 22 Tahun 2001 tentang Minyak dan Gas Bumi</li>
            <li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintah Daerah</li>
            <li>Undang-undang Nomor 15 Tahun 2021 Tentang Harga Jual Eceran dan Konsumen pengguna Jenis Bahan Bakar Minyak tertentu</li>
            <li>Peraturan Menteri Energi dan Sumber Daya Mineral Republik Indonesia Nomor 01 Tahun 2013</li>
            <p>Dengan Ini Memberikan Rekomendasi Kepada: </p>
            <table>
                <tr class="fw-bold">
                    <td>Nama</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr class="fw-bold">
                    <td>NIK</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Alamat Domisili</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Konsumen Pengguna</td>
                    <td>:</td>
                    <td>
                        <ol>
                            <li>Usaha Mikro</li>
                            <li>Pertanian</li>
                        </ol>
                    </td>
                </tr>
            </table>
            <p class=" mt-3 mb-0" >Jenis Usaha kegiatan</p>
            <li>Berdasarkan Hasil Verifikasi Maka Kebutuhan BBM Digunakan untuk sarana sebagai berikut :</li>
            <table class="table table-mis">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis alat</th>
                        <th scope="col">Jumlah alat</th>
                        <th scope="col">Fungsi alat</th>
                        <th scope="col">BBM jenis tertentu</th>
                        <th scope="col">Kebutuhan BBM jenis tertentu</th>
                        <th scope="col">Jam atau hari operasi</th>
                        <th scope="col">Konsumsi BBM tertentu perliter ( jam, hari, minggu, bulanan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td class="tber">Pompanasi</td>
                        <td class="tber">1 Unit</td>
                        <td class="tber">Mengairi pertanian</td>
                        <td class="tber">Pertalite</td>
                        <td class="tber"></td>
                        <td class="tber">SETIAP HARI</td>
                        <td class="tber">5 LITER</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td class="tber">Pompanasi</td>
                        <td class="tber">1 Unit</td>
                        <td class="tber">Mengairi pertanian</td>
                        <td class="tber">Pertalite</td>
                        <td class="tber"></td>
                        <td class="tber">SETIAP HARI</td>
                        <td class="tber">5 LITER</td>
                    </tr>
                </tbody>
            </table>
            <li>Diberikan Alikosi Volume ___</li>
            <table>
                <tr >
                    <td>Sejumlah</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tempat Pengambilan</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Lokasi</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nomor Lengkap Penyalur</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
            <li>Masa berlaku surat Rekomendasi sampai dengan <span class="fw-bold">___</span> BERIKUTNYA</li>
            <li>
                Apabila Penggunaan Surat Rekomendasi ini tidak sebagai mana mestinya
                maka akan dicabut dan ditindak lanjuti dengan proses hukum sesuai dengan
                ketentuan Perundang-undangan
            </li>
        </ol>
        <p>Demikian surat keterangan ini diberikan dan untuk dipergunakan sebagaimana mestinya.</p>
    </div>

    @include('surat.layouts.ttd4')

@endsection