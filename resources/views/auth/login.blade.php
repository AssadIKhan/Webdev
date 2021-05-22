@extends('layouts.app')

@section('content')
      <div id="login bg-dark">
        <h3 class="text-center fw-bold fst-italic text-white fs-4 pt-5 mb-4">Login Form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        @if(session('status'))
                        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                        {{ session('status')}}
                        </div>
                        @endif
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="text-info fw-bold">Email:</label><br>
                                <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control @error('email') text-red-500 @enderror" value="{{old('email')}}">
                                @error('email')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info fw-bold">Password:</label><br>
                                <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control @error('password') text-red-500 @enderror">
                                @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                            </div>

                            <div id="forgot-link" class="text-left w-40"">
                                <a href="{{route('forgot')}}" class="text-info fw-bold">Forgot Password ?</a>
                            </div>
                            <div id="register-link" class="text-right float-right w-40 -mt-6">
                                <a href="{{route('register')}}" class="text-info fw-bold">Register here</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
