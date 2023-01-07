@extends('user.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/arsipSurat.css') }}">
    <div class="container-md  py-4">

        <div class="header">
            <h1 class="text-dark text-center">
                <b>
                    Pengarsipan Surat
                </b>
            </h1>
        </div>

        <div class="row mt-5 justify-content-evenly px-5">
            <div class="col-md-5">

                <div class="card surat-box border border-success py-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="d-flex justify-content-start ">
                        <i class="ion ion-ios-folder-outline text-success px-3 pt-3" style="font-size: 50px;"></i>
                        <div class="px-2">
                            <p class="pt-2 ">Nomor Surat</p>
                            <h5 class="text-success ">Lorem ipsum dolor sit amet.</h5>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-5" >
                <div class="card surat-box border border-success py-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="d-flex justify-content-start ">
                        <i class="ion ion-ios-folder-outline text-success px-3 pt-3" style="font-size: 50px;"></i>
                        <div class="px-2">
                            <p class="pt-2 ">Nomor Surat</p>
                            <h5 class="text-success ">Lorem ipsum dolor sit amet.</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-5 justify-content-evenly px-5" >
            <div class="col-md-5">
                <div class="card surat-box border border-success py-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="d-flex justify-content-start ">
                        <i class="ion ion-ios-folder-outline text-success px-3 pt-3" style="font-size: 50px;"></i>
                        <div class="px-2">
                            <p class="pt-2 ">Nomor Surat</p>
                            <h5 class="text-success ">Lorem ipsum dolor sit amet.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card surat-box border border-success py-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="d-flex justify-content-start ">
                        <i class="ion ion-ios-folder-outline text-success px-3 pt-3" style="font-size: 50px;"></i>
                        <div class="px-2">
                            <p class="pt-2 ">Nomor Surat</p>
                            <h5 class="text-success ">Lorem ipsum dolor sit amet.</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    {{-- Modal After Klik --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-block">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data Arsip Surat</h1>
                    <h6 class="modal-title text-success">No : Nomor Surat</h6>
                </div>
                <div class="modal-body">
                    <table>
                        <tr>
                            <td class=" fw-bold">Tanggal Pengajuan</td>
                            <td>
                                &emsp; &emsp; : &nbsp;
                            </td>
                            <td class="text-success fw-bold">
                                2 Januari 2023
                            </td>
                        </tr>

                        <tr>
                            <td class=" fw-bold">Tanggal Selesai</td>
                            <td>
                                &emsp; &emsp; : &nbsp;
                            </td>
                            <td class="text-success fw-bold">
                                2 Januari 2023
                            </td>
                        </tr>

                        <tr>
                            <td class=" fw-bold">
                                Jenis Surat

                            </td>
                            <td>
                                &emsp; &emsp; : &nbsp;
                            </td>
                            <td class="text-success fw-bold">
                                Surat Pengantar
                            </td>
                        </tr>

                        <tr>
                            <td class=" fw-bold">Penandatanganan</td>
                            <td>
                                &emsp; &emsp; : &nbsp;
                            </td>
                            <td class="text-success fw-bold">
                                Ahmad Santoso
                            </td>
                        </tr>

                        <tr class=" fw-bold">
                            <td>Lampiran</td>
                        </tr>

                    </table>
                    <div class="text-center py-2">

                        <img src="{{ asset('image/berita1.png') }}" class="img-fluid" alt="...">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection