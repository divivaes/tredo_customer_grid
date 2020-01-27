@extends('layout.app')


@section('content')

    <div class="row">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Employee quantity</th>
                <th scope="col">Max salary</th>
                <th scope="col">Actions</th>
            </thead>
            <tbody>
            @forelse($departments as $department)
                <tr>
                    <th scope="row">{{ $department->id }}</th>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->employees()->count() }}</td>
                    <td>{{ $department->employees()->sum('salary') }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" title="Редактировать" href="{{ route('departments.edit', $department->id)}}"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-sm" data-method="delete" id="destroyer" href="{{ route('departments.destroy', $department->id) }}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <th scope="row" colspan="7">There are now departments yet</th>
                </tr>
            @endforelse
            </tbody>
        </table>

        <div class="mt-5">
            <a href="{{ route('departments.create') }}" class="btn btn-md btn-outline-dark">Add department</a>
        </div>

    </div>


@endsection
