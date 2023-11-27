@extends('layouts.app') --}}
@section('content')

<a href="{{ route ('recruiter') }}"> Back</a>
<link rel="stylesheet" href="{{ asset('css/createRecruiter.css') }}">

<section class="create-recruiter" style="width: 30%; margin-left: 35%">
    <h1 class="titleRecruiter">Create Your Recruiter</h1>
    <form action="{{ route('recruiter.update', $recruiter->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputRoleNum" class="form-label">User Id</label>
          <input type="number" class="form-control" name="user_id" value="{{ $recruiter-> user_id }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputDescription" class="form-label">Admission Date</label>
            <input type="date" class="form-control" name="admission_date" value="{{ $recruiter-> admission_date }}">
          </div>

        <button type="submit" class="btn btn-primary" value="Update">Update</button>
      </form>
      @endsection
</section>