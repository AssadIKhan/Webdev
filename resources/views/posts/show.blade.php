@extends('layouts.app')

@section('content')
    <div class="flex justify-center mt-5">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <a href="/posts" class="btn btn-primary text-white fs-6 mb-3">Go Back</a> <br>

    <a href="/posts/{{$post->id}}" class="h4 mb--9">{{ $post->title }}</a>
    <p class="mt--9">Posted by : <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->firstname }}</a> <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span></p>
    <blockquote class="blockquote mt-2">
        <p class="h5" class="mb-3">{{ $post->body }}</p>
    </blockquote>
      @can('delete', $post)
      <form action="{{ route('posts.destroy', $post) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger text-white fs-6 mb-3">Delete</button>
          <a href="/posts/{{$post->id}}/edit" class="btn btn-primary text-white fs-6 mb-3">Edit</a>
      </form>
  @endcan
        </div>
    </div>
@endsection
