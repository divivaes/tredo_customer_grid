@extends('layout.app')

@section('content')
    <div class="row">
        <table class="table">
            <tbody>
            <tr>
                <th></th>
                @foreach($departments as $department)
                    @forelse($department->employees as $employee)
                        <td>{{ $employee->firstname . ' ' . $employee->lastname }}</td>
                    @empty
                        There are no employees yet
                    @endforelse
                @endforeach
            </tr>
            @forelse($departments as $dept)
                <tr>
                    <th>{{ $dept->name }}</th>
                    <td>
                        @foreach($dept->employees as $emp)
                            {{ $emp->firstname }}
                        @endforeach
                    </td>
                </tr>
            @empty
                There are no departments yet
            @endforelse
            </tbody>
        </table>

    </div>
@endsection
