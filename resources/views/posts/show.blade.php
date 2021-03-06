@extends('template.index')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
  <p class="mb-5">
    <img src="{{ asset('assets/images/' . $post->image) }}" alt="" class="img-fluid">
  </p>

  <h1 class="mb-3 h1">{{ $post->title }}</h1>

  {{ $post->content }}

  @include('tags._index', ['tags' => $post->tags])

  @include('authors._show', ['author'=>$post->author])



  @include('comments._index', ['comments' => $post->comments])


  @include('comments._form')

</div>

@endsection