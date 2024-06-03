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
            @if (Auth::user()->photo != null)
                <img src="{{ asset('assets/fotoUser/' . Auth::user()->photo) }}" alt="">
            @else
                {{-- kasih image sample --}}
                <img src="" alt="">
            @endif
            <div class="buttons">
                <div class="btn">Ubah Cover</div>
                <a href="{{ route('profile.edit') }}">
                    <div class="btn2">Ubah Profil</div>
                </a>                 
            </div>  
        </div>
    </div>

    <div class="history">
        <div class="judul2_history">
            <div class="judul_history">
                <img src="assets/acara/Group 63.png" alt="">
                <h2>Kelas yang terdaftar</h2>
            </div>
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

    <div class="current">
        <div class="judul2_current">
            <div class="judul_current">
                <img src="assets/acara/Group 43.png" alt="">
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

    @if(Auth::user()->role_id == 2)
    <div class="loggedin">
        <div>
            <h2>User yang sedang login</h2>
        </div>
        <div class="tabel">
            <table>
                <thead>
                    <tr>
                        <th>Profile Picture</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loggedInUsers as $loggedInUser)
                        <tr>
                            <td>
                                @if ($loggedInUser->photo != null)
                                    <img src="{{ asset('assets/fotoUser/' . $loggedInUser->photo) }}" class="pp">
                                @else
                                    <img src="{{ asset('assets/default-profile.png') }}" class="pp">
                                @endif
                            </td>
                            <td>{{ $loggedInUser->name }}</td>
                            <td>{{ $loggedInUser->email }}</td>
                            <td class="{{ $loggedInUser->isActive ? 'active' : '' }}">
                                {{ $loggedInUser->isActive ? 'Active' : 'Inactive' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
@endsection
