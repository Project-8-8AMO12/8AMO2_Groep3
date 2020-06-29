@extends('template.mainTemplate')

@section('content')
    <div class="row mt-2">
        <h1>Admins</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">User role</th>
            </tr>
            </thead>
            <tbody>
            @foreach($admins as $admin)
                <tr>
                    <th scope="row">{{ $admin->id }}</th>
                    <td>{{ $admin->username }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->user_role }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row mt-2">
        <h1>Mods</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">User role</th>
                <th scope="col">Promote</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mods as $mod)
                <tr>
                    <th scope="row">{{ $mod->id }}</th>
                    <td>{{ $mod->username }}</td>
                    <td>{{ $mod->email }}</td>
                    <td>{{ $mod->user_role }}</td>
                    <td><a href="/manageusers/promote/{{ $mod->id }}" class="btn btn-primary">Promote this mod to admin.</a></td>
                    <td><a href="/manageusers/delete/{{ $mod->id }}" class="btn btn-primary">Delete this mod</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
