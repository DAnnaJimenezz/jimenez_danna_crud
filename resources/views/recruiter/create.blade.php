@extends('layouts.app')
@section('content')

<a href="{{ route ('recruiter') }}"> Back</a>
<link rel="stylesheet" href="{{ asset('css/createRecruiter.css') }}">

<section class="create-recruiter" style="width: 30%; margin-left: 35%">
    <h1 class="titleRecruiter">Create Your Recruiter</h1>
    <form action="{{ route('recruiter.store') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="exampleInputRoleNum" class="form-label">User Id</label>
          <input type="number" class="form-control" name="user_id" value= "{{old('user_id')}}" required>
          @error('user_id')
              <span>{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputDescription" class="form-label">Admission Date</label>
          <input type="date" class="form-control" name="admission_date" value="{{old('admission_date')}}"required>
          @error('admission_date')
              <span>{{$message}}</span>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Recruiter</button>
      </form>
      @endsection
</section>