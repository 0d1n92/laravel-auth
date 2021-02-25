@extends('admin.posts.layouts.layout')
@section('content_nav')
    
@endsection
@section('content_main')

@if (session('status'))
    <div class="container alert alert-success">
        {{ session('status') }}
    </div>
@endif
  <table class="table table-dark">
 <thead>
      <tr>
          @foreach ($posts->toArray()[0] as $key=>$value )
            @if($key!="user_id")
              <th>{{$key}}</th>
            @endif  
          @endforeach
          <th></th>
          <th></th> 
      </tr> 
    </thead>
    <tbody>
    @foreach ($posts as $post )
      <tr>
        @foreach ($post->getAttributes() as  $key=>$value)
        @if($key!="user_id")
          <th>{{$value}}</th>
        @endif  
       @endforeach     
        </tr>
     @endforeach      
     
    
    </tbody>      
  </table>
  <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Aggiungi post</a>
    
@endsection