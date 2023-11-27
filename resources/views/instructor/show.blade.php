@extends('layouts.app')

@section('content')

<a href="{{ route('index.instructor')}}">Back</a>
<h1>{{ $instructor->user_id }}</h1>
<h1>{{ $instructor->profession }}</h1>
<h1>{{ $instructor->speciality }}</h1>
@endsection