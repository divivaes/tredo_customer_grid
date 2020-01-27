@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-md-6 mx-auto">
            <form method="post" action="{{ route('employees.update', $employee->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="firstname">First name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" required value="{{ $employee->firstname }}">
                </div>
                <div class="form-group">
                    <label for="lastname">Last name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" required value="{{ $employee->lastname }}">
                </div>
                <div class="form-group">
                    <label for="middlename">Middle name</label>
                    <input type="text" class="form-control" name="middlename" id="middlename" value="{{ $employee->middlename }}">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="male" @if($employee->gender === "male") selected @endif>Male</option>
                        <option value="female" @if($employee->gender === "female") selected @endif>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="text" class="form-control" name="salary" id="salary" value="{{ $employee->salary }}">
                </div>
                <div class="form-group">
                    <label for="departments">Departments</label>
                    <select class="form-control form-control-select2" id="departments" name="departments[]" multiple>
                        @foreach($depts as $dept)
                            <option value="{{ $dept->id }}" @if($employee->departments->contains('id', $dept->id)) selected @endif>{{ $dept->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-md btn-outline-info">Save</button>
            </form>
        </div>
    </div>


@endsection
