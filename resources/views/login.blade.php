@extends('layouts.app')

@section('content')
  <div class="main">
    <div class="container formulario">
      <form method="POST" action="/login">
        {{ csrf_field() }}
        <ul class="flex-outer">
          <li>
            <label for="email">Email</label>
            <input name="email" type="email" id="email" placeholder="Enter your email">
          </li>
          <li>
            <label for="password">Contraseña</label>
            <input name="password" type="password" id="password" placeholder="Enter your password">
          </li>

            <li class="col-xs-offset-3">
              <label for="remember">
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                  Remember Me
                </label>
            </li>

          <li>
            <button type="submit">Submit</button>
          </li>
        </ul>
      </form>
    </div>
  </div>
@endsection
