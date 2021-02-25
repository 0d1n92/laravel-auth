@extends('admin.posts.layouts.layout')
@section('content_nav')
    
@endsection
@section('content_main')
@section('content')
@if (session('status'))
    <div class="container alert alert-success">
        {{ session('status') }}
    </div>
@endif
  <table class="table table-dark">
 {{--    <thead>
      <tr>
          @foreach ($posts->toArray()[0] as $key=>$value )
            <th>{{$key}}</th>
          @endforeach
          <th></th>
          <th></th> 
      </tr> --}}
    </thead>
    <tbody>
      @foreach ($posts as $post )
      <tr>
        @foreach ($post->getAttributes() as  $key=>$value)
          @if($key!="img_path")
          <th>{{$value}}</th>
          @else
            <th><img src="{{$value}}" alt="pippo"></th>
          @endif
           
        
        @endforeach
        {{-- <th><a class="btn btn-primary" href="{{route("admin.posts.show", $post->id)}}">Show</a></th>
        
         <th><a class="btn btn-primary" href="{{route("admin.posts.edit", $post->id)}}">Modifica</a></th> --}}
     {{--    <th>
            <form action="{{route('admin.post.destroy', $post->id )}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Cancella</button>
            </form>
          </th> --}}
          
        </tr>
      @endforeach
    
    </tbody>      
  </table>
  <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Aggiungi post</a>
    
@endsection