@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">

<div  class="container1">
    <a href="{{ route('candidate.create') }}">Create New Candidate</a>
    <ul>
        @forelse ($candidates as $candidate)
        <table class="table1">
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Selection Status</th>
                <th>Points</th>
            </tr>
            <tr>
                <td><a>{{ $candidate->id }}</a></td>
                <td><a>{{ $candidate->user_id }}</a></td>
                <td><a>{{ $candidate->selection_status }}</a></td>
                <td><a>{{ $candidate->points }}</a></td>
            </tr>
        </table>
        <a href="{{ route('candidate.show', $candidate->id) }}">{{ $candidate->id }}</a> |
        <a href="{{ route('candidate.edit', $candidate->id) }}">EDIT</a> |
        <form method="POST" action="{{ route('candidate.destroy', ['candidate'=>$candidate->id]) }}"> 
            @csrf
            @method('DELETE')
            <input type="submit" value='DELETE'>
        </form>
        @empty
            <p>No data.</p>
        @endforelse
    </ul>
</div>
@endsection