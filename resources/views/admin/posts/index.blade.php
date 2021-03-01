@extends('layouts.app')
@section('content')
<div class="container">
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <table class="table  table-hover" >
    <thead class="thead-dark">
  
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">subtitle</th>
        <th scope="col">text</th>
        <th scope="col">pubblication date</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody id="table_posts">
      
    @foreach ( $posts as $post)
        <tr title="Click per Visualizzare in dettaglio e modifica" onclick="window.location='{{route('admin.posts.show',$post->id)}}'">

          <td>{{$post->getAttributes()["id"]}}</td>
          <td>{{$post->getAttributes()["title"]}}</td>
          <td>{{$post->getAttributes()["subtitle"]}}</td>
          <td>{{strlen($post->getAttributes()["text"]) > 50 ? substr($post->getAttributes()["text"],0,50)."..." : $post->getAttributes()["text"]}}</td> {{-- elipsis se troppo lungo --}}
          <td>{{$post->getAttributes()["pubblication_date"]}}</td>
          <td>  
            <form class="float-right"  id='delete_show' action="{{route('admin.posts.destroy',$post->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" title="cancella"><i class="far fa-trash-alt"></i></button>
            </form></td>
        </tr>
      @endforeach 
    <tbody> 
  </table>
  <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Crea Nuvo Post</a>
</div>
@endsection