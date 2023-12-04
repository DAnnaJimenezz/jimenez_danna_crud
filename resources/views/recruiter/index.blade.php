@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">

<div  class="container1">
    <a href="{{ route('recruiter.create') }}" >Create New Recruiter</a>
    <ul>
        @forelse ($recruiters as $recruiter)
        <table>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Admission Date</th>
            </tr>
            <tr>
                <td><a>{{ $recruiter->id }}</a></td>
                <td><a>{{ $recruiter->user_id }}</a></td>
                <td><a>{{ $recruiter->admission_date }}</a></td>
            </tr>
        </table>
        <a href="{{ route('recruiter.show', $recruiter->id) }}">{{ $recruiter->id }}</a> |
        <a href="{{ route('recruiter.edit', $recruiter->id) }}">EDIT</a> |
        <form method="POST" action="{{ route('recruiter.destroy', ['recruiter'=>$recruiter->id]) }}"> 
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