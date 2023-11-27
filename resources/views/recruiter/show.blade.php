@extends('layouts.app')

@section('content')

<a href="{{ route('index.recuiter')}}">Back</a>
<h1>{{ $user->user_id }}</h1>
<h1>{{ $user->admission_date }}</h1>
@endsection