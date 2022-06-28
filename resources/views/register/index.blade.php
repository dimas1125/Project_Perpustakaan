@extends('layout.loginmain')
@section('content')

<p id="title">{{ $title }}</p>

<main class="form-signin">
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <form action="{{ route('registers.store') }}" method="POST" enctype="multipart/form-data">
      @if (session()->has('failed'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      @csrf
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="name" required autofocus>
        <label for="name">Name</label>
      </div>
      <div class="form-floating">
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="name@example.com"  required value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
          <div class="invalid-feedback">
            {{ $message }}  
          </div>   
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="email" required>
        <label for="email">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div><br>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
    
    <br><p style="font-size: 13px; text-align:center">Sudah register? Klik <a href="/">disini</a> untuk Login</p>
  </main>

@endsection