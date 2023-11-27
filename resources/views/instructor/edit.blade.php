@extends('layouts.app') --}}
@section('content')

<a href="{{ route ('instructor') }}"> Back</a>
<link rel="stylesheet" href="{{ asset('css/createInstructor.css') }}">

<section class="create-instructor" style="width: 30%; margin-left: 35%">
    <h1 class="titleIntructor">Create Your Instructor</h1>
    <form action="{{ route('instructor.update', $instructor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputDocNum" class="form-label">Profession</label>
          <input type="text" class="form-control" name="profession" value="{{ $instructor-> profession }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputDocNum" class="form-label">Speciality</label>
            <input type="text" class="form-control" name="speciality" value="{{ $instructor-> speciality }}">
          </div>

          <div class="mb-3">
            <label for="exampleInputLastName" class="form-label">User Id</label>
            <input type="number" class="form-control" name="user_id" value="{{ $instructor-> user_id }}">
        </div>

        <button type="submit" class="btn btn-primary" value="Update">Update</button>
      </form>
      @endsection
</section>