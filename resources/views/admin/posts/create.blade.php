@extends('layouts.app')
@section('content')
<div class="container">
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
      <textarea class="form-control" rows="10" cols="50" name ="text" id="text" aria-label="scrivi testo">{{old('text')}}</textarea>
    </div>
    <button type="submit" class="mt-3 btn btn-success">Submit</button>
    
</form>
<a href="{{route('admin.posts.index')}}" class="float-right mt-3 btn btn-primary">Tutti i post</a>
</div>
@endsection