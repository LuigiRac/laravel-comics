@extends('layouts/master')

@section('content')
@php
    $comics = config('comics');
//    dd($comics); 
@endphp
    <div class="row ">
        @foreach ($comics as $comic)
            <div class="col ">
                <x-cards :comic="$comic" />
            </div>
        @endforeach
        
    </div>
    <div class="load-button-container ">
        <button class="load-button mb-3"><strong>LOAD MORE</strong></button>
    </div>

    @php
                $shopSections = config('shop');
                // dd($shop);
    @endphp

    <div class="shop-navigation">
        @foreach ($shopSections as $section)
            <div class="shop-item">
                <a href="">
                    <img src="{{ Vite::asset ('resources/img/' . $section['image']) }}" alt="{{ $section['name'] }}">
                    <span class="shop-name">{{ $section['name'] }}</span>
                </a>
            </div>
        @endforeach
    </div>


    <div class="about-us-container">
        <div class="column">
            <h3><strong>DC COMICS</strong></h3>
            <ul>
                @foreach(config('aboutUs.dcComics') as $item)
                    <li><a href="#">{{ $item }}</a></li>
                @endforeach
            </ul>
            <h3><strong>SHOP</strong></h3>
            <ul>
                @foreach(config('aboutUs.shop') as $item)
                    <li><a href="#">{{ $item }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="column">
            <h3><strong>DC</strong></h3>
            <ul>
                @foreach(config('aboutUs.dc') as $item)
                    <li><a href="#">{{ $item }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="column">
            <h3><strong>SITES</strong></h3>
            <ul>
                @foreach(config('aboutUs.sites') as $item)
                    <li><a href="#">{{ $item }}</a></li>
                @endforeach
            </ul>
        </div>

        <img src="{{ Vite::asset ('resources/img/dc-logo-bg.png')}}">

    </div>
    

    @endsection