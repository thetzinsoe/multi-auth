@extends('master')
@section('content')
    <div class="col-md-8 offset-md-2">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        {{-- @dd($user->id) --}}
                        <td> {{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                <span class="badge bg-secondary"> {{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('edit@user', $user->id) }}" class="btn btn-sm btn-primary rounded">Manage
                                Role</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
