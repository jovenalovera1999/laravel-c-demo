<!-- Main HTML -->
@extends('layout.main')

<!-- Tab title -->
<title>Delete User | Demo App</title>

<!-- Sidebar -->
@include('include.sidebar')

<!-- HTML content -->
@section('content')

<!-- Card -->
<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">Delete User</h5>
        <p class="card-text">Are you sure do you want to delete this gender named "Name of gender"?</p>
        <!-- Buttons -->
        <!-- Form post method with DELETE method and csrf token inside -->
        <form action="#" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger col-sm-3 float-end">YES</button>
        </form>
        <a href="/users" class="btn btn-secondary col-sm-3 float-end me-1">No</a>
    </div>
</div>

@endsection

