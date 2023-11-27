@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">

<div  class="container1">
    <a href="{{ route('instructor.create') }}" >Create New Instructor</a>
    <ul>
        @forelse ($instructors as $instructor)
        <table>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Profession</th>
                <th>Speciality</th>
            </tr>
            <tr>
                <td><a>{{ $instructor->id }}</a></td>
                <td><a>{{ $instructor->user_id }}</a></td>
                <td><a>{{ $instructor->profession }}</a></td>
                <td><a>{{ $instructor->speciality }}</a></td>
            </tr>
        </table>
        <a href="{{ route('instructor.show', $instructor->id) }}">{{ $instructor->id }}</a> |
        <a href="{{ route('instructor.edit', $instructor->id) }}">EDIT</a> |
        <form method="POST" action="{{ route('instructor.destroy', $instructor->id) }}"> 
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