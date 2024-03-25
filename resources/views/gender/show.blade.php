<!-- Main HTML -->
@extends('layout.main')

<!-- HTML content -->
@section('content')

<!-- Title page or tab title -->
<title>View Gender | Demo App</title>

<!-- Sidebar -->
@include('include.sidebar')

<!-- Card -->
<div class="card mt-3 col-sm-5 mx-auto">
    <div class="card-body">
        <h5 class="card-title">View Gender</h5>
        <!-- Form post method with csrf token inside -->
        <form action="#" method="post">
            @csrf
            <!-- Gender field read only -->
            <div class="mb-3">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" readonly />
                @error('gender') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <a href="/genders" class="btn btn-secondary col-sm-3 float-end">Back</a>
        </form>
    </div>
</div>

@endsection