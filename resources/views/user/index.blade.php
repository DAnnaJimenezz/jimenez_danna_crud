@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">

<div  class="container1">
    <a href="{{ route('auth.create') }}">Create New User</a>
    <ul>
        @forelse ($users as $user)
        <table>
            <tr>
                <th>ID</th>
                <th>Role Id</th>
                <th>Doc Type</th>
                <th>Doc Num</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Role Name</th>
            </tr>
            <tr>
                <td><a>{{ $user->id }}</a></td>
                <td><a>{{ $user->role_id }}</a></td>
                <td><a>{{ $user->doc_type}}</a></td>
                <td><a>{{ $user->doc_num }}</a></td>
                <td><a>{{ $user->name }}</a></td>
                <td><a>{{ $user->last_name }}</a></td>
                <td><a>{{ $user->phone}}</a></td>
                <td><a>{{ $user->user_name}}</a></td>
                <td><a>{{ $user->email}}</a></td>
                <td><a>{{ $user->role->role_name}}</a></td>
            </tr>
        </table>
            <a href="{{ route('user.show', $user->id) }}">{{ $user->id }}</a> |
            <a href="{{ route('user.edit', ['user' => $user->id]) }}">EDIT</a> |
            <form method="POST" action="{{ route('user.destroy', ['user'=>$user->id]) }}"> 
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