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

    @endsection