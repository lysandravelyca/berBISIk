@extends('layout/layout')

@section('title', 'Tambah Detail Acara')

<body>
    <!-- css -->
    {{-- <link rel="stylesheet" href="{{  }}"> --}}
</body>

@section('content')
    <label for="">ID Acara</label>
    <input name="event_id" type="number" value="{{ request()->query('id') }}" readonly>

    <label for="">Jumlah Sesi</label>
    <input name="session" type="number" value="{{ request()->query('jumlahSesi') }}" readonly>

    <form method="POST" action="jadwalAcara" >
        @csrf
        @for ($i = 0; $i < request()->query('jumlahSesi') ;$i++)

        <div>
            <label for="">Nama Acara</label>
            <input name="name{{ $i }}" type="text" id="name">
        </div>

        <div>
            <label for="">Tanggal {{ $i+1 }}</label>
            <input name="date{{ $i }}" type="date" id="date{{ $i }}">
        </div>
        <div>
            <label for="">Waktu Mulai</label>
            <input name="time_start{{ $i }}" type="time" id="time_start{{ $i }}">
        </div>
        <div>
            <label for="">Waktu Selesai</label>
            <input name="time_end{{ $i }}" type="time" id="time_end{{ $i }}">
        </div>
        @endfor
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>

    
    
@endsection