@extends('admin.layouts.app', ['title' => 'Surat Arsip'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/suratMasuk.css') }} ">
    <div class="hal-head">
        <div class="d-flex align-items-center">
            <div class="flex-grow-1 ms-3">
                <h1 class="mx-3 mt-3 mb-0"> Surat Arsip </h1>
            </div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="row" style="justify-content: center;">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card">
                        <div class="card-body" style="margin-top: 0px; color:white; background-color:#4FB96E; border-radius: 7px;">
                            <h5 class="card-title">Surat Masuk</h5>
                            <p class="card-text">30</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                        <div class="card-body" style="margin-top: 0px; color: #4FB96E; background-color:#FFFFFF; border-radius: 7px; border: 2px solid #4FB96E;">
                            <h5 class="card-title">Surat Keluar</h5>
                            <p class="card-text">50</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card">

                    <div class="p-3 d-flex justify-content-between">

                        <div class="dataTables_length " id="table-1_length">
                            <div class="d-flex mt-4">
                                <span class=" mx-2 mt-2">Tampilkan </span>
                                <select name="table-1_length" aria-controls="table-1"
                                    class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <span class="mx-2 mt-2"> entri</span>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div id="table-1_filter" class="dataTables_filter">
                                <label>Cari:
                                    <input type="search" class="form-control form-control-sm" placeholder=""
                                        aria-controls="table-1">
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <a href="{{route ('surat-arsip-admin.detail') }}" style="text-decoration:none;">
                                <div class="card ">
                                    <div class="card-header">
                                        <h4 class="text-dark">Kemendikbud RI</h4>
                                        <div class="card-header-action" style="color: #828282;">
                                            17/12/2022
                                        </div>
                                    </div>
                                    <div class="card-sub-header d-flex justify-content-between">
                                        <h4 class="text-success">Judul surat/Jenis surat</h4>
                                        <div class="card-header-action fs-2">
                                            <i class="ion-ios-star-outline" style="color: #828282;"></i>
                                            <i class="ion-ios-star" style="color: #828282;"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <p class="pdf">
                                            <a href="aduh" class="text-dark">
                                                <svg width="23" height="24" viewBox="0 0 23 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.7548 0H2.64366C1.29922 0 0.199219 1.16667 0.199219 2.59259V20.7407C0.199219 22.1667 1.29922 23.3333 2.64366 23.3333H19.7548C21.0992 23.3333 22.1992 22.1667 22.1992 20.7407V2.59259C22.1992 1.16667 21.0992 0 19.7548 0ZM8.14366 11.0185C8.14366 12.0556 7.28811 12.963 6.31033 12.963C5.63532 12.963 5.08811 13.5102 5.08811 14.1852V14.6389C5.08811 15.1451 4.6777 15.5556 4.17144 15.5556C3.66518 15.5556 3.25477 15.1451 3.25477 14.6389V10.8333C3.25477 9.1458 4.62279 7.77778 6.31033 7.77778C7.28811 7.77778 8.14366 8.68518 8.14366 9.72222V11.0185ZM14.2548 13.6111C14.2548 14.6481 13.3992 15.5556 12.4214 15.5556C10.7339 15.5556 9.36589 14.1875 9.36589 12.5V10.8333C9.36589 9.1458 10.7339 7.77778 12.4214 7.77778C13.3992 7.77778 14.2548 8.68518 14.2548 9.72222V13.6111ZM19.1437 8.80555C19.1437 9.31182 18.7333 9.72222 18.227 9.72222H17.9585C17.6005 9.72222 17.3103 10.0124 17.3103 10.3704C17.3103 10.7283 17.6005 11.0185 17.9585 11.0185H18.227C18.7333 11.0185 19.1437 11.4289 19.1437 11.9352V12.0463C19.1437 12.5526 18.7333 12.963 18.227 12.963C17.7207 12.963 17.3103 13.3734 17.3103 13.8796V14.6389C17.3103 15.1451 16.8999 15.5556 16.3937 15.5556C15.8874 15.5556 15.477 15.1451 15.477 14.6389V9.61111C15.477 8.59859 16.2978 7.77778 17.3103 7.77778H18.1714C18.7084 7.77778 19.1437 8.21306 19.1437 8.75V8.80555ZM11.1992 10.3333C11.1992 9.99583 11.4728 9.72222 11.8103 9.72222C12.1478 9.72222 12.4214 9.99583 12.4214 10.3333V13C12.4214 13.3375 12.1478 13.6111 11.8103 13.6111C11.4728 13.6111 11.1992 13.3375 11.1992 13V10.3333ZM5.08811 10.3333C5.08811 9.99583 5.36171 9.72222 5.69922 9.72222C6.03673 9.72222 6.31033 9.99583 6.31033 10.3333V10.4074C6.31033 10.7449 6.03673 11.0185 5.69922 11.0185C5.36171 11.0185 5.08811 10.7449 5.08811 10.4074V10.3333Z"
                                                        fill="#FF0000" />
                                                </svg>
                                                berkas.pdf
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <a href="{{route ('surat-arsip-admin.detail') }}" style="text-decoration:none;">
                                <div class="card ">
                                    <div class="card-header">
                                        <h4 class="text-dark">Kemendikbud RI</h4>
                                        <div class="card-header-action" style="color: #828282;">
                                            17/12/2022
                                        </div>
                                    </div>
                                    <div class="card-sub-header d-flex justify-content-between">
                                        <h4 class="text-success">Judul surat/Jenis surat</h4>
                                        <div class="card-header-action fs-2">
                                            <i class="ion-ios-star-outline" style="color: #828282;"></i>
                                            <i class="ion-ios-star" style="color: #828282;"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <p class="pdf">
                                            <a href="aduh" class="text-dark">
                                                <svg width="23" height="24" viewBox="0 0 23 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.7548 0H2.64366C1.29922 0 0.199219 1.16667 0.199219 2.59259V20.7407C0.199219 22.1667 1.29922 23.3333 2.64366 23.3333H19.7548C21.0992 23.3333 22.1992 22.1667 22.1992 20.7407V2.59259C22.1992 1.16667 21.0992 0 19.7548 0ZM8.14366 11.0185C8.14366 12.0556 7.28811 12.963 6.31033 12.963C5.63532 12.963 5.08811 13.5102 5.08811 14.1852V14.6389C5.08811 15.1451 4.6777 15.5556 4.17144 15.5556C3.66518 15.5556 3.25477 15.1451 3.25477 14.6389V10.8333C3.25477 9.1458 4.62279 7.77778 6.31033 7.77778C7.28811 7.77778 8.14366 8.68518 8.14366 9.72222V11.0185ZM14.2548 13.6111C14.2548 14.6481 13.3992 15.5556 12.4214 15.5556C10.7339 15.5556 9.36589 14.1875 9.36589 12.5V10.8333C9.36589 9.1458 10.7339 7.77778 12.4214 7.77778C13.3992 7.77778 14.2548 8.68518 14.2548 9.72222V13.6111ZM19.1437 8.80555C19.1437 9.31182 18.7333 9.72222 18.227 9.72222H17.9585C17.6005 9.72222 17.3103 10.0124 17.3103 10.3704C17.3103 10.7283 17.6005 11.0185 17.9585 11.0185H18.227C18.7333 11.0185 19.1437 11.4289 19.1437 11.9352V12.0463C19.1437 12.5526 18.7333 12.963 18.227 12.963C17.7207 12.963 17.3103 13.3734 17.3103 13.8796V14.6389C17.3103 15.1451 16.8999 15.5556 16.3937 15.5556C15.8874 15.5556 15.477 15.1451 15.477 14.6389V9.61111C15.477 8.59859 16.2978 7.77778 17.3103 7.77778H18.1714C18.7084 7.77778 19.1437 8.21306 19.1437 8.75V8.80555ZM11.1992 10.3333C11.1992 9.99583 11.4728 9.72222 11.8103 9.72222C12.1478 9.72222 12.4214 9.99583 12.4214 10.3333V13C12.4214 13.3375 12.1478 13.6111 11.8103 13.6111C11.4728 13.6111 11.1992 13.3375 11.1992 13V10.3333ZM5.08811 10.3333C5.08811 9.99583 5.36171 9.72222 5.69922 9.72222C6.03673 9.72222 6.31033 9.99583 6.31033 10.3333V10.4074C6.31033 10.7449 6.03673 11.0185 5.69922 11.0185C5.36171 11.0185 5.08811 10.7449 5.08811 10.4074V10.3333Z"
                                                        fill="#FF0000" />
                                                </svg>
                                                berkas.pdf
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <a href="{{route ('surat-arsip-admin.detail') }}" style="text-decoration:none;">
                                <div class="card ">
                                    <div class="card-header">
                                        <h4 class="text-dark">Kemendikbud RI</h4>
                                        <div class="card-header-action" style="color: #828282;">
                                            17/12/2022
                                        </div>
                                    </div>
                                    <div class="card-sub-header d-flex justify-content-between">
                                        <h4 class="text-success">Judul surat/Jenis surat</h4>
                                        <div class="card-header-action fs-2">
                                            <i class="ion-ios-star-outline" style="color: #828282;"></i>
                                            <i class="ion-ios-star" style="color: #828282;"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <p class="pdf">
                                            <a href="aduh" class="text-dark">
                                                <svg width="23" height="24" viewBox="0 0 23 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.7548 0H2.64366C1.29922 0 0.199219 1.16667 0.199219 2.59259V20.7407C0.199219 22.1667 1.29922 23.3333 2.64366 23.3333H19.7548C21.0992 23.3333 22.1992 22.1667 22.1992 20.7407V2.59259C22.1992 1.16667 21.0992 0 19.7548 0ZM8.14366 11.0185C8.14366 12.0556 7.28811 12.963 6.31033 12.963C5.63532 12.963 5.08811 13.5102 5.08811 14.1852V14.6389C5.08811 15.1451 4.6777 15.5556 4.17144 15.5556C3.66518 15.5556 3.25477 15.1451 3.25477 14.6389V10.8333C3.25477 9.1458 4.62279 7.77778 6.31033 7.77778C7.28811 7.77778 8.14366 8.68518 8.14366 9.72222V11.0185ZM14.2548 13.6111C14.2548 14.6481 13.3992 15.5556 12.4214 15.5556C10.7339 15.5556 9.36589 14.1875 9.36589 12.5V10.8333C9.36589 9.1458 10.7339 7.77778 12.4214 7.77778C13.3992 7.77778 14.2548 8.68518 14.2548 9.72222V13.6111ZM19.1437 8.80555C19.1437 9.31182 18.7333 9.72222 18.227 9.72222H17.9585C17.6005 9.72222 17.3103 10.0124 17.3103 10.3704C17.3103 10.7283 17.6005 11.0185 17.9585 11.0185H18.227C18.7333 11.0185 19.1437 11.4289 19.1437 11.9352V12.0463C19.1437 12.5526 18.7333 12.963 18.227 12.963C17.7207 12.963 17.3103 13.3734 17.3103 13.8796V14.6389C17.3103 15.1451 16.8999 15.5556 16.3937 15.5556C15.8874 15.5556 15.477 15.1451 15.477 14.6389V9.61111C15.477 8.59859 16.2978 7.77778 17.3103 7.77778H18.1714C18.7084 7.77778 19.1437 8.21306 19.1437 8.75V8.80555ZM11.1992 10.3333C11.1992 9.99583 11.4728 9.72222 11.8103 9.72222C12.1478 9.72222 12.4214 9.99583 12.4214 10.3333V13C12.4214 13.3375 12.1478 13.6111 11.8103 13.6111C11.4728 13.6111 11.1992 13.3375 11.1992 13V10.3333ZM5.08811 10.3333C5.08811 9.99583 5.36171 9.72222 5.69922 9.72222C6.03673 9.72222 6.31033 9.99583 6.31033 10.3333V10.4074C6.31033 10.7449 6.03673 11.0185 5.69922 11.0185C5.36171 11.0185 5.08811 10.7449 5.08811 10.4074V10.3333Z"
                                                        fill="#FF0000" />
                                                </svg>
                                                berkas.pdf
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <a href="{{route ('surat-arsip-admin.detail') }}" style="text-decoration:none;">
                                <div class="card ">
                                    <div class="card-header">
                                        <h4 class="text-dark">Kemendikbud RI</h4>
                                        <div class="card-header-action" style="color: #828282;">
                                            17/12/2022
                                        </div>
                                    </div>
                                    <div class="card-sub-header d-flex justify-content-between">
                                        <h4 class="text-success">Judul surat/Jenis surat</h4>
                                        <div class="card-header-action fs-2">
                                            <i class="ion-ios-star-outline" style="color: #828282;"></i>
                                            <i class="ion-ios-star" style="color: #828282;"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <p class="pdf">
                                            <a href="aduh" class="text-dark">
                                                <svg width="23" height="24" viewBox="0 0 23 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.7548 0H2.64366C1.29922 0 0.199219 1.16667 0.199219 2.59259V20.7407C0.199219 22.1667 1.29922 23.3333 2.64366 23.3333H19.7548C21.0992 23.3333 22.1992 22.1667 22.1992 20.7407V2.59259C22.1992 1.16667 21.0992 0 19.7548 0ZM8.14366 11.0185C8.14366 12.0556 7.28811 12.963 6.31033 12.963C5.63532 12.963 5.08811 13.5102 5.08811 14.1852V14.6389C5.08811 15.1451 4.6777 15.5556 4.17144 15.5556C3.66518 15.5556 3.25477 15.1451 3.25477 14.6389V10.8333C3.25477 9.1458 4.62279 7.77778 6.31033 7.77778C7.28811 7.77778 8.14366 8.68518 8.14366 9.72222V11.0185ZM14.2548 13.6111C14.2548 14.6481 13.3992 15.5556 12.4214 15.5556C10.7339 15.5556 9.36589 14.1875 9.36589 12.5V10.8333C9.36589 9.1458 10.7339 7.77778 12.4214 7.77778C13.3992 7.77778 14.2548 8.68518 14.2548 9.72222V13.6111ZM19.1437 8.80555C19.1437 9.31182 18.7333 9.72222 18.227 9.72222H17.9585C17.6005 9.72222 17.3103 10.0124 17.3103 10.3704C17.3103 10.7283 17.6005 11.0185 17.9585 11.0185H18.227C18.7333 11.0185 19.1437 11.4289 19.1437 11.9352V12.0463C19.1437 12.5526 18.7333 12.963 18.227 12.963C17.7207 12.963 17.3103 13.3734 17.3103 13.8796V14.6389C17.3103 15.1451 16.8999 15.5556 16.3937 15.5556C15.8874 15.5556 15.477 15.1451 15.477 14.6389V9.61111C15.477 8.59859 16.2978 7.77778 17.3103 7.77778H18.1714C18.7084 7.77778 19.1437 8.21306 19.1437 8.75V8.80555ZM11.1992 10.3333C11.1992 9.99583 11.4728 9.72222 11.8103 9.72222C12.1478 9.72222 12.4214 9.99583 12.4214 10.3333V13C12.4214 13.3375 12.1478 13.6111 11.8103 13.6111C11.4728 13.6111 11.1992 13.3375 11.1992 13V10.3333ZM5.08811 10.3333C5.08811 9.99583 5.36171 9.72222 5.69922 9.72222C6.03673 9.72222 6.31033 9.99583 6.31033 10.3333V10.4074C6.31033 10.7449 6.03673 11.0185 5.69922 11.0185C5.36171 11.0185 5.08811 10.7449 5.08811 10.4074V10.3333Z"
                                                        fill="#FF0000" />
                                                </svg>
                                                berkas.pdf
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection
