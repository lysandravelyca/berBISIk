@extends('layout/layout')

@section('title', $acara->title)

<link rel="stylesheet" href="{{ asset('css/detailAcara.css') }}">
<script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>
@section('content')

<div class="container">
    <div class="info">
        <div class="img_kelas">
            <img src="{{ asset('assets/fotoAcara/kotak.png') }}" alt="">
            <img src="{{ asset('assets/fotoAcara/'.$acara->photo)  }}" alt="">
        </div>

        <div class="detail"> 
            <div class="desc_acara">
                <h1>{{ $acara->title }}</h1>
                <p>{{ $acara->event_details->short_description }}</p>
                <h3>Keuntungan</h3>
                <ul>
                    @foreach(explode("\n", $acara->event_details->benefit) as $benefit)
                        @if (strpos($benefit, '.') !== false)
                            <?php $points = explode('.', $benefit); ?>
                            @foreach($points as $key => $point)
                                @if ($loop->last && $key === count($points) - 1)
                                    <li>{{ $point }}</li>
                                @else
                                    <li><img src="{{ asset('assets/icon/checkfilled.png') }}" alt="Check Icon"> {{ $point }}</li>
                                @endif
                            @endforeach
                        @else
                            <li>{{ $benefit }}</li>
                        @endif
                    @endforeach
                </ul>                                           
            </div>

            <div class="jadwal_acara">
                <div class="infojadwal">
                    <div>
                        <img src="{{ asset('assets/icon/calendar.png') }}" alt=""> 
                        <span>{{ $acara->event_schedules->first()->date->format('j M Y')}}</span>
                    </div>
                    <div>
                        <img src="{{ asset('assets/icon/clocktime.png') }}" alt=""> 
                        <span>{{ substr($acara->event_schedules->first()->time_start, 0, -3) }} - {{ substr($acara->event_schedules->first()->time_end, 0, -3)}} WIB</span>
                    </div>
                    <div>
                        <img src="{{ asset('assets/icon/location.png') }}" alt=""> 
                        <span>{{ $acara->location }}</span>
                    </div>
                    <div>
                        <img src="{{ asset('assets/icon/flag.png') }}" alt=""> 
                        <span>{{ $acara->event_details->seat }} seats only</span>
                    </div>
                </div>

                <div class="daftar">
                    <div>
                        <h3>{{ 'Rp'.number_format($acara->price, 0, ',', '.') }}</h3>
                    </div>
                    <a href="#">Daftar Sekarang</a>
                </div>
            </div>
        </div>   
    </div>

    <div class="instructor">
        <div class="instructor_desc">
            <img src="{{ asset($acara->instructors->photo) }}" alt="">
            <h3>{{ $acara->instructors->name }}</h3>
            <hr>
            <p>{{ $acara->instructors->description }}</p>
        </div>
    </div>

    <div class="ikhitisar">
        <h1>Ikhitisar Kelas</h1>
        {{-- masi manual isi dropdown belom ada dbnya--}}
        <div class="a">
            <div class="minggu">
                <h3>Minggu 1</h3>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="isiminggu">
                <p>Konten minggu ini adalah</p>
            </div>
        </div>
        <div class="a">
            <div class="minggu">
                <h3>Minggu 2</h3>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="isiminggu">
                <p>Konten minggu ini adalah</p>
            </div>
        </div>
    </div>
    

    <div class="bisik">
        <div class="bisi">
            <h1><span>BISI</span>Kan Mereka </h1>
            {{-- reviewewww --}}
        </div>
    </div>
</div>

<script>
    const aa = document.querySelectorAll('.a');

    aa.forEach(aa => {
        const icon = aa.querySelector('.icon');
        const answer = aa.querySelector('.isiminggu');

        aa.addEventListener('click', () => {
            if (icon.classList.contains('active')) {
                icon.classList.remove('active');
                answer.style.maxHeight = null;
            } else {
                icon.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });
    });
</script>

@endsection
