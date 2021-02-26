@extends('layouts.app')
@section('content')
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
    <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text">With textarea</span>
    </div>
      <textarea class="form-control"  name ="text" id="text" aria-label="scrivi texsto">{{old('text')}}</textarea>
    </div>
    <button type="submit" class="mt-5 btn btn-primary">Submit</button>
</form>
    
@endsection