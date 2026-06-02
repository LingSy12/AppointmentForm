@extends('layouts.app')

@section('content')

<style>
      .background-radial-gradient {

      background-color: hsl(218, 41%, 15%);
      background-image: url('https://www.healthdigest.com/img/gallery/surprising-side-effects-of-eating-too-much-fruit/negative-side-effects-mostly-involve-digestion-1619732107.webp');
      background-size: cover;
      background-position: center;
      min-height: 100vh;
    }


    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.7) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
</style>

<div class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 mb-5">
          <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(214, 93%, 16%)">
              Welcome to Bro.Health <br />
              <span style="color: hsl(219, 78%, 4%)">Appointment Feedback Form</span>
            </h1>
            <h4 class="mb-4 opacity-70" style="color: hsl(220, 31%, 6%)">
              Please sign up.
            </h4>
          </div>
    
          <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
    
            <div class="card bg-glass">
              <div class="card-body px-4 py-5 px-md-5">
    
                <form method="POST" action="{{ route('register') }}">
                @csrf
                <div style="text-align: center;"><h2>Register</h2></div>
                  
                 <!-- Name input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="name">Name: </label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                  <label class="form-label" for="email">Email address: </label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  </div>
    
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password: </label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  </div>

                  <!-- Confirm Password input -->
                 <div class="form-outline mb-4">
                 <label class="form-label" for="password-confirm">Confirm Password: </label>
                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                 </div>

                  <!-- Submit button -->
                  <div class="mt-3">
                  <button type="submit" class="btn btn-primary btn-block mb-4" name="login">
                   Register
                  </button>

                 </div>

    
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>



</div>
@endsection