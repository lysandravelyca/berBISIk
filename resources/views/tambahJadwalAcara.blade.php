@extends('layout/layout')

@section('title', 'Tambah Detail Acara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/tambahJadwalAcara.css') }}"> 
</body>

@section('content')
    

    <form method="POST" action="jadwalAcara" >
        @csrf

        {{-- <label for="">ID Acara</label>
        <input name="event_id" type="number" value="{{ request()->query('id') }}" readonly>

        <label for="">Jumlah Sesi</label>
        <input name="session" type="number" value="{{ request()->query('jumlahSesi') }}" readonly> --}}

        @for ($i = 0; $i < request()->query('jumlahSesi') ;$i++)

        <div class="case">
            <label for="">Sesi {{ $i+1 }}</label>
            <div class="input">
                <label for="">Nama Sesi</label>
                <input name="name{{ $i }}" type="text" id="name{{ $i }}">
            </div>

            <div class="input">
                <label for="">Deskripsi</label>
                <input name="description{{ $i }}" type="text" id="description{{ $i }}">
            </div>

            <div class="input">
                <label for="">Tanggal</label>
                <input name="date{{ $i }}" type="date" id="date{{ $i }}">
            </div>

            <div class="input">
                <label for="">Waktu Mulai</label>
                <input name="time_start{{ $i }}" type="time" id="time_start{{ $i }}">
            </div>

            <div class="input">
                <label for="">Waktu Selesai</label>
                <input name="time_end{{ $i }}" type="time" id="time_end{{ $i }}">
            </div>
        </div>
        @endfor

        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>

    
    
@endsection