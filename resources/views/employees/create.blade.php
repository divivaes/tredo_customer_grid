@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-md-6 mx-auto">
            <form method="post" action="{{ route('employees.store') }}">
                @csrf
                <div class="form-group">
                    <label for="firstname">First name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Last name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" required>
                </div>
                <div class="form-group">
                    <label for="middlename">Middle name</label>
                    <input type="text" class="form-control" name="middlename" id="middlename">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="text" class="form-control" name="salary" id="salary">
                </div>
                <div class="form-group">
                    <label for="departments">Departments</label>
                    <select class="form-control form-control-select2" id="departments" name="departments[]" multiple>
                        @forelse($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @empty
                            <option value="0">Departments not added yet</option>
                        @endforelse
                    </select>
                </div>
                <button type="submit" class="btn btn-md btn-outline-info">Save</button>
            </form>
        </div>
    </div>


@endsection
