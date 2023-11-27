@extends('layouts.app')

@section('content')

<a href="{{ route('index.user')}}">Back</a>
<h1>{{ $user->doc_type }}</h1>
<h1>{{ $user->doc_num }}</h1>
<h1>{{ $user->name }}</h1>
<h1>{{ $user->last_name }}</h1>
<h1>{{ $user->phone }}</h1>
<h1>{{ $user->user_name }}</h1>
<h1>{{ $user->email }}</h1>
<h1>{{ $user->role_id }}</h1>
@endsection