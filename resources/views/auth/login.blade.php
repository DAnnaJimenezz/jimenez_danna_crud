@extends('layouts.app')

@section('title')
    Inicia Sesión en Talento Humando CIDE
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<body>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        
        @if (session('mensaje'))
            <h6>{{ session('mensaje') }}</h6>   
        @endif
        
        <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}">
        @error('email')
            <h6>{{ $message }}</h6>
        @enderror

        <input type="password" name="password" id="" placeholder="Password">
        @error('password')
            <h6>{{ $message }}</h6>
        @enderror

        <input type="submit" name="login" value="Login">
    </form> 
</body>
@endsection
</html>