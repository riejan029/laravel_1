@extends('layout.app')
@section('content')
<div class="flex justify-center">
    <div class="w-8/12">
        <div class="p-6">
            <h1 class="text-2x1 font-medium mb-1">{{$user->name}}</h1>
            <p>{{$posts->count()}} {{Str::plural('post',$posts->count())}} and received {{$user->receivedLikes->count()}} {{Str::plural('like',$user->receivedLikes->count())}}.</p>
        </div>
        <div class="bg-white p-6 rounded-lg">
            @foreach ($posts as $post)
                <x-post :post="$post" />
            @endforeach
        </div>
        
    </div>
</div>
@endsection