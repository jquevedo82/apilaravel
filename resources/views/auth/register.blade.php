@extends('layouts.master')

@section('body')
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-primary text-white" style="border-radius: 1rem;">
                        <div class="card-body p-3 text-center">
                            <div class="mb-md-1 mt-md-4 pb-2">
                                <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                <p class="text-white-50 mb-2">Please enter your info!</p>
                                <div class="form-outline form-white mb-4">
                                    <input type="text" id="name" name="name" class="form-control form-control-lg" value="{{ old('name') }}" />
                                    <label class="form-label" for="name">Name</label>
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                                    <label class="form-label" for="email">Email</label>
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Password</label>
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" />
                                    <label class="form-label" for="password_confirmation">Password</label>
                                    @error('password_confirmation')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
