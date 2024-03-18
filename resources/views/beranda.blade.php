<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BerBISIk</title>
</head>
<body>
    <!-- css  -->
    <link rel="stylesheet" href="{{ asset('css/homePage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <!-- css end  -->
   
    <!-- js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <!-- js end  -->
    <title>BerBISIk</title>
</head>
<body>
    <!-- header start -->
    <header>
        <nav class="navbar">
            
            
            <div class="logo">
                <img src="{{ asset('assets/logo.png') }}" alt="">
            </div>

            <ul class="nav-menu">

                <li class="nav-item">
                    <a href="/Code/Home/Home.html" class="nav-link">Beranda</a>
                </li>

                <li class="nav-item">
                    <a href="/Code/Product/product.html" class="nav-link">Kamus</a>
                </li>

                <li class="nav-item">
                    <a href="/Code/Promotion/promotion.html" class="nav-link">Acara</a>
                </li>

                <li class="nav-item">
                    <a href="/Code/About Us/About Us.html" class="nav-link">Tentang Kami</a>
                </li>

                <li class="nav-item">
                    <a href="/Code/Contact Us/Contact Us.html" class="nav-link">Profile</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- header end -->

     <!-- Main Start -->

    <div class="Home">
        <div class="mainSlide">
            <div>
                <h1>Ingin Belajar Bahasa Isyarat? </h1>
                <div class="paragrap">
                    <p>Dengan<span> Ber</span><span>BISI</span><span>k </span>kalian bisabelajar mandiri dengan 
                        kamus BISI dan berbagai fitur pencarian kata hingga alfabet  </p>
                </div>
                <div class="hashtag">
                    <p>#BerbahasaIsyaratIndonesiaAsik</p>
                    <button class="btn">Kamus BISI</button>
                </div>
            </div>
           
            <div>
                <div class="home">
                    
                    <img src="{{ asset('assets/homePic.png') }}" alt="photo orang">
                </div>
            </div>
        </div>
    </div>
          <!-- Main end -->

          <!-- bisindo start  -->

        <div class="bisindo">
            <div class="mainBisindo">
                <div>
                    <div class="BisiPic">
                        <img src="{{ asset('assets/orgBisi.png') }}" alt="photo orang">
                    </div>
                </div>

                <div class="judulBisi">
                    <h1>BISI<span>NDO</span></h1>
                    <div class="txtBisi">
                        <p>merupakan <span>bahasa ibu</span> yang tumbuh secara alami pada kalangan komunitas Tuli di Indonesia.  </p>
                    </div>
                    <div class="txtBisi2">
                        <p>Tidak ada batasan dalam berkomunikasi! Di Indonesia, 
                            lebih dari <span>2.500.000</span> individu menghadapi tantangan dalam mendengar. 
                            BISINDO, Bahasa Isyarat Indonesia, bukan hanya alat komunikasi yang efektif 
                            bagi komunitas tuli, tetapi juga merangkul semua orang.</p>
                    </div>
                </div>

            </div>
        </div>

          <!-- bisindo end  -->

          <!-- manfaat bisindo start  -->
    
    <div class="Manfaat">
        <div class="tes">
            <div class="gar1"></div>  
            <div class="judul">
                <h1>Manfaat ber<span>BISI</span>DO</h1>
            </div>
            <div class="gar2"></div>
        </div>
            
        <br> 
        <div class="process-wrapper">
            <div id="progress-bar-container">
                <ul>
                    <li class="step step01 active"><div class="step-inner">SOLIDARITAS</div></li>
                    <li class="step step02"><div class="step-inner">INKLUSI</div></li>
                    <li class="step step03"><div class="step-inner">BUDAYA</div></li>
                    <li class="step step04"><div class="step-inner">KARIR</div></li>
                </ul>
                
                <div id="line">
                    <div id="line-progress"></div>
                </div>
            </div>

            <div id="progress-content-section">
                <div class="section-content discovery active">
                    <p>Belajar bahasa isyarat merupakan solidaritas terhadap komunitas pendengar 
                        yang membantu memperkuat hubungan di antara individu dengan keberagaman 
                        yang ada di lingkup masyarakat</p>
                </div>
                
                <div class="section-content strategy">
                    <p>BISINDO memungkinkan partisipasi penuh individu dengan gangguan pendengaran 
                        dalam masyarakat. Belajar BISINDO mempermudah komunikasi antara mereka dan 
                        orang-orang yang menggunakan bahasa isyarat sebagai bahasa pertama.</p>
                </div>
                
                <div class="section-content creative">
                    <p>Bahasa Isyarat tidak hanya tentang komunikasi, tetapi juga tentang budaya 
                        dan identitas. Belajar BISINDO membuka pintu untuk memahami budaya dan kehidupan 
                        sehari-hari dari perspektif yang berbeda.</p>
                </div>
                
                <div class="section-content production">
                    <p>Memiliki keterampilan dalam BISINDO dapat menjadi keunggulan 
                        besar dalam banyak profesi, terutama yang berhubungan dengan 
                        pelayanan sosial, pendidikan khusus, atau pekerjaan kesehatan.</p>
                </div>
                
            </div>
        </div>

    </div>
    
          
          <!-- manfaat bisindo end  -->

          <!-- acara start  -->

          <div class="heading">
            <h1>Acara Bersama Ber<span>BISI</span>k</h1>
        </div>
        <section class="product">
        
            
            <div class="boxContainer">
                <div class="box">
                    <img src="{{ asset('assets/1.png') }}" alt="">
                    <h2>Workshop</h2>
                    <p>Sesi perkenalan Bisindo dimulai dari pengenalan budaya
                         Tuli serta pengajaran Bisindo dasar
                    </p>
                    <br><br>
                    <a href="#">Lebih Detail ></a>
                </div>

                <div class="box">
                    <img src="{{ asset('assets/2.png') }}" alt="">
                    <h2>Kolaborasi</h2>
                    <p>Bergabung dalam program kolaborasi untuk membangun 
                        program inklusif bagi komunitas tuli dengan <span>Ber</span><span>BISI</span><span>k</span>
                    </p>
                    <br>
                    <a href="#">Lebih Detail ></a>
                </div>

                <div class="box">
                    <img src="{{ asset('assets/3.png') }}" alt="">
                    <h2>Webinar</h2>
                    <p>Bertemu secara daring dengan narasumber untuk 
                        mengetahui lebih lanjut tentang bahasa isyarat
                    </p>
                    <br><br>
                    <a href="#">Lebih Detail ></a>
                </div>

                <div class="box">
                    <img src="{{ asset('assets/4.png') }}" alt="">
                    <h2>Kelas Daring</h2>
                    <p>Sesi pembelajaran Bisindo secara daring bersama team <span>Ber</span><span>BISI</span><span>k</span></p>
                    <br><br><br>
                    <a href="#">Lebih Detail ></a>
                </div>
            </div>
    </section>

          <!-- acara end  -->

          <!-- kolab startt  -->

        <div class="collab">
            <div class="txtCollab">
                <div class="judulCollab">
                    <h1>Kolaborasi</h1>
                    <p><span>Ber</span><span>BISI</span><span>k</span> 
                    telah menjalani kolaborasi dengan berbagai perusahaan ternama</p>
                </div>
                <div class="imgCollab">
                    <img src="{{ asset('assets/garuda.png') }}" alt="">
                </div>
                <div class="imgCollab2">
                    <img src="{{ asset('assets/fund.png') }}" alt="">
                </div>
                <div class="imgCollab3">
                    <img src="{{ asset('assets/binus.png') }}" alt="">
                </div>
                <div class="imgCollab4">
                    <img src="{{ asset('assets/traveloka.webp') }}" alt="">
                </div>
            </div>   
        </div>

          <!-- kolab end  -->

 
          <!-- tentang kami start  -->

          <div class="tentang">
            <div class="kami">
                <h1>Mari Belajar Dengan Ber<span>BISI</span>k</h1>
                
            </div>
            <div class="btnKamii">
                <button class="btnKami">Tentang Kami</button>
            </div>
            
            <div class="tangan">
            <img src="{{ asset('assets/hand.png') }}" alt="photo tangan isyarat">
            </div>
          </div>

          <!-- tentang kami end  -->

          <!-- footer start  -->
    <footer>
        <div class="text">
            <h1>#BerbahasaIsyaratIndonesiaAsik</h1>
            <p>
                Kami berupaya memberikan aksesibilitas dan inklusi dalam mempelajari bahasa isyarat melalui 
                platform pembelajaran yang mudah diakses dan berorientasi pasa pengguna dengan inovasi dan 
                pengetahuan mendalam tentang bahasa insyarat
            </p>
        </div>

        <hr>

        <div class="contact">
            <pre>+62 89732706488  |  berbisik@gmail.com</pre>
        </div>

        <div class="social">
            <a href=""><img src="{{ asset('assets/instagram.png') }}" alt="logo insta"></a>
            <a href=""><img src="{{ asset('assets/twit.png') }}" alt="logo twitter"></a>
            <a href=""><img src="{{ asset('assets/fb.png') }}" alt="logo facebook"></a>
        </div>

        <div class="copyRight">
            <img src="{{ asset('assets/cr.png') }}" alt="credit"><p>2024 Ber<span>BISI</span>k</p>
        </div>
    </footer>
        
    <!-- footer end  -->   
    
</body>
     <script>
    
    $(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "3%");
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "33%");
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "66%");
	$(".creative").addClass("active").siblings().removeClass("active");
});

$(".step04").click( function() {
	$("#line-progress").css("width", "100%");
	$(".production").addClass("active").siblings().removeClass("active");
});
    </script>
</html>
