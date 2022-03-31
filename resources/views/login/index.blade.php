@extends('layout.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-6">
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        <main class="form-signin">
            <form accept="/login" method="POST">
              @csrf
              {{-- <img class="mb-4" src="https://source.unsplash.com/650x400?login" alt=""> --}}
              <h1 class="h3 mb-3 fw-normal text-center">Please login in</h1>    
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" value="{{ old('password') }}" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
            </form>
            <small class="d-flex justify-content-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
          </main>  
    </div>
</div>

@endsection