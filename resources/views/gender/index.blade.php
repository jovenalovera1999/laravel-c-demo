<!-- Main HTML -->
@extends('layout.main')

<!-- HTML content -->
@section('content')

<!-- Title page or tab title -->
<title>List of Genders | Demo App</title>

<!-- Sidebar -->
@include('include.sidebar')

<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">List of Genders</h5>
        <div class="table-responsive">
            <!-- Button add gender -->
            <a href="/gender/create" class="btn btn-primary col-sm-3 float-end">Add Gender</a>
            <!-- Genders table -->
            <table class="table">
                @include('include.messages')
                <thead>
                    <!-- Table head -->
                    <tr>
                        <th>Gender</th>
                        <th>Date Created</th>
                        <th>Date Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Load all genders from database genders table and table data -->
                    @foreach ($genders as $gender)    
                        <tr>
                            <td>{{ $gender->gender }}</td>
                            <td>{{ $gender->created_at}}</td>
                            <td>{{ $gender->updated_at }}</td>
                            <td>
                                <!-- Action group button -->
                                <div class="btn-group">
                                    <a href="/gender/show/{{ $gender->gender_id }}" class="btn btn-outline-primary">View</a>
                                    <a href="#" class="btn btn-outline-warning">Edit</a>
                                    <a href="#" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection