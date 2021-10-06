@extends('layout.app')
@section('content')
<div class="flex justify-center">
    <div class="bg-white w-8/12 p-6 rounded-lg">
        @auth
            <form action="{{route('posts')}}" method="post">
                @csrf
                <div class="mb-4">
                    <textarea class="w-full bg-gray-100 border-2 p-4 rounded-lg" name="body" id="body" placeholder="Post something..." cols="30" rows="4"></textarea>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                </div>
            </form>
        @endauth

        @if ($posts->count())
            @foreach ($posts as $post)
                <x-post :post="$post"/>
            @endforeach

            {{ $posts->links() }}
            
            </div>
        @else
            <p>There is no posts</p>
        @endif
    </div>
</div>
@endsection