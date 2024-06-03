@extends('layout/layout')

@section('title', 'Profil')

<link rel="stylesheet" href="{{ asset('css/profil.css') }}">
<script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>

@section('content')

    {{-- masukkan kode di sini --}}

    <div class="profcard">
        <div class="header">
            Profil Saya
        </div>
        <div class="card">
            <div class="user">
                @if (Auth::user()->photo != null)
                    <img src="{{ asset('assets/fotoUser/' . Auth::user()->photo) }}" alt="" class="foto">
                @else
                    {{-- kasih image sample --}}
                    <img src="" alt="" class="foto">
                @endif

                <div class="data_profil">
                    <h2>{{ Auth::user()->name }}</h2>

                    <div class="icon_profil">
                        <i class="fa fa-phone"></i>
                        <p>{{ Auth::user()->phone }}</p>
                        <i class="fa fa-envelope"></i>
                        <p>{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
            

            <div class="buttons">
                <div class="btn">Ubah Cover</div>
                <a href="{{ route('profile.edit') }}">
                    <div class="btn2">Ubah Profil</div>
                </a>                 
            </div>  
        </div>
    </div>

    <div class="history">
        <div class="judul_history">
            <img src="assets/acara/Group 43.png" alt="">
            <h2>Kelas yang terdaftar</h2>
        </div>
        
        <div class="container">
            @foreach ($daftarAcaraUser as $acaraUser)
                <a href="acara/{{ $acaraUser->events->id }}">
                    <div class="c2">
                        <div class="tipe">
                            <p>{{ $acaraUser->events->event_types->name }}</p>
                        </div>

                        <div class="kelas_card">
                            <div class="img_container">
                                <div class="img_kelas">
                                    <img src="{{ asset('assets/fotoAcara/' . $acaraUser->events->photo) }}" alt="">
                                </div>

                                @if (Auth::user()->role_id == 2)
                                    <div class="modify_button_container">
                                        <div class="modify_button">
                                            <a href="ubahAcara/{{ $acaraUser->events->id }}"><img src="assets/icon/edit.png" alt=""></a>
                                        </div>

                                        <div class="modify_button">
                                            <a href="hapusAcara/{{ $acaraUser->events->id }}"><img src="assets/icon/trash.png" alt=""></a>
                                        </div>
                                    </div>
                                @endif

                            </div>

                            <div class="cardKelas">
                                <a href="acara/{{ $acaraUser->events->id }}">
                                    <h3 class="judul_acara">{{ $acaraUser->events->title }}</h3>
                                    
                                    <div class="pengajar">
                                        <div class="profil_pengajar">
                                            <img src="{{ asset('assets/fotoPengajar/' . $acaraUser->events->instructors->photo) }}" alt="">
                                        </div>

                                        <div class="deskripsi_pengajar">
                                            <p>{{ $acaraUser->events->instructors->name }}</p>
                                            <p>{{ $acaraUser->events->instructors->job }}</p>
                                        </div>
                                    </div>

                                    {{-- ini mau dibuat progress bar kah? --}}
                                    <div class="progress">
                                        <p>sesi {{ $acaraUser->session_done }}/ {{ $acaraUser->events->event_details->session }}</p>

                                        <div class="progress_bar">
                                            <div class="sesi_bar">

                                            </div>
                                        </div>
                                    </div>

                                    {{-- bukan jadwal terdekat tapi jadwal paling pertama --}}
                                    <div class="icon_tanggal">
                                        <i class="fa-regular fa-calendar" style="color: white"></i>
                                        <h3>
                                            {{ $acaraUser->events->event_schedules->first()->date->format('j M Y') }}
                                            @if (count($acaraUser->events->event_schedules) > 1)
                                                -
                                                {{ $acaraUser->events->event_schedules->last()->date->format('j M Y') }}
                                            @endif
                                        </h3>

                                        <i class="fa-regular fa-clock" style="color: white"></i>
                                        <h3>
                                            {{ substr($acaraUser->events->event_schedules->first()->time_start, 0, -3) }}
                                            WIB
                                        </h3>
                                    </div>

                                    <div class="icon_link">
                                        <div class="icon_wa">
                                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            <p>Link Grup</p>
                                        </div>

                                        <div class="icon_zoom">
                                            <i class="fa fa-video-camera" aria-hidden="true"></i>
                                            <p>Link Zoom</p>
                                        </div>
                                    </div>

                                    <h3>Sudah terdaftar</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="current">
        <div class="judul2_current">
            <div class="judul_current">
                <img src="assets/acara/Group 63.png" alt="">
                <h2>Acara Relawan yang Sedang Berlangsung</h2>
            </div>
        </div>
        <div class="container">
            @foreach($daftarAcaraRelawanUser as $acaraRelawanUser)
                <a href="volunteer/{{ $acaraRelawanUser->volunteer_events->id }}">
                    <div class="c2_relawan">
                        <div class="kelas_card">
                            <div class="img_container">
                                <div class="img_kelas">
                                    <img src="{{ asset('assets/fotoVolunteer/'.$acaraRelawanUser->volunteer_events->photo) }}" alt="">
                                </div>
                                
                                @if(Auth::user()->role_id == 2)
                                    <div class="modify_button_container">
                                        <div class="modify_button">
                                            <a href="ubahVolunteer/{{ $acaraRelawanUser->volunteer_events->id }}"><img src="assets/icon/edit.png" alt=""></a>
                                        </div>
                        
                                        <div class="modify_button">
                                            <a href="hapusVolunteer/{{ $acaraRelawanUser->volunteer_events->id }}"><img src="assets/icon/trash.png" alt=""></a>
                                        </div>
                                    </div>
                                @endif
                                
                            </div>
            
                            <div class="cardKelas">
                                <a href="volunteer/{{ $acaraRelawanUser->volunteer_events->id }}">
                                    <h3>{{ $acaraRelawanUser->volunteer_events->title }}</h3>
                        
                                    <div class="icon_relawan">
                                        <img src="assets/icon/location.png" alt="">
                                        <h3>{{ $acaraRelawanUser->volunteer_events->location}}</h3>
                                    </div>
                        
                                    <div class="icon_relawan">
                                        <img src="assets/icon/calendar.png" alt="">
                                        <h3>{{ $acaraRelawanUser->volunteer_events->volunteer_event_schedules->date->format('j M Y') }}</h3>
                                    </div>
                        
                                    <div class="icon_relawan">
                                        <img src="assets/icon/clocktime.png" alt="">
                                        <h3>{{ substr($acaraRelawanUser->volunteer_events->volunteer_event_schedules->time_start, 0, -3) }} - 
                                            {{ substr($acaraRelawanUser->volunteer_events->volunteer_event_schedules->time_end, 0, -3)}} WIB
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    {{-- acara yg udh dilewatin --}}
    <div class="riwayat">
        <div class="judul2_current">
            <div class="judul_current">
                <img src="assets/acara/Group 43.png" alt="">
                <h2>Riwayat Acara-acara yang sudah dilalui</h2>
            </div>
        </div>

        <div class="container">
            @foreach($daftarRiwayatAcaraRelawan as $acaraRelawanUser)
                <a href="volunteer/{{ $acaraRelawanUser->volunteer_events->id }}">
                    <div class="c2_relawan">
                        <div class="kelas_card">
                            <div class="img_container">
                                <div class="img_kelas">
                                    <img src="{{ asset('assets/fotoVolunteer/'.$acaraRelawanUser->volunteer_events->photo) }}" alt="">
                                </div>
                                
                                @if(Auth::user()->role_id == 2)
                                    <div class="modify_button_container">
                                        <div class="modify_button">
                                            <a href="ubahVolunteer/{{ $acaraRelawanUser->volunteer_events->id }}"><img src="assets/icon/edit.png" alt=""></a>
                                        </div>
                        
                                        <div class="modify_button">
                                            <a href="hapusVolunteer/{{ $acaraRelawanUser->volunteer_events->id }}"><img src="assets/icon/trash.png" alt=""></a>
                                        </div>
                                    </div>
                                @endif
                                
                            </div>
            
                            <div class="cardKelas">
                                <a href="volunteer/{{ $acaraRelawanUser->volunteer_events->id }}">
                                    <h3>{{ $acaraRelawanUser->volunteer_events->title }}</h3>
                        
                                    <div class="icon_relawan">
                                        <img src="assets/icon/location.png" alt="">
                                        <h3>{{ $acaraRelawanUser->volunteer_events->location}}</h3>
                                    </div>
                        
                                    <div class="icon_relawan">
                                        <img src="assets/icon/calendar.png" alt="">
                                        <h3>{{ $acaraRelawanUser->volunteer_events->volunteer_event_schedules->date->format('j M Y') }}</h3>
                                    </div>
                        
                                    <div class="icon_relawan">
                                        <img src="assets/icon/clocktime.png" alt="">
                                        <h3>{{ substr($acaraRelawanUser->volunteer_events->volunteer_event_schedules->time_start, 0, -3) }} - 
                                            {{ substr($acaraRelawanUser->volunteer_events->volunteer_event_schedules->time_end, 0, -3)}} WIB
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

            @foreach ($daftarRiwayatAcara as $acaraUser)
            <a href="acara/{{ $acaraUser->events->id }}">
                <div class="c2">
                    <div class="tipe">
                        <p>{{ $acaraUser->events->event_types->name }}</p>
                    </div>

                    <div class="kelas_card">
                        <div class="img_container">
                            <div class="img_kelas">
                                <img src="{{ asset('assets/fotoAcara/' . $acaraUser->events->photo) }}" alt="">
                            </div>

                            @if (Auth::user()->role_id == 2)
                                <div class="modify_button_container">
                                    <div class="modify_button">
                                        <a href="ubahAcara/{{ $acaraUser->events->id }}"><img src="assets/icon/edit.png" alt=""></a>
                                    </div>

                                    <div class="modify_button">
                                        <a href="hapusAcara/{{ $acaraUser->events->id }}"><img src="assets/icon/trash.png" alt=""></a>
                                    </div>
                                </div>
                            @endif

                        </div>

                        <div class="cardKelas">
                            <!-- tambahin a href disini karena emang gambar sama card itu beda container -->
                            <a href="acara/{{ $acaraUser->events->id }}">
                                <h3 class="judul_acara">{{ $acaraUser->events->title }}</h3>
                                <div class="pengajar">
                                    <div class="profil_pengajar">
                                        <img src="{{ asset('assets/fotoPengajar/' . $acaraUser->events->instructors->photo) }}" alt="">
                                    </div>

                                    <div class="deskripsi_pengajar">
                                        <p>{{ $acaraUser->events->instructors->name }}</p>
                                        <p>{{ $acaraUser->events->instructors->job }}</p>
                                    </div>
                                </div>

                                <div class="icon">
                                    <img src="assets/icon/calendar.png" alt="">
                                    <h3>
                                        {{ $acaraUser->events->event_schedules->first()->date->format('j M Y') }}
                                        @if (count($acaraUser->events->event_schedules) > 1)
                                            -
                                            {{ $acaraUser->events->event_schedules->last()->date->format('j M Y') }}
                                        @endif
                                    </h3>
                                </div>

                                <div class="icon">
                                    <img src="assets/icon/clocktime.png" alt="">
                                    <h3>{{ substr($acaraUser->events->event_schedules->first()->time_start, 0, -3) }}
                                        -
                                        {{ substr($acaraUser->events->event_schedules->first()->time_end, 0, -3) }}
                                        WIB
                                    </h3>
                                </div>

                                <div class="rating">
                                    <img src="assets/icon/Star 1.png" alt="">
                                    <img src="assets/icon/Star 1.png" alt="">
                                    <img src="assets/icon/Star 1.png" alt="">
                                    <img src="assets/icon/Star 1.png" alt="">
                                    <img src="assets/icon/Star 1.png" alt="" class="abu">
                                    <h3>4.0</h3>
                                </div>

                                <h3>Sudah terdaftar</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    @if(Auth::user()->role_id == 2)
    <div class="loggedin">
        <div class="judulaktif">
            <h2>Pengguna yang Sedang Aktif</h2>
        </div>
        <div class="containerlist">
            <div class="list">
                @foreach($loggedInUsers->slice(0, ceil($loggedInUsers->count() / 2)) as $loggedInUser)
                    <div class="listnya">
                        <img src="{{ $loggedInUser->photo ? asset('assets/fotoUser/' . $loggedInUser->photo) : asset('assets/default-profile.png') }}" class="pp">
                        <div class="namaemailinfo">
                            <span class="username">{{ $loggedInUser->name }}</span>
                            <span class="useremail">{{ $loggedInUser->email }}</span>
                        </div>
                        <div class="status">
                            <span class="indicator {{ $loggedInUser->isActive ? 'active' : 'inactive' }}"></span>
                            <div class="label">{{ $loggedInUser->isActive ? 'Aktif' : 'Tidak Aktif' }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="list">
                @foreach($loggedInUsers->slice(ceil($loggedInUsers->count() / 2)) as $loggedInUser)
                    <div class="listnya">
                        <img src="{{ $loggedInUser->photo ? asset('assets/fotoUser/' . $loggedInUser->photo) : asset('assets/default-profile.png') }}" class="pp">
                        <div class="namaemailinfo">
                            <span class="username">{{ $loggedInUser->name }}</span>
                            <span class="useremail">{{ $loggedInUser->email }}</span>
                        </div>
                        <div class="status">
                            <span class="indicator {{ $loggedInUser->isActive ? 'active' : 'inactive' }}"></span>
                            <div class="label">{{ $loggedInUser->isActive ? 'Aktif' : 'Tidak Aktif' }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
@endsection
