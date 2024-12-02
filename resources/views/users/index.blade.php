@extends('layouts.app')

@section('content')
<div class="row mb-3 pt-4">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
            <h4 class="mb-0 fw-bold">Users</h4>
            <form action="{{ route('users.index') }}" method="GET" class="d-flex align-items-center">
                <input 
                    type="text" 
                    name="search" 
                    value="{{ request('search') }}" 
                    class="form-control me-2" 
                    placeholder="Search" 
                />
                <select 
                    name="role" 
                    class="form-select me-2" 
                    onchange="this.form.submit()">
                    <option value="">All Roles</option>
                    @foreach($roles as $role)
                        <option 
                            value="{{ $role }}" 
                            {{ request('role') == $role ? 'selected' : '' }}>
                            {{ ucfirst($role) }}
                        </option>
                    @endforeach
                </select>
                <div class="col-md-4 text-end">
        <a href="{{ route('users.create') }}" class="btn btn-custom-purple fw-bold">Add Users</a>
    </div>            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->role) }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-custom-blue">Edit</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button 
                                type="submit" 
                                class="btn btn-sm btn-danger" 
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No users found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
