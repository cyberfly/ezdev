@extends('layouts.auth_default')
@section('content')

      {{ Form::open(array('url' => 'register', 'class'=>'form-signin')) }}
      <!-- <form class="form-signin" action="index.html"> -->
        <h2 class="form-signin-heading">registration now</h2>
        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <input type="text" name="first_name" class="form-control" placeholder="First Name" autofocus>
            <input type="text" name="last_name" class="form-control" placeholder="Last Name" autofocus>

            <input type="text" name="email" class="form-control" placeholder="Email" autofocus>


            <!-- <p> Enter your account details below</p> -->
            <input type="password" name="password" class="form-control" placeholder="Password">
            <input type="password" name="confirm_password" class="form-control" placeholder="Re-type Password">
            <label class="checkbox">
                <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
            </label>

            <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

            <div class="registration">
                Already Registered.
                <a class="" href="/login">
                    Login
                </a>
            </div>

        </div>

      <!-- </form>   -->

      {{ Form::close() }}

@stop

