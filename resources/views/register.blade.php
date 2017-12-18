@extends('layouts.app')

@section('content')


      <div class="main">
        <div class="container formulario">
          <form method="POST" action="/register">
              {{ csrf_field() }}

            <ul class="flex-outer">

              <li class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name here" required autofocus>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </li>

              <li class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter you email here" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </li>

              <li class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password here" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </li>

              <li>
                <label for="password-confirm">Confirm Password</label>
                <input type="password" id="password-confirm" name="password_confirmation" placeholder="Confirm your password here" required>
              </li>

              <li>
                <button type="submit">Submit</button>
              </li>

            </ul>

          </form>

        </div>
      </div>

@endsection
