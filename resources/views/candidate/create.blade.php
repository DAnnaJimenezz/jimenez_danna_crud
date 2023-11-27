@extends('layouts.app')
@section('content')

<a href="{{ route ('candidate') }}"> Back</a>
<link rel="stylesheet" href="{{ asset('css/createCandidate.css') }}">

<section class="create-candidate" style="width: 30%; margin-left: 35%">
    <h1 class="titleCandidate">Create Your Candidate</h1>
    <form action="{{ route('candidate.store') }}" method="POST">
        @csrf
          <div class="mb-3">
            <label for="exampleUserid" class="form-label">User Id</label>
            <input type="number" class="form-control" name="user_id" required>
        </div>

        <div class="mb-3">
          <label for="exampleInputDocType" class="form-label">Selection Status</label>
          <select class="form-select" name="selection_status" required>
            <option selected>Choose your status selection</option>
            <option value="IN STUDY">IN STUDY</option>
            <option value="SELECTED">SELECTED</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="exampleUserid" class="form-label">Points</label>
          <input type="number" class="form-control" name="points" required>
      </div>

        <button type="submit" class="btn btn-primary">Cratea Candidate</button>
      </form>
      @endsection
</section>