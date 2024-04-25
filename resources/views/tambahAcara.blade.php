@extends('layout/layout')

@section('title', 'TambahAcara')

<body>
    <!-- css -->
    {{-- <link rel="stylesheet" href="{{  }}"> --}}
</body>

@section('content')
    <form method="POST" action="acara">
        @csrf

        <div>
            <label for="">Tipe Acara</label>
            <select name="event_type_id" id="event_type_id" required>
                @foreach ($daftarTipeAcara as $tipeAcara)
                    <option value="{{ $tipeAcara->id }}">{{ $tipeAcara->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="">Judul Acara</label>
            <input name="title" type="text" id="title">
        </div>

        <div>
            <label for="">Deskripsi Singkat</label>
            <input name="short_description" type="text" id="short_description">
        </div>

        <div>
            <label for="">Keuntungan</label>
            <input name="benefit" type="text" id="benefit">
        </div>

        <div>
            <label for="">Jumlah Sesi</label>
            <select name="session" id="session" required>
                @for ($i = 1; $i <= 12; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <div>
            <label for="">Jumlah Peserta</label>
            <input name="seat" type="number" id="seat">
        </div>

        <div>
            <label for="">Nama Pengajar</label>
            <select name="instructor_id" id="instructor_id" required>
                @foreach ($daftarPengajar as $pengajar)
                    <option value="{{ $pengajar->id }}">{{ $pengajar->name }}</option>
                @endforeach
            </select>
            <p>Tidak ada nama pengajar yang sesuai?</p>
            <a href="/tambahPengajar">Tambahkan di sini</a>
        </div>

        <div>
            <label for="">Biaya</label>
            <input name="price" type="text" id="price">
        </div>

        <div>
            <label for="">Lokasi</label>
            <input name="location" type="text" id="location">
        </div>

        <div>
            <label for="">Masukkan Foto</label>
            <input name="photo" type="file" id="photo">
        </div>

        <div>
            <label for="">Link Grup WhatsApp</label>
            <input name="whatsapp_link" type="text" id="whatsapp_link">
        </div>

        <div>
            <label for="">Link Zoom</label>
            <input name="zoom_link" type="text" id="zoom_link">
        </div>

        <div>
            <button type="submit">Selanjutnya</button>
        </div>

    </form>

@endsection
