<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
                    <a href="{{asset('')}}" class="nav-link">Beranda</a>
                </li>

                <li class="nav-item">
                    <a href="{{asset('kamus')}}" class="nav-link">Kamus</a>
                </li>

                <li class="nav-item">
                    <a href="{{asset('acara')}}" class="nav-link">Acara</a>
                </li>

                <li class="nav-item">
                    <a href="{{asset('tentangKami')}}" class="nav-link">Tentang Kami</a>
                </li>

                <li class="nav-item">
                    <a href="/Code/Contact Us/Contact Us.html" class="nav-link">Profile</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- header end -->

    <main>
        @yield('content')
    </main>

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
</html>