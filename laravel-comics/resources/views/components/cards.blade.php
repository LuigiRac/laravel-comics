@props(['comic'])


<div class="container mt-5 card-container1" >
  <div class="card-container2">
    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">{{ $comic['title'] }}</h5>
  </div>
</div>