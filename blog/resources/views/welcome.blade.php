@extends('layout')

@section('contenu')

<div class="container">
  <div class="columns">
    <div class="column">
      <img src="{{ asset('image/mains.jpg') }}"/>
    </div>
    <div class="column">
      <img src="{{ asset('image/sport.jpg') }}"/>
    </div>
  </div>

</div>

@endsection
