@extends('user.layouts.app', ['title' => 'data-ubah'])
@section('content')
<link rel="stylesheet" href="{{ asset('style/css/data-simpan-ubah.css') }}">
<div class="data-simpan">
    <h2 class="head-data-simpan text-center" >Data Pribadi</h2>
    <form action="#">
    <div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label for="nomorTelpon" class="form-label">Nomor Kartu Keluarga</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" style="border-right-style: solid;border-right-width: 0px;">
                    <img src="{{ asset('image/icon/form-staff.svg') }}"></img>                        
                </span>
                <input type="number" class="form-control" value="00000000000000000000" placeholder="00000000000000000000" aria-label="Username" aria-describedby="addon-wrapping" style="border-left-width: 0px;">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="mb-3">
            <label for="nomorTelpon" class="form-label">Nomor Induk Kependudukan</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" style="border-right-style: solid;border-right-width: 0px;">
                    <img src="{{ asset('image/icon/Id-card.svg') }}"></img>
                </span>
                <input type="number" class="form-control" value="00000000000000000000" placeholder="00000000000000000000" aria-label="Username" aria-describedby="addon-wrapping" style="border-left-width: 0px;">
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="mb-3">
            <label for="nomorTelpon" class="form-label">Nama Lengkap Sesuai KTP</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" style="border-right-style: solid;border-right-width: 0px;">
                    <img src="{{ asset('image/icon/person.svg') }}"></img>
                </span>
                <input type="text" class="form-control" value="Lorem Ipsum Dolor" placeholder="Lorem Ipsum Dolor" aria-label="Username" aria-describedby="addon-wrapping" style="border-left-width: 0px;">
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="mb-3">
            <label for="nomorTelpon" class="form-label">Nomor Telepon</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" style="border-right-style: solid;border-right-width: 0px;">
                    <img src="{{ asset('image/icon/phone.svg') }}"></img>
                </span>
                <input type="number" class="form-control" value="00000000000000000000" placeholder="00000000000000000000" aria-label="Username" aria-describedby="addon-wrapping" style="border-left-width: 0px;">
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="mb-3">
            <label for="nomorTelpon" class="form-label">Alamat Email</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" style="border-right-style: solid;border-right-width: 0px;">
                    <img src="{{ asset('image/icon/email.svg') }}"></img>
                </span>
                <input type="email" class="form-control" value="loremipsum@gmail.com" placeholder="loremipsum@gmail.com" aria-label="Username" aria-describedby="addon-wrapping" style="border-left-width: 0px;">
            </div>
        </div>
    </div>

    <div class="col-sm-6">
    </div>

    </div>

    <div class="form-footer">
        <button type="submit" class="btn btn-success">SIMPAN</button>
    </div>

  </form>

</div>

@endsection