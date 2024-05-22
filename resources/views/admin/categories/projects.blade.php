@extends('layouts.admin')

@section('content')
        <div class="col bg-success h-100 overflow-auto">
            <table class="table mt-3 ms-2 w-50 shadow">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->type }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
