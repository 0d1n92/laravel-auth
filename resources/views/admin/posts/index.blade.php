@extends('layouts.app')
@section('content')
@if (session('status'))
    <div class="container alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container">
  <table class="table table-dark">
    <thead>
        <tr>

          <th>id</th>
          
          <th>text</th>
          <th>title</th>
          <th>creato</th>
          <th>aggiornato</th>
          <th></th>
          <th></th> 

        </tr> 
       </thead>
      <tbody>

        @foreach ($posts as $post )
        <tr>
          @foreach ($post->getAttributes() as  $key=>$value)
            @if($key!="user_id" && $key!="slug")
              <th>{{$value}}</th>
            @endif  
          @endforeach
         {{--  <td>
            <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Delete</button>
            
            </form>
          
          </td>  --}}    
        </tr>
        @endforeach
          
      </tbody>      
  </table>
  <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Aggiungi post</a>

</div>
    
@endsection