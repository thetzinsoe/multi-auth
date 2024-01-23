@extends('master')
@section('content')
    <div>I am Dashboard one</div>
    <a href="{{ route('user@index') }}" class="btn btn-primary">User</a>
    <a href="{{ url('admin/role') }}" class="btn btn-primary">Role</a>
@endsection
