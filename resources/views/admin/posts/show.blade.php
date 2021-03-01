@extends('layouts.app')
@section('content')
<div class="container">
 <div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <h5 class="nav-link active" href="#">{{"post ".$post["id"]}}</h5>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route("admin.posts.edit", $post->id)}}">Modifica</a>
        </li>
      </ul>
      <form class="float-right"  id='delete_show' action="#" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
      </form>
    </div>
    <div class="card-body">
      <h2 class="card-title">{{$post["title"]}}</h2>
      <p class="card-text">{{$post["text"]}}</p>
      
    </div>
  </div>
  <a class="mt-3 btn btn-primary" href="{{route('admin.posts.index')}}">Tutti i post</a>
</div>

@endsection