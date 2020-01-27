@extends('layout.app')


@section('content')

    <div class="row">

        <div class="col-md-12">
            @include('layout.messages')
        </div>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Salary</th>
                <th scope="col">Department list</th>
                <th scope="col">Actions</th>
            </thead>
            <tbody>
            @forelse($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>{{ $employee->firstname }}</td>
                    <td>{{ $employee->lastname }}</td>
                    <td>{{ $employee->middlename ?? 'Not recorded' }}</td>
                    <td>{{ $employee->gender ?? 'Not recorded' }}</td>
                    <td>{{ $employee->salary ?? 'Not recorded' }}</td>
                    <td>
                        @foreach($employee->departments as $department)
                            {{ $loop->first ? '' : ', ' }}
                            {{ $department->name }}
                        @endforeach
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" title="Редактировать" href="{{ route('employees.edit', $employee->id)}}"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-sm" data-method="delete" id="destroyer" href="{{ route('employees.destroy', $employee->id) }}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <th scope="row" colspan="7">There are now employees yet</th>
                </tr>
            @endforelse
            </tbody>
        </table>

        <div class="mt-5">
            <a href="{{ route('employees.create') }}" class="btn btn-md btn-outline-dark">Add employee</a>
        </div>

    </div>


@endsection
