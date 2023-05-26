@extends('index')
@section('content')
<div class="d-flex justify-content-center" style="margin-top: 2.5%;">
    <div class="row d-flex border p-5" style="width: 30rem;">
        <div class="card-body">
            <img src="{{ asset('storage/assets/'.$user->profile_picture) }}" class="rounded mx-auto d-block"
            style="width: 200px; height: 200px;">
            <form action="/profile" method="POST" enctype="multipart/form-data" class="mt-3">
                @csrf
                <p class="card-text">Username</p>
                <div class="mb-3">
                    <input type="text" class="form-control @error('name')is-invalid @enderror" name="username" value="{{ $user->username }}"/>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <p class="card-text">Email</p>
                <div class="mb-3">
                    <input type="text" class="form-control @error('email')is-invalid @enderror" name="email" value="{{ $user->email }}"/>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <p class="card-text">Password</p>
                <div class="mb-3">
                    <input type="password" class="form-control @error('password')is-invalid @enderror" name="password"/>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <p class="card-text">Confirm Password</p>
                <div class="mb-3">
                    <input type="password" class="form-control @error('confirmpassword')is-invalid @enderror" name="confirmpassword"/>
                    @error('confirmpassword')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <p class="card-text">Profile Picture (Optional)</p>
                <div class="mb-3">
                    <input type="file" class="form-control @error('profileimage')is-invalid @enderror" name="profileimage"/>
                    @error('profileimage')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            <p><button type="submit" class="btn btn-success" style="width: 100%;">Submit</button></p>
            <p><a href="/"><input type="button" class="btn btn-outline-success" style="width: 100%;" value="Cancel"/></a></p>
            </form>
        </div>
    </div>
</div>
@endsection
