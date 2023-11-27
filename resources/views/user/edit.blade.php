@extends('layouts.app') --}}
@section('content')

<a href="{{ route ('user') }}"> Back</a>
<link rel="stylesheet" href="{{ asset('css/createUser.css') }}">

<section class="create-user" style="width: 30%; margin-left: 35%">
    <h1 class="titleUser">Create Your User</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="exampleInputDocType" class="form-label">Document Type</label>
          <select value="{{ $user-> doc_type }}" class="form-select" name="doc_type">
            <option selected>Select your document type</option>
            <option value="C.C">C.C</option>
            <option value="T.I">T.I</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="exampleInputDocNum" class="form-label">Document Num</label>
          <input value="{{ $user-> doc_num }}"  type="text" class="form-control" name="doc_num">
        </div>

        <div class="mb-3">
            <label for="exampleInputDocNum" class="form-label">Name</label>
            <input value="{{ $user-> name }}" type="text" class="form-control" name="name">
          </div>

          <div class="mb-3">
            <label for="exampleInputLastName" class="form-label">Last Name</label>
            <input value="{{ $user-> last_name }}" type="text" class="form-control" name="last_name">
        </div>

        <div class="mb-3">
            <label for="exampleInputPhone" class="form-label"> Phone</label>
            <input value="{{ $user-> phone }}" type="number" class="form-control" name="phone">
        </div>

        <div class="mb-3">
            <label for="exampleInputUserName" class="form-label">User Name</label>
            <input value="{{ $user-> user_name }}" type="text" class="form-control" name="user_name">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Email</label>
            <input value="{{ $user-> email}}" type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail" class="form-label">Role Id</label>
          <input value="{{ $user-> role_id }}" type="number" class="form-control" name="role_id">
      </div>

        <button type="submit" class="btn btn-primary" value="Update">Update</button>
      </form>
      @endsection
</section>