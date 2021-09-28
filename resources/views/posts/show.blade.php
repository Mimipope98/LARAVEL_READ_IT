@extends('template.index')

@section('title')
    
@stop

@section('content')
<div class="col-lg-8 ftco-animate">
    <h1 class="mb-3 h1">{{$post->titre}}</h1>
        <p class="mb-5">
            <img src="{{ asset('assets/images/' . $post->image) }}" alt="" class="img-fluid">
        </p>
  <p>{{ $post->content }}</p>
</div>
@stop