@extends('layout/layout')

@section('title', 'Kamus')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/kamusHuruf.css') }}">
</body>

    @section('content')
    <div>
        <form action="{{ route('kamus') }}">
            <label for="" class="btnfull">HURUF</label>
            {{-- <button class="btnksg">HURUF</button> --}}
            <button type="submit" class="btnksg">KATA DAN KALIMAT</button>
        </form>
        
    </div>
    
    {{-- <h2 class="judul">PENCARIAN HURUF</h2>

    <div class="searchcontainer">
        <div class="search-box">
            <input class="search" type="text"
                placeholder="Masukkan Huruf"
                id="input-word" name="search" value="{{ isset($search) ? $search : ''}}"/>
            <button id="search-btn" class="btnsearch">Cari</button>
        </div>

        
    </div> --}}

    <div>
        <h2 class="hurufdsr">HURUF DASAR BAHASA ISYARAT</h2>
        <div class = "huruf">
            <div class="container2">
                <div class="kotak">
                    <img src="{{ asset('assets/a.png') }}" alt="a">
                    <div class="teks">A</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/b.png') }}" alt="b">
                    <div class="teks">B</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/c.png') }}" alt="c">
                    <div class="teks">C</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/d.png') }}" alt="d">
                    <div class="teks">D</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/e.png') }}" alt="e">
                    <div class="teks">E</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/f.png') }}" alt="f">
                    <div class="teks">F</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/g.png') }}" alt="g">
                    <div class="teks">G</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/h.png') }}" alt="h">
                    <div class="teks">H</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/i.png') }}" alt="i">
                    <div class="teks">I</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/j.png') }}" alt="j">
                    <div class="teks">J</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/k.png') }}" alt="k">
                    <div class="teks">K</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/l.png') }}" alt="l">
                    <div class="teks">L</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/m.png') }}" alt="m">
                    <div class="teks">M</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/n.png') }}" alt="n">
                    <div class="teks">N</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/o.png') }}" alt="o">
                    <div class="teks">O</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/p.png') }}" alt="p">
                    <div class="teks">P</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/q.png') }}" alt="q">
                    <div class="teks">Q</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/r.png') }}" alt="r">
                    <div class="teks">R</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/s.png') }}" alt="s">
                    <div class="teks">S</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/t.png') }}" alt="t">
                    <div class="teks">T</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/u.png') }}" alt="u">
                    <div class="teks">U</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/v.png') }}" alt="v">
                    <div class="teks">V</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/w.png') }}" alt="w">
                    <div class="teks">W</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/x.png') }}" alt="x">
                    <div class="teks">X</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/y.png') }}" alt="y">
                    <div class="teks">Y</div>
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/z.png') }}" alt="z">
                    <div class="teks">Z</div>
                </div>
            </div>
            
        </div>
    </div>

@endsection

