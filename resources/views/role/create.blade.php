@extends('layouts.app')
@section('content')

<a href="{{ route ('role') }}"> Back</a>
<link rel="stylesheet" href="{{ asset('css/createRole.css') }}">

<section class="create-role" style="width: 30%; margin-left: 35%">
    <h1 class="titleRole">Create Your Role</h1>
    <form action="{{ route('role.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputRoleNum" class="form-label">Role Name</label>
          <input type="text" class="form-control" name="role_name" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputDescription" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" required>
          </div>

        <button type="submit" class="btn btn-primary">Create Role</button>
      </form>
      @endsection
</section>