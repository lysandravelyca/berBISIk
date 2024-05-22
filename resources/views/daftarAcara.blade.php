@extends('layout/layout')

@section('title', 'Daftar Acara')

@section('content')
    <div>
        {{-- Jadi kayak halaman konfirmasi, tambahin metode pembayaran --}}
        <form method="POST" action= "/daftarAcara/{{ $id }}">
            @csrf

            {{-- ada pilihan metode pembayaran --}}

            <button type="submit">Konfirmasi</button>
        </form>


    </div>


@endsection
