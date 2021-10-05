@extends('layout.app')
@section('content')
<div class="flex justify-center">
    <div class="bg-white w-8/12 p-6 rounded-lg">
        <form action="{{route('posts')}}" method="post">
            @csrf
            <div class="mb-4">
                <textarea class="w-full bg-gray-100 border-2 p-4 rounded-lg" name="body" id="body" placeholder="Post something..." cols="30" rows="4"></textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
            </div>
        </form>

        @if ($posts->count())
            @foreach ($posts as $post)
                <div class="mb-4">
                    <a href="" class="font-bold">{{$post->user->name}}</a><span class="text-gray-600 text-sm">{{$post->created_at->diffForHumans()}}</span>
                    <p class="mb-2">{{$post->body}}</p>
                </div>
            @endforeach
        @else
            <p>There is no posts</p>
        @endif
    </div>
</div>
@endsection