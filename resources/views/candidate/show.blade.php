@extends('layouts.app')

@section('content')

<a href="{{ route('index.candidate')}}">Back</a>
<h1>{{ $candidate->user_id }}</h1>
<h1>{{ $candidate->selection_status }}</h1>
<h1>{{ $candidate->points }}</h1>
@endsection