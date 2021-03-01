@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card-deck">
    @foreach ($posts as $post)
    <div class="card">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h2 class=" text-center  card-title">{{$post->getAttributes()["title"]}}</h2>
        <p class="card-text"><td>{{strlen($post->getAttributes()["text"]) > 200 ? substr($post->getAttributes()["text"],0,200)."..." : $post->getAttributes()["text"]}}</td></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">{{"Last update ".$post->getAttributes()["pubblication_date"]}}</small>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection