@extends('layout/layout')

@section('title', 'Hapus Acara')

<body>
    <!-- css -->
    {{-- <link rel="stylesheet" href="{{ asset('css/kamusPage.css') }}"> --}}
</body>

@section('content')

    <h3>Apakah Anda yakin ingin menghapus acara {{ $acara->title }}?</h3>
    <form style="display: inline-block"action="/hapusAcara/{{ $acara->id }}" method="post">
        @csrf
        @method('delete')
            <button type="submit">Hapus</button>
        </form>
        
        <a href="/acara" class="button" >Batal</a>

@endsection