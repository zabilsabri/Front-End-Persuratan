@extends('admin.layouts.app', ['title' => 'Tambah Berita'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/custom-style/dropzone.css') }}">

@section('content')
    <div class="hal-head">
        <h1 class="hal-title"> Tambah Berita </h1>
    </div>
    <div class="hal-body">
        <div class="row">
            <div class="col-sm-8">

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Judul Berita</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" placeholder="" value="">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Tanggal Berita</h4>
                    <div class="col-sm-4">
                        <input type="date" class="form-control " id="floatingInput" placeholder="" value="">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Tempat Kejadian</h4>
                    <div class="col-sm-4">
                        <input type="text" class="form-control " id="floatingInput" placeholder="" value="">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Penulis</h4>
                    <div class="col-sm-4">
                        <input type="text" class="form-control " id="floatingInput" placeholder="" value="">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Deskripsi</h4>
                    <div class="col-sm-9 ">
                        <textarea class="form-control" style="height: 150px"></textarea>
                    </div>
                </div>


            </div>
        </div>

        <h4 class="surat-kategori col-form-label col-sm-3">Gambar</h4>
        <div class="row form-group">

            <div class="col-md-4">
                <img id="output_image" width="400" height="210" class="ms-2 img-thumbnail " />
            </div>

            <div class="col-md-4">
                <div class="file-drop-area-berita">
                    <span class="choose-file-button">Pilih File</span>
                    <input class="file-input" type="file" accept="iamge/*" onchange="preview(event)">
                </div>
            </div>

        </div>

        <div class="btn-input-berita">
            <button type="submit" class="btn btn-success btn-lg d-block fs-5 fw-bold mx-auto mt-5" style="padding: 10px 100px;">
                SELESAI
            </button>
        </div>

    </div>

    <script type='text/javascript'>
        function preview(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
