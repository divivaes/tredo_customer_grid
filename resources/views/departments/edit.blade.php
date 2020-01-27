@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-md-6 mx-auto">
            <form method="post" action="{{ route('departments.update', $department->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required value="{{ $department->name }}">
                </div>
                <button type="submit" class="btn btn-md btn-outline-info">Save</button>
            </form>
        </div>
    </div>


@endsection
