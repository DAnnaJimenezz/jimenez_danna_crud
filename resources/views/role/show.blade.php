@extends('layouts.app')

@section('content')

<a href="{{ route('index.role')}}">Back</a>
<h1>{{ $user->role_name }}</h1>
<h1>{{ $user->description }}</h1>
@endsection