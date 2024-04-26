@extends('layout/layout')

@section('title', 'Acara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/detailAcara.css') }}">
</body>

@section('content')
{{-- insert code here --}}
<div class="info">
    <div class="image">
        <div class="img_kelas">
            <img src="" alt="">
        </div>
               
        <div class="desc_acara">
            <p class="tipe_acara">Judul Kelas / Seminar / Webinar </p>
            <p class="judul_kelas">Judul Kelas</p>
            <p class="sesi_kelas">7/10 sesi</p>
        </div>

        <div class="persen">
                {{-- ini progress barnya --}}
        </div>
    </div>
</div>
@endsection