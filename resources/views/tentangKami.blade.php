
@extends('layout/layout')

@section('title', 'Tentang Kami')

<link rel="stylesheet" href="{{ asset('css/tentangKami.css') }}">

@section('content')
{{-- insert code here --}}

<div>
    <div class="tinggi">
        <!-- biar agak tinggian  -->
        <img src="{{ asset('assets/logoAja.png') }}" alt="photo logo">
    </div>

    <div class="header">
        <span>Ber<span>BISI</span>k</span>
        <p>BerbahasaIsyaratIndonesiaAsik</p>
    </div>

    <div class="cerita">

        <div class="judul">
        <span>CERITA BER<span>BISI</span>K</span>
        </div>

        <div class="para">
        <p>Kami adalah tim yang berkomitmen untuk menyediakan aksesibilitas dan inklusi bagi 
            semua orang dalam mempelajari bahasa isyarat. Dengan keyakinan bahwa setiap individu 
            memiliki hak untuk berkomunikasi dengan bebas dan mandiri, kami berupaya untuk memberikan 
            platform pembelajaran yang mudah diakses dan berorientasi pada pengguna. Dengan 
            pengalaman yang mendalam dalam pendidikan dan teknologi, kami menggabungkan inovasi 
            dengan pengetahuan mendalam tentang bahasa isyarat untuk menciptakan pengalaman 
            pembelajaran yang menarik dan efektif.</p>
        </div>
    </div>
    
</div>

@endsection

