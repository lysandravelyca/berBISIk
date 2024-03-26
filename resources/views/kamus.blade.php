<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamus BISINDO</title>
</head>

@extends('layout/layout')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/kamusPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">


    @section('content')
    <div>
        <button class ="btnfull">HURUF</button>
        <button class="btnksg">KATA DAN KALIMAT</button>
    </div>
    
    <h2 class="judul">PENCARIAN KATA ATAU KALIMAT</h2>

    <div class="searchcontainer">
        <div class="search-box">
            <input class="search" type="text"
                placeholder="Masukkan Kata atau Kalimat"
                id="input-word"/>
            <button id="search-btn" class="btnsearch">Cari</button>
        </div>

        <div class="result" id="result">
            <p class="res">Bahasa Isyarat dari "input user"</p>

            {{-- ini kayaknya pake ini --}}
            {{-- @@foreach ($collection as $item)
                
            @endforeach --}}
        </div>
    </div>

    <div>
        <h2 class="katadsr">KATA DASAR BAHASA ISYARAT</h2>
        <div class = "kata-dasar">
            <div class="container1">
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
                <div class="kotak"></div>
            </div>
            
        </div>
    </div>

    @endsection
</body>
</html>