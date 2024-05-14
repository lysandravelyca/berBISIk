@extends('layout/layout')

@section('title', 'TambahVolunteerAcara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/tambahAcara.css')  }}">
</body>

@section('content')
    <form method="POST" action="volunteer" enctype="multipart/form-data">
        @csrf

        <h1>Tambah Acara Relawan</h1>

        <div class="card">

            <div class="input">
                <label for="">Judul Volunteer Acara</label>
                <input name="title" type="text" id="title" value={{ old('title') }}>
            </div>

            <div class="input">
                <label for="">Deskripsi Singkat</label>
                <input name="short_description" type="text" id="short_description">
            </div>

            <div class="input">
                <label for="">Keuntungan</label>
                <input name="benefit" type="text" id="benefit">
            </div>

            <div class="input">
                <label for="">Kriteria</label>
                <input name="criteria" type="text" id="criteria">
            </div>

            <div class="input">
                <label for="">Jumlah Peserta</label>
                <input name="seat" type="number" id="seat">
            </div>

            <div class="input">
                <label for="">Lokasi</label>
                <input name="location" type="text" id="location">
            </div>

            <div class="input">
                <label for="">Masukkan Foto</label>
                <input name="photo" type="file" id="photo">
            </div>

            <div class="input">
                <label for="">Link Grup WhatsApp</label>
                <input name="whatsapp_link" type="text" id="whatsapp_link">
            </div>

            <div class="input">
                <label for="">Link Zoom</label>
                <input name="zoom_link" type="text" id="zoom_link">
            </div>
            
        </div>
        

        <h1>Tambah Jadwal Acara Relawan</h1>
        
        <div class="card">
            <div class="input">
                <label for="">Nama Jadwal</label>
                <input name="name" type="text" id="name">
            </div>

            <div class="input">
                <label for="">Tanggal</label>
                <input name="date" type="date" id="date">
            </div>
            <div class="input">
                <label for="">Waktu Mulai</label>
                <input name="time_start" type="time" id="time_start">
            </div>
            <div class="input">
                <label for="">Waktu Selesai</label>
                <input name="time_end" type="time" id="time_end">
            </div>
        </div>

        <button type="submit">Simpan</button>
        

    </form>

@endsection
