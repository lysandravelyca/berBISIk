@extends('layout/layout')

<link rel="shortcut icon" type="image/png" href="{{ asset('assets/logoAja.png') }}">

@section('title', 'Acara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/acara.css') }}">
    {{-- js --}}
<script src="{{asset('js/acara.js') }}" defer></script>
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
    
        <a href="tambahAcara">Tambah Acara Baru</a>
        
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
                <div class="img_container">
                    {{-- <img src="{{ asset('assets/fotoAcara/'.$acara->photo)  }}" alt="">
                    <div class="modify_button">
                        <a href="ubahAcara/{{ $acara->id }}"><img src="assets/icon/edit.png" alt=""></a>
                    </div> --}}

                    {{-- ada yang salah keknya gabisa a href di dalam a href jadinya href buat nge
                        redirect ke detail acara error :) --}}
                        <!-- vallen tambahin a href kebawah di bagian card biar bisa di pencet juga bawahnya" -->
                        
                    <div class="img_kelas">
                        <img src="{{ asset('assets/fotoAcara/'.$acara->photo)  }}" alt="">
                    </div>
                    
                    <div class="modify_button_container">
                        <div class="modify_button">
                            <a href="ubahAcara/{{ $acara->id }}"><img src="assets/icon/edit.png" alt=""></a>
                        </div>
        
                        <div class="modify_button">
                            <a href="hapusAcara/{{ $acara->id }}"><img src="assets/icon/trash.png" alt=""></a>
                        </div>
                    </div>
                    
                </div>
                

                <div class="card">
                <!-- tambahin a href disini karena emang gambar sama card itu beda container -->
                <a href="acara/{{ $acara->id }}">
                    <h3 class="judul_acara">{{ $acara->title }}</h3>
                    <div class="pengajar">
                        <div class="profil_pengajar">
                            <img src="{{ asset('assets/fotoPengajar/'.$acara->instructors->photo)  }}" alt="">
                        </div>
            
                        <div class="deskripsi_pengajar">
                            <p>{{ $acara->instructors->name }}</p>
                            <p>{{ $acara->instructors->job }}</p>
                        </div>
                    </div>
                    
                    <div class="icon">
                        <img src="assets/icon/calendar.png" alt="" >
                        <h3>
                            {{ $acara->event_schedules->first()->date->format('j M Y')}}
                            @if ( count($acara->event_schedules) > 1)
                                - {{ $acara->event_schedules->last()->date->format('j M Y') }}
                            @endif
                        </h3>
                    </div>
        
                    <div class="icon">
                        <img src="assets/icon/clocktime.png" alt="">
                        <h3>{{ substr($acara->event_schedules->first()->time_start, 0, -3) }} - 
                            {{ substr($acara->event_schedules->first()->time_end, 0, -3)}} WIB</h3>
                    </div>
        
                    {{-- ini keknya ada cara yang lebih singkat cmn gw gatau caranya --}}
                    {{-- https://youtu.be/q1xhbc-oKnc --}}
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

        <a href="Volunteer/tambahVolunteer">Tambah Acara Relawan Baru</a>
    </div>
    

    <div class="container">
        @foreach($daftarVolunteer as $relawan)

        {{-- masih salah ke detail acaranya --}}
        <a href="acara/{{ $relawan->id }}">

        <div class="c2_relawan">
            <div class="tipe">
                @if (rand(1,100) % 2 == 0)
                    <p>Panitia</p>
                @else
                    <p>Penerjemah</p>
                @endif
            </div>
    
            <div class="kelas_card">
                <div class="img_container">
                        
                    <div class="img_kelas">
                        <img src="{{ asset('assets/fotoAcara/'.$relawan->photo)  }}" alt="">
                    </div>
                    
                    <div class="modify_button_container">
                        <div class="modify_button">
                            <a href="ubahVolunteer/{{ $relawan->id }}"><img src="assets/icon/edit.png" alt=""></a>
                        </div>
        
                        <div class="modify_button">
                            <a href="hapusVolunteer/{{ $relawan->id }}"><img src="assets/icon/trash.png" alt=""></a>
                        </div>
                    </div>
                    
                </div>

                <div class="card">
                    <a href="acara/{{ $relawan->id }}">
                    <h3>{{ $relawan->title }}</h3>
        
                    <div class="icon_relawan">
                        <img src="assets/icon/location.png" alt="">
                        <h3>{{ $relawan->location}}</h3>
                    </div>
        
                    <div class="icon_relawan">
                        <img src="assets/icon/calendar.png" alt="">
                        <h3>{{ $relawan->volunteer_event_schedules->first()->date->format('j M Y') }}</h3>
                    </div>
        
                    <div class="icon_relawan">
                        <img src="assets/icon/clocktime.png" alt="">
                        <h3>{{ substr($relawan->volunteer_event_schedules->first()->time_start, 0, -3) }} - 
                            {{ substr($relawan->volunteer_event_schedules->first()->time_end, 0, -3)}} WIB</h3>
                    </div>
                </div>
            </div>
        </div>
        
        </a>

        @endforeach
    </div>
</div>



@endsection