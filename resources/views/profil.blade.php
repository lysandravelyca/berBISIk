@extends('layout/layout')

@section('title', 'Profil')

<link rel="stylesheet" href="{{ asset('css/profil.css') }}">
<script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>

@section('content')

{{-- insert code here --}}


<div class="profcard">
    <div class="header">
         Profil Saya
    </div>
    <div class="card">
        <div class="btn">Ubah Cover</div>
        <div class="btn2">Ubah Profil</div>
    </div>

</div >

<div class="history">
    <div class="judul2_history">
        <div class="judul_history">
            <img src="assets/acara/Group 63.png" alt="">
            <h2>Acara yang terdaftar</h2>    
        </div>
    </div>
    <div class="container">
        <!-- isi dalam containernya mau apa -->
    </div>
</div>

<div class="current">
    <div class="judul2_current">
        <div class="judul_current">
            <img src="assets/acara/Group 43.png" alt="">
            <h2>Acara yang terdaftar</h2>    
        </div>
    </div>
    <div class="container">
        <!-- isi dalam containernya mau apa -->
    </div>
</div>
    @endsection
