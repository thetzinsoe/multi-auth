@extends('master')
@section('content')
    <div class="col-md-8 offset-md-2">
        <form action="{{ route('update@user', $user->id) }}" method="POST">
            @csrf
            <input type="text" value="{{ $user->name }}" class="form-control mb-3">
            @foreach ($roles as $role)
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="role_ids[]" id="{{ $role->name }}"
                        value="{{ $role->id }}"
                        @foreach ($user->roles as $user_role)
                            @if ($role->name == $user_role->name)
                                checked
                            @endif @endforeach>
                    <label class="form-check-label" for="{{ $role->name }}">
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach
            <input type="submit" class="btn btn-primary" value="Add Role">
        </form>
    </div>
@endsection
