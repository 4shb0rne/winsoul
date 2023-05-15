@extends('index')
@section('content')
<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8 mt-5">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Register
        </h2>
    </div>
<div class="d-flex justify-content-center" style="margin-top: 2.5%;">
    <div class="card row d-flex" style="width: 30rem;">
        <div class="card-body">
            <form action="/register" method="POST">
                @csrf
                <p class="card-text">Username</p>
                <div class="mb-3">
                    <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" value="{{ old('name') }}"/>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <p class="card-text">Email</p>
                <div class="mb-3">
                    <input type="text" class="form-control @error('email')is-invalid @enderror" name="email" value="{{ old('email') }}"/>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <p class="card-text">Password</p>
                <div class="mb-3">
                    <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" value="{{ old('password') }}"></input>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <p><a href="/register"><button class="btn btn-dark" style="width: 100%;">Register</button></a></p>
            </form>
        </div>
    </div>
</div>
@endsection
