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

        {{-- @foreach($daftarAcara as $acara) --}}
        <div class="progres_kelas">
            <div class="img_progress">
                <img src="" alt="">
            </div>
            
           
            <div class="desc_kelas">
                <p class="tipe_kelas">Tipe: {{--{{$acara->event_types->name}} --}}</p>
                <p class="judul_kelas">Judul Kelas{{--{{$acara->title}}--}}</p>
                <p class="sesi_kelas">7/10 sesi</p>
            </div>

            {{-- progress barnya --}}
            <div class="persen">
                <span class="value-percentage">0%</span>
            </div>
        </div>
        {{-- @endforeach --}}

    </div>
</div>

<div class="kelas">
    <div class="judul2">
        <div class="judul">
            <img src="assets/acara/Group 43.png" alt="">
            <h2>Kelas yang Tersedia</h2>
        </div>
    
        <a href="tambahAcara">Tambah Acara Relawan Baru</a>
        
    </div>
    
    {{-- container tuh isinya card cardnya --}}
    <div class="container">
        @foreach ($daftarAcara as $acara)

        <a href="acara/{{ $acara->id }}">

        {{-- c2 isinya satu card --}}
        <div class="c2">
            <div class="tipe">
                <p>{{ $acara->event_types->name }}</p>
            </div>
    
            <div class="kelas_card">
                <img src="{{ asset('assets/fotoAcara/'.$acara->photo)  }}" alt="" class="img_kelas">
                <div class="card">
                    <h3>{{ $acara->title }}</h3>
                    <div class="pengajar">
                        <div class="profil_pengajar">
                            <img src="{{$acara->instructors->photo}}" alt="">
                        </div>
            
                        <div class="deskripsi_pengajar">
                            <p>{{ $acara->instructors->name }}</p>
                            <p>{{ $acara->instructors->job }}</p>
                        </div>
                    </div>
                    
                    <div class="icon">
                        <img src="assets/icon/calendar.png" alt="">
                        <h3>
                            {{ $acara->event_schedules->first()->date->format('j M Y')}}
                            @if ( count($acara->event_schedules) > 1)
                                - {{ $acara->event_schedules->last()->date->format('j M Y') }}
                            @endif
                        </h3>
                    </div>
        
                    <div class="icon">
                        <img src="assets/icon/clock time.png" alt="">
                        <h3>{{ substr($acara->event_schedules->first()->time_start, 0, -3) }} - 
                            {{ substr($acara->event_schedules->first()->time_end, 0, -3)}} WIB</h3>
                    </div>
        
                    {{-- ini keknya ada cara yang lebih singkat cmn gw gatau caranya --}}
                    <div class="rating">
                        <img src="assets/icon/Star 1.png" alt="">
                        <img src="assets/icon/Star 1.png" alt="">
                        <img src="assets/icon/Star 1.png" alt="">
                        <img src="assets/icon/Star 1.png" alt="">
                        <img src="assets/icon/Star 1.png" alt="" class="abu">
                        <h3>4.0</h3>
                    </div>
        
                    <h3>Rp{{ number_format($acara->price, 0,',', '.')  }}</h3>
                </div>
            </div>
        </div>

        </a>
        @endforeach
    </div>

    {{-- <div class="container"> 
        <div class="c2">
            <div class="tipe">
                <p>Tipe: Kelas/Seminar/Webinar</p>
            </div>
    
            <div class="kelas_card">
                <img src="" alt="" class="img_kelas">
                <div class="card">
                    <h3>Judul Kelas/Seminar/Webinar</h3>
                    <h3>Lorem ipsum dolor sit amet</h3>
        
                    <div class="pengajar">
                        <div class="profil_pengajar">
                            <img src="" alt="">
                        </div>
            
                        <div class="deskripsi_pengajar">
                            <p>Nama Pengajar/Speaker/Trainer</p>
                            <p>Pekerjaan Pengajar/Speaker</p>
                        </div>
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
                        <img src="assets/icon/Star 1.png" alt="">
                        <img src="assets/icon/Star 1.png" alt="">
                        <img src="assets/icon/Star 1.png" alt="">
                        <img src="assets/icon/Star 1.png" alt="">
                        <img src="assets/icon/Star 1.png" alt="" class="abu">
                        <h3>4.0</h3>
                    </div>
        
                    <h3>FREE/Total Pembayaran</h3>
                </div>
                
            </div>
        </div>
    </div> --}}
</div>

<div class="relawan">
    <div class="judul2_relawan">
        <div class="judul_relawan">
            <img src="assets/acara/Group 63.png" alt="">
            <h2>Bantu Menjadi Relawan</h2>    
        </div>

        {{-- belummss --}}
        <a href="">Tambah Acara Baru</a>
    </div>
    

    <div class="container">
        {{-- @foreach($daftarRelawan as $relawan) --}}

        {{-- <a href="acara/{{ $relawan->id }}"> --}}

        <div class="c2_relawan">
            <div class="tipe">
                {{-- apakah ini harus dijadikan satu tabel sendiri? --}}
                <p>Tipe: Panitia/Penerjemah</p>
            </div>
    
            <div class="kelas_card">
                {{-- <img src="{{ asset('assets/fotoAcara/'.$acara->photo)  }}" alt="" class="img_kelas"> --}}
                <div class="card">
                    {{-- <h3>{{ $relawan->Title }}</h3> --}}
                    <h3>Judul Acara Relawan</h3>
                    <h3>Lorem ipsum dolor sit amet</h3>
        
                    <div class="icon_relawan">
                        <img src="assets/icon/Group 50.png" alt="">
                        {{-- <h3>{{ $relawan->Location }}</h3> --}}
                        <h3>Jl.Melati 10 Alam Sutera, Tangerang</h3>
                    </div>
        
                    <div class="icon_relawan">
                        <img src="assets/icon/calendar.png" alt="">
                        <h3>5 Maret 2024</h3>
                    </div>
        
                    <div class="icon_relawan">
                        <img src="assets/icon/clock time.png" alt="">
                        <h3>16.00 - 18.00 WIB</h3>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- </a>

        @endforeach --}}
    </div>
</div>

{{-- js --}}
<script src="{{asset('js/acara.js') }}"></script>

@endsection