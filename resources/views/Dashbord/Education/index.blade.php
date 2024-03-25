@extends('Dashbord.layout.master')
@section('name')
    صفحه التخصصات
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <!-- Add at the end of the <head> section for Bootstrap Modal -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <table class="table">
        <thead>
            <tr>
                <th>Qualification</th>
                <th>Specializations</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($qualifications as $qualification)
                <tr>
                    <td>{{ $qualification->name }}</td>
                    <td>
                        @foreach ($qualification->specializations as $specialization)
                            <div>{{ $specialization->name }}</div>
                        @endforeach
                    </td>
                    <td>
                        <!-- Trigger/Edit Modal Button -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#editModal{{ $qualification->id }}">
                            Edit
                        </button>
                    </td>
                    <td>
                        <!-- Delete Button with confirmation -->
                        <form method="POST" action="{{ route('qualifications.destroy', $qualification->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <!-- The Modal -->
                <div class="modal" id="editModal{{ $qualification->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Qualification and Specializations</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="{{ route('qualifications.update', $qualification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Qualification Name:</label>
                                        <input type="text" class="form-control" name="qualification_name"
                                            value="{{ $qualification->name }}">
                                    </div>
                                    <hr>
                                    <h5>Specializations</h5>
                                    @foreach ($qualification->specializations as $specialization)
                                        <div class="form-group">
                                            <label for="specialization_{{ $specialization->id }}">Specialization
                                                Name:</label>
                                            <input type="text" class="form-control"
                                                id="specialization_{{ $specialization->id }}"
                                                name="specializations[{{ $specialization->id }}]"
                                                value="{{ $specialization->name }}">
                                        </div>
                                    @endforeach
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>

    <!-- Add at the end before closing body tag for Bootstrap Modal -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
