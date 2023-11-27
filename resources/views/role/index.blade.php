@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">

<div  class="container1">
    <a href="{{ route('role.create') }}">Create New Role</a>
    <ul>
        @forelse ($roles as $role)
        <table>
            <tr>
                <th>ID</th>
                <th>Role Name</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><a>{{ $role->id }}</a></td>
                <td><a>{{ $role->role_name }}</a></td>
                <td><a>{{ $role->description }}</a></td>
            </tr>
        </table>
        <a href="{{ route('role.show', $role->id) }}">{{ $role->id }}</a> |
        <a href="{{ route('role.edit', $role->id) }}">EDIT</a> |
        <form method="POST" action="{{ route('role.destroy', $role->id) }}"> 
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