<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamus BISINDO</title>
</head>

@extends('layout/layout')

<body>
    @section('content')
    <div>
        <button>HURUF</button>
        <button>KATA DAN KALIMAT</button>
    </div>

    <h2>PENCARIAN KATA ATAU KALIMAT</h2>

    <div class="search-container">
        <div class="search-box">
            <input type="text"
                placeholder="Masukkan Kata atau Kalimat"
                id="input-word"/>
            <button id="search-btn">Cari</button>
        </div>

        <div class="result" id="result">
            <p>Bahasa Isyarat dari "input user"</p>

            {{-- ini kayaknya pake ini --}}
            {{-- @@foreach ($collection as $item)
                
            @endforeach --}}
        </div>
    </div>

    <div>
        <h2>KATA DASAR BAHASA ISYARAT</h2>
        <div class = "kata-dasar">
            
        </div>
    </div>

    @endsection
</body>
</html>