@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row card-deck" >
    @foreach ($posts as $post)
      <div class="card col-lg-4">
        <img class="card-img-top" src="{{asset('storage/'.$post->img_post)}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$post->getAttributes()["title"]}}</h5>
          <p class="card-text">{{strlen($post->getAttributes()["text"]) > 200 ? substr($post->getAttributes()["text"],0,200)."..." : $post->getAttributes()["text"]}}</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">{{"Last update ".$post->getAttributes()["pubblication_date"]}}</small>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection


      
      
     