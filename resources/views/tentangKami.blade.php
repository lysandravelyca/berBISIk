
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


    <div class="visi">

        <div class="paragrap">

            <p>Menciptakan dunia di mana bahasa isyarat diakui, dihargai, dan 
                diintegrasikan secara luas dalam masyarakat. Kami percaya bahwa 
                aksesibilitas terhadap pembelajaran bahasa isyarat adalah hak bagi setiap 
                individu, tanpa memandang latar belakang atau kondisi. Dengan memperluas 
                pemahaman dan penggunaan bahasa isyarat, kami berharap dapat membangun 
                jembatan komunikasi yang kuat antara komunitas tunarungu dan pendengar, 
                serta meningkatkan inklusi sosial dan kesetaraan peluang bagi semua.</p>
        </div>

        <div class="visiKami">

            <span>VISI KAMI</span>
            <!-- <span>KAMI</span> -->
            
        </div>
    </div>

    <div class="misi">

        <div class="misiKami">

            <span>MISI KAMI</span>
            <!-- <span>KAMI</span> -->
            
        </div>

        <div class="paragrapMisi">

            <p>Menyediakan platform pembelajaran yang inovatif dan terjangkau untuk 
                memungkinkan individu dari berbagai latar belakang belajar dan menguasai 
                bahasa isyarat dengan mudah. Kami berkomitmen untuk menyediakan konten-konten 
                berkualitas tinggi yang interaktif dan mudah dipahami, serta memfasilitasi pertukaran 
                pengetahuan dan pengalaman antar pengguna. </p>
        </div>
    </div>

    <div class="case">
        <div class="timKami">
            <div class="juduls">
                <h1>TIM KAMI</h1>
            </div>

            <div class="bulet">
            </div>
        </div>
    </div>

    <div class="track">

        <div class="semua">
            <div class="peserta">
                <img src="assets/peserta.png">
                <h1>378</h1>
                <p>Peserta Program Kami</p>
            </div>

            <div class="provinsi">
                <img src="assets/provinsi.png">
                <h1>25</h1>
                <p>Provinsi di Indonesia</p>
            </div>
            <div class="paket">
                <img src="assets/paket.png">
                <h1>32</h1>
                <p>Paket Belajar</p>
            </div>
        </div>
        
    </div>
    
</div>

@endsection

