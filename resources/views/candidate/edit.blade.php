@extends('layouts.app') --}}
@section('content')

<a href="{{ route ('candidate') }}"> Back</a>
<link rel="stylesheet" href="{{ asset('css/createCandidate.css') }}">

<section class="create-candidate" style="width: 30%; margin-left: 35%">
    <h1 class="titleCandidate">Create Your Candidate</h1>
    <form action="{{ route('candidate.update', $candidate->id) }}" method="POST">
      @method('PUT')
        @csrf
          <div class="mb-3">
            <label for="exampleUserid" class="form-label">User Id</label>
            <input type="number" class="form-control" name="user_id" value="{{ $candidate-> user_id }}">
        </div>

        <div class="mb-3">
          <label for="exampleInputDocType" class="form-label">Selection Status</label>
          <select class="form-select" name="selection_status" value="{{ $candidate-> selection_status }}">
            <option selected>Choose your status selection</option>
            <option value="IN STUDY">IN STUDY</option>
            <option value="SELECTED">SELECTED</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="exampleUserid" class="form-label">Points</label>
          <input type="number" class="form-control" name="points" value="{{ $candidate-> points }}">
      </div>

        <button type="submit" class="btn btn-primary"  value="Update">Update</button>
      </form>
      @endsection
</section>