@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-4">
    <div class="alert alert-dark w-75" role="alert">
        @auth
        <h1 class="text-lg fw-bold mb-4 card-header">Create Post</h1>
        {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'mb-5']) !!}
        @csrf
        <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                @error('title')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                @error('body')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        {{-- <h1 class="text-lg fw-bold mb-4">Create Post</h1>
        <form action="{{route('posts')}}" method='post'>
            @csrf
            <div class="form-group">
                <label for="title" class="text-info fw-bold">Title:</label><br>
                <input class="form-control" aria-label="With textarea" name="title" id="title" placeholder="Enter Post Title" class="form-control @error('title') text-red-500 @enderror">
                @error('title')
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
        </form> --}}
        @endauth
        @if ($posts->count())

        @foreach ($posts as $post)

        <x-post :post="$post" />
    @endforeach
    {{$posts->links()}}
@else
    <p>There are no posts</p>
@endif

      </div>
    </div>
@endsection
