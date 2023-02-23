<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ public_path('style/css/tempSurat.css') }}">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="kopSurat text-center">
        <img width='90px' height="100px" src="{{ public_path('image/Lambang_Kabupaten_Takalar.png') }}" alt="logo-kalabbirang">
        <h6 class="fw-bold mb-0" >PEMERINTAH KABUPATEN TAKALAR</h6>
        <h6 class="fw-bold mb-0" >KECAMATAN PATTALLASSANG</h6>
        <h2 class="fw-bold mb-0"> KELURAHAN KALABBIRANG </h2>
        <p>Jalan Chaeruddin Dg Ngampa No.12 Telp./Fax (0418) 22469 Takalar</p>
        <hr style="height:4px;border-width:0;color:black;background-color:black">
    </div>

    @yield('content')

</body>
</html>