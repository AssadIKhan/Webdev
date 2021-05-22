
@props(['post' => $post])

<div class="well mb-4">
    <div class="card">
             <div class="card-body">
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
{{--
          <a href="{{route('posts.edit')}}" class="btn btn-primary text-white fs-6 mb-3">Edit</a> --}}
      </form>
  @endcan

    <div class="flex items-center">
        @auth
            @if (!$post->likedBy(auth()->user()))
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    <button type="submit" class="text-blue-500">Like</button>
                </form>
            @else
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-blue-500">Unlike</button>
                </form>
            @endif
        @endauth

        <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
    </div>
             </div>
            </div>
</div>
