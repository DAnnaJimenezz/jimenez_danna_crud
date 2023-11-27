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
          <input type="text" class="form-control" name="doc_num" value="{{old('doc_num')}}" required>
          @error('doc_num')
              <span>{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputDocNum" class="form-label" >Name</label>
          <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
          @error('name')
              <span>{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputLastName" class="form-label">Last Name</label>
          <input type="text" class="form-control" name="last_name" value="last_name" required>
          @error('last_name')
              <span>{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputPhone" class="form-label"> Phone</label>
          <input type="number" class="form-control" name="phone" value="{{old('phone')}}" required>
          @error('phone')
              <span>{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputUserName" class="form-label">User Name</label>
          <input type="text" class="form-control" name="user_name" value="{{old('user_name')}}" required>
          @error('user_name')
              <span>{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
          @error('email')
              <span>{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" value="{{old('password')}}" required>
          @error('password')
              <span>{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail" class="form-label">Role Id</label>
          <select name="role_id" id="">
            @foreach ($roles as $rol)
              <option value="{{$rol->id}}">{{$rol->role_name}}</option>    
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Create User</button>
      </form>
      @endsection
</section>