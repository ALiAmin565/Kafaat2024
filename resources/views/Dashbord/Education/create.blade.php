@extends('Dashbord.layout.master')
@section('name')
    صفحه اضافة التخصصات
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <div class="container">
        <form method="POST" action="{{ URL('admin/store') }}">
            @csrf
            <div class="form-group">
                <label for="qualification">Qualification</label>
                <input type="text" class="form-control" id="qualification" name="qualification" required>
            </div>
            <div class="form-group">
                <label for="specialization">Specializations</label>
                <input type="text" class="form-control mb-2" id="specialization1" name="specializations[]" required>
                <input type="text" class="form-control mb-2" id="specialization2" name="specializations[]" required>
                <!-- Add more inputs as needed or use JavaScript to dynamically add inputs -->
            </div>
            <div id="specializationsContainer">
                <!-- Initial specialization input fields if needed -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <button type="button" onclick="addSpecializationInput()" class="btn btn-danger mt-4" >Add More Specialization</button>

    <script>
        function addSpecializationInput() {
            const container = document.getElementById('specializationsContainer');
            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'specializations[]';
            input.classList.add('form-control', 'mb-2');
            container.appendChild(input);
        }
    </script>
@endsection
