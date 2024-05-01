
@extends('layout/layout')

@section('title', 'Tentang Kami')

<link rel="stylesheet" href="{{ asset('css/tentangKami.css') }}">
<script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>
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
        </div>
    </div>

    <div class="misi">

        <div class="misiKami">
            <span>MISI KAMI</span>
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

    <div class="member">
       
            <div class="img1">
                <div class="bulet-img1"></div>
                <div class="kotak-img1"></div>
                <img src="{{ asset('assets/el.png') }}" alt="">
            </div>
                
        
            
          
            <div class="img2">
                <div class="kotak-img2"></div>
                <img src="{{ asset('assets/jeje.png') }}" alt="">
            </div>
            <div class="img3">
                <div class="bulet-img3"></div>
                <div class="kotak-img3"></div>
                <img src="{{ asset('assets/jessy.png') }}" alt="">
            </div>
            <div class="img4">
                <div class="bulet-img4"></div>
                <div class="kotak-img4"></div>
                <img src="{{ asset('assets/ly.png') }}" alt="">
            </div>
            <div class="img5">
                <div class="bulet-img5"></div>
                <div class="kotak-img5"></div>
                <img src="{{ asset('assets/val.png') }}" alt="">
            </div>
    </div>

    <div class="nama">
        <div class="el">
            <h1>DIREKTUR UTAMA</h1>
            <P>Anastashia Ellena Widjaja</P>
        </div>

        <div class="jeje">
            <h1>KEPALA KURIKULUM</h1>
            <P>Jesselyn Widjaja</P>
        </div>

        <div class="jessy">
            <h1>KEPALA PEMASARAN</h1>
            <P>Jessy Clarissa Wijaya</P>
        </div>

        <div class="ly">
            <h1>PENGEMBANG WEB/h1>
            <P>Lysandra Velyca</P>
        </div>

        <div class="val">
            <h1>PERANCANG GRAFIS</h1>
            <p>Vallen Charissa Gunawan</p>
        </div>


    </div>


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
        
        <div class="bisik">

        <div class="bisi">
          <h1><span>BISI</span>KAN MEREKA </h1>
        </div>

        </div>

        <div class="faq">

        <h2>PALING SERING DITANYAKAN</h2>

        <div class="a">
            <div class="question">
                <h4>Apa itu berBISIk?</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer">
                <p>BerBISIk adalah platform yang menjadi wadah pembelajaran bahasa isyarat bagi 
                    semua orang. Selain belajar, berBISIk juga memiliki banyak kegiatan lain seperti 
                    seminar dan kegiatan relawan</p>
            </div>
        </div>

        <div class="a">
            <div class="question">
                <h4>Apa itu bahasa isyarat?</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer">
                <p>Bahasa isyarat adalah bentuk komunikasi non-verbal menggunakan gerakan tangan, 
                    posisi tubuh, dan ekspresi wajah untuk menyampaikan makna, digunakan oleh orang 
                    dengan gangguan pendengaran atau dalam situasi di mana komunikasi verbal tidak mungkin
                         atau tidak nyaman.</p>
            </div>
        </div>

        <div class="a">
            <div class="question">
                <h4>Apakah saya perlu memiliki pengalaman sebelumnya dalam bahasa isyarat untuk menggunakan platform ini?</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer">
                <p>Tidak, Anda tidak perlu memiliki pengalaman sebelumnya dalam bahasa isyarat untuk menggunakan 
                    platform ini. Platform ini dirancang untuk semua orang, termasuk pemula dalam bahasa isyarat.
                     Ada berbagai sumber daya dan materi pembelajaran yang tersedia di platform ini untuk membantu 
                     Anda belajar dan mengembangkan kemampuan bahasa isyarat Anda dari awal. </p>
            </div>
        </div>

        <div class="a">
            <div class="question">
                <h4>Bagaimana saya bisa berpartisipasi dalam kegiatan volunteer atau kontribusi konten untuk platform ini?</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione modi incidunt doloremque eius recusandae quibusdam nihil beatae laudantium nesciunt praesentium?</p>
            </div>
        </div>

        <div class="a">
            <div class="question">
                <h4>Apakah saya bisa memperoleh sertifikat setelah menyelesaikan kursus atau modul tertentu?</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer">
                <p>Ya, biasanya platform pembelajaran online menawarkan sertifikat kepada peserta yang berhasil 
                    menyelesaikan kursus atau modul tertentu. Anda dapat memperoleh sertifikat sebagai bukti 
                    bahwa Anda telah menyelesaikan pelatihan atau pembelajaran dalam bidang tertentu, termasuk
                    bahasa isyarat.</p>
            </div>
        </div>

        <div class="a">
            <div class="question">
                <h4>Apakah saya bisa menggunakan platform ini secara gratis?</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer">
                <p>Ya, Anda dapat menggunakan platform ini secara gratis tanpa biaya langganan atau pembayaran.
                    Platform ini dirancang untuk memberikan akses mudah dan bebas untuk semua pengguna yang ingin 
                    belajar atau berpartisipasi dalam komunitas bahasa isyarat. Namun, beberapa fitur mungkin 
                    memiliki versi premium atau opsi berlangganan tambahan yang dapat Anda pilih untuk mendapatkan 
                    akses lebih lanjut atau manfaat ekstra.</p>
            </div>
        </div>
    
        </div>

    
</div>


<script>

    const aa = document.querySelectorAll('.a');

    aa.forEach(aa => {
        const icon = aa.querySelector('.icon');
        const answer = aa.querySelector('.answer');

        aa.addEventListener('click', () => {
            
            if(icon.classList.contains('active')) {
                icon.classList.remove('active');
                answer.style.maxHeight = null;
            } else {
                icon.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
            
        })
    })
</script>




@endsection

