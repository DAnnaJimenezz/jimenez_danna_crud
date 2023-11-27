@extends('layouts.app') --}}
@section('content')

<a href="{{ route ('role') }}"> Back</a>
<link rel="stylesheet" href="{{ asset('css/createRole.css') }}">

<section class="create-role" style="width: 30%; margin-left: 35%">
    <h1 class="titleRole">Create Your Role</h1>
    <form action="{{ route('role.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputRoleNum" class="form-label">Role Name</label>
          <input type="text" class="form-control" name="role_name" value="{{ $role-> role_name }}" >
        </div>

        <div class="mb-3">
            <label for="exampleInputDescription" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" value="{{ $role-> description }}" >
          </div>

        <button type="submit" class="btn btn-primary" value="Update">Update</button>
      </form>
      @endsection
</section>