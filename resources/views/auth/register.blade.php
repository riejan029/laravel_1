@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-white w-4/12 p-6 rounded-lg">
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                      Name
                    </label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" value="{{old('name')}}" id="name" name="name" type="text" placeholder="Name">
                    @error('name')
                        <div class="text-red-500 text-sm mt-2">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                      Username
                    </label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" value="{{old('username')}}" id="username" name="username" type="text" placeholder="Username">
                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
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
                      Passowrd
                    </label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="password" name="password" type="password" placeholder="Password">
                    @error('password')
                        <div class="text-sm text-red-500 mt-2">
                            {{$message}}    
                        </div>                        
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                      Confirm Password
                    </label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password">
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 w-full rounded font-medium">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection