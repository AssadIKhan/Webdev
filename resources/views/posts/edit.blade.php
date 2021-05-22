{{-- @extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{route('posts.update', $post->id)}}" method ="put" enctype= "multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title" class="text-info fw-bold">Title:</label><br>
            <input class="form-control" aria-label="With textarea" name="title" id="title" placeholder="Enter Post Title" class="form-control @error('title') text-red-500 @enderror">
            @error('body')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="body" class="text-info fw-bold">Description:</label><br>
            <textarea class="form-control" aria-label="With textarea" name="body" id="body" placeholder="Enter Post Description...." class="form-control @error('body') text-red-500 @enderror"></textarea>
            @error('body')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">

            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Post</button>

        </div>
    </form>
@endsection --}}
@extends('layouts.app')

@section('content')
<div class="flex justify-center mt-5">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <h1 class="text-lg fw-bold mb-4">Edit Post</h1>
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title', ['class' => 'text-info fw-bold'])}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body',  ['class' => 'text-info fw-bold'])}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-success'])}}
    {!! Form::close() !!}
    </div>
</div>
@endsection
