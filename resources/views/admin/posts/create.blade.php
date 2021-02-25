@extends('admin.posts.layouts.layout')
@section('content_main')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif  
  <form  class="container" action="{{route('admin.posts.store')}}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="title"></label>
      <input type="text" name ="title" id="title" class="form-control" value="{{old('title')}}" placeholder="title">
    </div>
     <div class="form-group">
      <label for="text"></label>
      <textarea class="form-controll" name ="text" id="text" cols="30" rows="10">{{old('text')}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection