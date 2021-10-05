@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-white w-4/12 p-6 rounded-lg">
            @if (session('fail'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{session('fail')}}
                </div>
            @endif
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                      Email
                    </label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" value="{{old('email')}}" id="email" name="email" type="email" placeholder="Email">
                    @error('email')
                        <div class="text-sm text-red-500 mt-2">
                            {{$message}}    
                        </div>                        
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                      Password
                    </label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="password" name="password" type="password" placeholder="Password">
                    @error('password')
                        <div class="text-sm text-red-500 mt-2">
                            {{$message}}    
                        </div>                        
                    @enderror
                </div>
                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me.</label>
                    </div>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 w-full rounded font-medium">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection