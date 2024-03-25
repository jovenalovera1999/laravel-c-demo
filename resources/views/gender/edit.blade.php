<!-- Main HTML -->
@extends('layout.main')

<!-- HTML content -->
@section('content')

<!-- Title page or tab title -->
<title>Delete Gender | Demo App</title>

<!-- Sidebar -->
@include('include.sidebar')

<!-- Card -->
<div class="card mt-3 col-sm-5 mx-auto">
    <div class="card-body">
        <h5 class="card-title">Edit Gender</h5>
        <!-- Form post method with PUT method and csrf token inside -->
        <form action="#" method="post">
            @method('PUT')
            @csrf
            <!-- Gender field -->
            <div class="mb-3">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" />
                @error('gender') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <button type="submit" class="btn btn-success col-sm-3 float-end">Save Gender</button>
            <a href="/genders" class="btn btn-secondary col-sm-3 float-end me-1">Back</a>
        </form>
    </div>
</div>

@endsection

