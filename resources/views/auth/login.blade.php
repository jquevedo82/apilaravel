@extends('layouts.master')

@section('body')
    <form action="{{ route('login') }}" method="post">
        @csrf


            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-primary text-white" style="border-radius: 1rem;">
                            <div class="card-body p-2 text-center">
                                <div class="mb-md-2 mt-md-2 pb-2">
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="email">Email</label>
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="password">Password</label>
                                        @error('password')
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
