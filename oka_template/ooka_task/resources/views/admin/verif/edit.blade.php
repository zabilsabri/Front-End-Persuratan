@extends('admin.layouts.app', ['title' => 'Edit Profile'])
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">
@section('content')
    <div class="hal-body pt-4">
        <img src="{{ asset('style/img/avatar/avatar-1.png') }}" class="profile-picture-user mb-4" width="300px" height="305px" alt="...">
        <div class="profil-input">
            <form action="#">
                <div class="row justify-content-center">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="form-floating mb-3 w-50">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Lorem Ipsum Dolor" value="Lorem Ipsum Dolor">
                            <label for="floatingInput" class="profil-input-label">Nama Lengkap</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="00000000000000000000000" value="00000000000000000000000">
                            <label for="floatingInput" class="profil-input-label">No. Kartu Keluarga</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="00000000000000000000000" value="00000000000000000000000">
                            <label for="floatingInput" class="profil-input-label">Nomor Induk Kependudukan</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Loremipsum@gmail.com" value="Loremipsum@gmail.com">
                            <label for="floatingInput" class="profil-input-label">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="000000000000000000" value="000000000000000000">
                            <label for="floatingInput" class="profil-input-label">No. Telepon</label>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success w-25">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection
