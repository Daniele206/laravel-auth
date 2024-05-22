@extends('layouts.admin')

@section('content')
<div class="container-fluid cont_h">
    <div class="row h-100">
        <div class="col col-1 bg-danger h-100">
            <ul class="list-unstyled d-flex flex-column align-items-center">
                <li class=" lh_li">
                    <a class="text-decoration-none text-light fs-5" href="{{ route('admin.projects.index') }}"><i class="fa-solid fa-house"></i> <span>Home</span></a>
                </li>
                <li class=" lh_li">
                    <a class="text-decoration-none text-light fs-5" href="#"><i class="fa-solid fa-list"></i> <span>Type</span></a>
                </li>
                <li class=" lh_li">
                    <a class="text-decoration-none text-light fs-5" href="#"><i class="fa-solid fa-boxes-stacked"></i> <span>Tecnologies</span></a>
                </li>
            </ul>
        </div>
        @if (isset($projects))
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
        @endif
    </div>
</div>
@endsection
