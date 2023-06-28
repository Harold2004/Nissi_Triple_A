@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="./CSS/dash.css">
<script src="./java.script/dash.js" defer></script>
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<script src="./java.script/dash.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e777a8bf29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('CSS/estilos4.css')}}" />
</div>
<div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <img src="./ladingPage2_files/images.png" alt="">
                <span>NISSI</span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        <!-- MENU -->
        <div class="menu">
            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <a href="{{ route('home') }}"><span>Dashboard</span></a>
            </div>

            <div class="enlace">
                <i class="bx bx-user"></i>
                <span>Usuarios</span>
            </div>

            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <a href="{{ route('crud.index') }}"><span>Inventario</span></a>
                
            </div>

            <div class="enlace">
                <i class="bx bx-message-square"></i>
                <span>Mantenimientos</span>
            </div>

            <div class="enlace">
                <i class="bx bx-heart"></i>
                <span>Favoritos</span>
            </div>

            <div class="enlace">
                <i class="bx bx-cog"></i>
                <span>Configuración</span>
            </div>
        </div>
    </div>
@endsection
