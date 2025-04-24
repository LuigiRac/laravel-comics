@extends('layouts/master')

@section('contenuto')
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
@endsection