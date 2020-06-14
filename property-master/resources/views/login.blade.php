@extends('layout')
@section('main_content')
<div class="login-page">
    <div class="form">
        <form class="register-form">
            <input type="text" placeholder="name" />
            <input type="password" placeholder="password" />
            <input type="text" placeholder="email address" />
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" method="POST" action="{{route('login')}}">
            {{ csrf_field() }}
            <input type="text" name="email" placeholder="Email" />
            <input type="password" name="password" placeholder="Password" />
            <button>login</button>
            <p class="message">Not registered? <a href="{{url('register')}}">Create an account</a></p>
        </form>
    </div>
</div>
@endsection
