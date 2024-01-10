@extends('layouts.app')

@section('content')
    <h1>Tambah User</h1>
    <form method="POST" action="{{ route('user-management.store') }}">
        @csrf
        <div>
            <label>Nama:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Username:</label>
            <input type="text" name="username">
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password">
        </div>
        <div>
            <label>Ulangi Password:</label>
            <input type="password" name="password_confirmation">
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection
