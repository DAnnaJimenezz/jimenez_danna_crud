@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

<body>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        
        @if (session('message'))
            <h6>{{ session('message') }}</h6>   
        @endif
        
        <select name="doc_type" id="">
            <option value="C.C">C.C</option>
            <option value="T.I">T.I</option>
        </select>
        
        <input type="text" name="doc_num" id="" placeholder="Document Number" value="{{ old('doc_num') }}">
        @error('doc_num')
            <h6>{{ $message }}</h6>
        @enderror
        
        <input type="text" name="name" id="" placeholder="Name" value="{{ old('name') }}">
        @error('name')
            <h6>{{ $message }}</h6>
        @enderror
        
        <input type="text" name="last_name" id="" placeholder="Last Name" value="{{ old('last_name') }}">
        @error('last_name')
            <h6>{{ $message }}</h6>
        @enderror
    
        <input type="text" name="phone" id="" placeholder="Phone" value="{{ old('phone') }}">
        @error('phone')
        <h6>{{ $message }}</h6>
        @enderror

        <input type="text" name="user_name" id="" placeholder="User Name" value="{{ old('user_name') }}">
        @error('user_name')
            <h6>{{ $message }}</h6>
        @enderror
    
        <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}">
        @error('email')
            <h6>{{ $message }}</h6>
        @enderror
        
        <input type="password" name="password" id="" placeholder="Password" value="{{ old('password') }}">
        @error('password')
            <h6>{{ $message }}</h6>
        @enderror

        <input type="text" name="role_id" id="" placeholder="Role Id">
        @error('role_id')
            <h6>{{ $message }}</h6>
        @enderror
        <input type="submit" name="send" value="Send">
    </form> 
</body>
@endsection
</html>