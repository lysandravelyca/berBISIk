@extends('layout/layout')

@section('title', 'Acara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/acara.css') }}">
</body>

@section('content')
{{-- insert code here --}}

<div class="search">
    <div class="text-search">
        <h2>Yuk, intip acara menarik</h2>
        <h1>Ber<span>BISI</span>k!</h1>
    </div>

    <div class="searchcontainer">
        <div class="search-box">
            <input class="search-box2" type="text"
                placeholder="Cari program"
                id="input-word"/>
            <button id="search-btn" class="btnsearch">Cari</button>
        </div>
    </div>
</div>

<div class="progress">
    <div class="">
        <h2>Progres Kelas yang Sedang Kamu Ambil</h2>

        <div class="progres_kelas">
            <div class="img_kelas">
                <img src="" alt="">
            </div>
            
           
            <div class="desc_kelas">
                <p class="tipe_kelas">Tipe: Kelas</p>
                <p class="judul_kelas">Judul Kelas</p>
                <p class="sesi_kelas">7/10 sesi</p>
            </div>

            <div class="persen">
                {{-- ini progress barnya --}}
            </div>
        </div>
    </div>
</div>

<div class="kelas">
    <div class="judul">
        <img src="" alt="">
        <h2>Kelas yang Tersedia</h2>
    </div>

    <div>
        <a href=""></a>
    </div>

    @foreach ($daftarAcara as $acara)
        <a href="acara/{{ $acara->id }}">
        <div class="container">
            <div class="tipe">
                <p>{{ $acara->event_types->name }}</p>
            </div>

            <div class="kelas_card">
                <img src="" alt="">
                <h3>{{ $acara->title }}</h3>
                {{-- <h3>Lorem ipsum dolor sit amet</h3> --}}

                <div class="profil_pengajar">
                    <img src="" alt="">
                </div>

                <div class="deskripsi_pengajar">
                    <p>{{ $acara->instructors->name }}</p>
                    <p>{{ $acara->instructors->job }}</p>
                </div>

                <div class="tanggal">
                    <img src="" alt="">
                    <h3>
                        {{ $acara->event_schedules->first()->date->format('j M Y')}}
                        @if ( count($acara->event_schedules) > 1)
                            - {{ $acara->event_schedules->last()->date->format('j M Y') }}
                        @endif
                    </h3>

                    
                </div>

                <div class="jam">
                    <img src="" alt="">
                    <h3>{{ substr($acara->event_schedules->first()->time_start, 0, -3) }} - 
                        {{ substr($acara->event_schedules->first()->time_end, 0, -3)}} WIB</h3>
                </div>

                <div class="rating">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                    <h3>4.0</h3>
                </div>

                <p>Rp{{ number_format($acara->price, 0,',', '.')  }}</p>
            </div>
        </div>
        </a>
    @endforeach
        
        {{-- <div class="tipe">
            <p>Tipe: Kelas/Seminar/Webinar</p>
        </div> --}}

        {{-- <div class="kelas_card">
            <img src="" alt="">
            <h3>Judul Kelas/Seminar/Webinar</h3>
            <h3>Lorem ipsum dolor sit amet</h3>

            <div class="profil_pengajar">
                <img src="" alt="">
            </div>

            <div class="deskripsi_pengajar">
                <p>Nama Pengajar/Speaker/Trainer</p>
                <p>Pekerjaan Pengajar/Speaker</p>
            </div>

            <div class="tanggal">
                <img src="" alt="">
                <h3>5 Maret 2024 - 7 May 2024</h3>
            </div>

            <div class="jam">
                <img src="" alt="">
                <h3>16.00 - 18.00 WIB</h3>
            </div>

            <div class="rating">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <h3>4.0</h3>
            </div>

            <p>FREE/Total Pembayaran</p>
        </div> --}}
    {{-- </div> --}}
</div>

<div class="relawan">
    <div class="judul">
        <img src="" alt="">
        <h2>Bantu Menjadi Relawan</h2>
    </div>

    <div class="container">
        <div class="tipe">
            <p>Tipe: Panitia/Penerjemah</p>
        </div>

        <div class="kelas_card">
            <img src="" alt="">
            <h3>Judul Acara</h3>
            <h3>Lorem ipsum dolor sit amet</h3>

            <div class="lokasi">
                <img src="" alt="">
                <p>Jl.Melati 10 Alam Sutera, Tangerang</p>
            </div>

            <div class="tanggal">
                <img src="" alt="">
                <h3>5 Maret 2024</h3>
            </div>

            <div class="jam">
                <img src="" alt="">
                <h3>16.00 - 18.00 WIB</h3>
            </div>
        </div>
    </div>
</div>


@endsection