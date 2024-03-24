@extends('base')
@section('title','login')
@section('content')

  <div class='container'>
    <div class="row">
        <div class="col-md-5 mx-auto">

            <h1 class="text-center text-muted mb-3 mt-2">Please sign in</h1>
            {{-- <p class="text-center text-muted mb-5" >Your articles are waiting for you.</p> --}}

            <form method="post" action="{{ route('login')}}" >
                @csrf
                {{--pour afficher si il y a un message d'erreur  pour l'email et password--}}


                @error('email')
                      <div class="alert alert-danger  text-center " role="alert">
                       {{ $message }}
                      </div>
                @enderror


                @error('password')
                <div class="alert alert-danger text-center" role="alert">
                 {{ $message }}
                </div>
                @enderror

                   <label for="email" >Email</label>

                   <input type="email" name="email" id="email" class="form-control mb-3
                   @error('email')  is-invalid @enderror " value="{{ old('email')}}" required autocomplete="email" autofocus >
                  {{-- old pour que si le mote de passe faut qaut en actualiser la page l'email rest
                   requird: pour que il faut saisir le chaps--}}

                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" class="form-control mb-3
                     @error('password')  is-invalid  @enderror " required autocomplete="current-password" autofocus>

                <div  class="row">
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="remember" name="remember"
                            {{ old('remember') ? 'checked' : ''  }} >
                            {{-- @if(old('remember')) checked @endif --}}
                            <label class="form-check-label" for="remember" >Remember me</label>

                        </div>

                    </div>
                    <div class=" col-md-6 text-end">
                        <a href="#"> forget password ?</a>
                    </div>


                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Sign in</button>
                </div>
                <p class="text-center text-muted mt-5">Not registered yet?
                    <a href="{{ route('register')}}"> create an acounte</a>
                </p>

            </form>
        </div>
    </div>
    </div>
@endsection
