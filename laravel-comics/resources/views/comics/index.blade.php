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


    
@endsection