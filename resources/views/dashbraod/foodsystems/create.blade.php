


@extends('dashbraod.layouts.parent')
@section('content')

<br>
<br>
<br>
<div class="container">
    <div class="row">
    <div class="col-md-12">
        @if (session('status'))

        <div class="alert alert-success m-3" role="alert">{{ session('status') }}</div>
        @endif
        

    <div class="card-header">
    <h4> Add foodsystem
        <br>
        <br> 
    <a href="{{route('dashbraod.info0.index')}}"  class="btn btn-primary float-end">Back</a>
    </h4>
    </div>
    <div class="card-body">
    
        <form action="{{route('dashbraod.info0.create')}}" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="mb-3">
                <label for="name">title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                @error('title')<span  class="text-danger">{{$message}}</span> @enderror
               
                
            </div>
            <div class="mb-3">
                <label for="posts_title">posts_title</label>
                <input type="text" class="form-control" id="posts_title" name="posts_title" value="{{old('posts_title')}}">
                @error('posts_title')<span  class="text-danger">{{$message}}</span> @enderror

            </div>
            <div class="mb-3">
                <label for="posts_img">posts_img</label>
                <input type="file" class="form-control" id="posts_img" name="posts_img" value="{{old('posts_img')}}">
                @error('posts_img')<span  class="text-danger">{{$message}}</span> @enderror

            </div>
            <div class="mb-3">
                <label for="posts_url">posts_url</label>
                <input type="posts_url" class="form-control" id="posts_url" name="posts_url" value="{{old('posts_url')}}">
                @error('posts_url')<span  class="text-danger">{{$message}}</span> @enderror

            </div>
            <div class="mb-3">
                <label for="posts_content">posts_content</label>
                <input type="text" class="form-control" id="posts_content" name="posts_content" value="{{old('posts_content')}}">

                @error('posts_content')<span  class="text-danger">{{$message}}</span> @enderror

            </div>
            <div class="mb-3">
                <label for="url">url</label>
                <input type="url" class="form-control"   id="url" name="url" value="{{old('url')}}">
                @error('url')<span  class="text-danger">{{$message}}</span> @enderror

            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Save</button>


            </form>
    </div>
    
    </div>
    </div>
    </div>
    --}}
    