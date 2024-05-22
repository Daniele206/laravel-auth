@extends('layouts.admin')

@section('content')
        <div class="col bg-success h-100 overflow-auto">
            @if (session('error'))
                <div class="alert alert-danger ms-2 mt-3 w-50" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success ms-2 mt-3 w-50" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mt-3 ms-2 w-50 p-3 bg-light shadow">
                <h2>Aggiungi Project <i class="fa-solid fa-plus"></i></h2>
                <form class="d-flex" action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <input class="form-control w-25 mx-1" type="text" placeholder="Name" name="name">
                    <input class="form-control w-25 mx-1" type="text" placeholder="Type" name="type">
                    <button type="submit" class="btn btn-outline-success mx-1">Aggiungi</button>
                </form>
            </div>
            <table class="table mt-3 ms-2 w-50 shadow">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td><input class="imp_reed" type="text" value="{{ $project->name }}" name="{{ $project->name }}" id="{{ $project->name }}"></td>
                            <td><input class="imp_reed" type="text" value="{{ $project->type }}" name="{{ $project->type }}" id="{{ $project->type }}"></td>
                            <td class="d-flex justify-content-end">
                                <a class="btn btn-warning mx-1" href="#"><i class="fa-solid fa-pen"></i></a>
                                <a class="btn btn-danger mx-1" href="#"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
