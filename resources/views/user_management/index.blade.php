@extends('layouts.app')

@section('content')
    <h1>Manajemen User</h1>
    <!-- Add 'Add User' button -->
    <a href="{{ route('user-management.create') }}">Tambah User</a>

    <!-- User Table -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->name }}</td>
                    <td>
                        <a href="{{ route('user-management.edit', $user) }}">Edit</a>
                        <form action="{{ route('user-management.destroy', $user->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
