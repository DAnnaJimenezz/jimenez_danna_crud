@extends('layouts.app')
@section('content')

<a href="{{ route ('user') }}">Back</a>
<link rel="stylesheet" href="{{ asset('css/createUser.css') }}">

<section class="create-user" style="width: 30%; margin-left: 35%">
    <h1 class="titleUser">Create Your User</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputDocType" class="form-label">Document Type</label>
          <select class="form-select" name="doc_type" required>
            <option selected>Select your document type</option>
            <option value="C.C">C.C</option>
            <option value="T.I">T.I</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="exampleInputDocNum" class="form-label">Document Num</label>
          <input type="text" class="form-control" name="doc_num" reaquired>
        </div>

        <div class="mb-3">
            <label for="exampleInputDocNum" class="form-label" >Name</label>
            <input type="text" class="form-control" name="name" required>
          </div>

          <div class="mb-3">
            <label for="exampleInputLastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputPhone" class="form-label"> Phone</label>
            <input type="number" class="form-control" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputUserName" class="form-label">User Name</label>
            <input type="text" class="form-control" name="user_name" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" required>
      </div>

        <div class="mb-3">
          <label for="exampleInputEmail" class="form-label">Role Id</label>
          <input type="number" class="form-control" name="role_id" required>
      </div>

        <button type="submit" class="btn btn-primary">Create User</button>
      </form>
      @endsection
</section>