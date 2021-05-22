@extends('layouts.app')

@section('content')
      <div id="login bg-dark">
        <h3 class="text-center fw-bold fst-italic text-white fs-4 pt-3 mb-4">Registration Form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <label for="firstname" class="text-info fw-bold">First Name</label>
                                        <input type="text" id="firstname" name="firstname" placeholder="First Name" class="form-control @error('firstname') text-red-500 @enderror" value="{{old('firstname')}}">
                                    @error('firstname')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <label for="lastname" class="text-info fw-bold">Last Name</label>
                                        <input type="text" id="lastname" name="lastname" placeholder="Last Name" class="form-control @error('lastname') text-red-500 @enderror" value="{{old('lastname')}}">
                                        @error('lastname')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <!--Grid column-->
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info fw-bold">Email:</label><br>
                                <input type="text" name="email" id="email"  placeholder="Enter Email Address" class="form-control @error('email') text-red-500 @enderror" value="{{old('email')}}">
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
                                <label for="password_confirmation" class="text-info fw-bold">Confirm Password:</label><br>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="form-control @error('password_confirmation') text-red-500 @enderror">
                                @error('password_confirmation')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info fw-bold">Already Have an Account !</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
