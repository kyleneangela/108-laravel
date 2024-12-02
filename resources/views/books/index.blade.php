@extends('layouts.app')

@section('content')
<div class="row mb-3 pt-4">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
            <h4 class="mb-0 fw-bold">Books</h4>
            <form action="{{ route('books.index') }}" method="GET" class="d-flex align-items-center">
                <input 
                    type="text" 
                    name="search" 
                    value="{{ request('search') }}" 
                    class="form-control me-2" 
                    placeholder="Search Books" 
                />
                <select 
                    name="availability" 
                    class="form-select me-2" 
                    onchange="this.form.submit()">
                    <option value="">All Availability</option>
                    <option value="available" {{ request('availability') == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="unavailable" {{ request('availability') == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                </select>
                <div class="col-md-4 text-end">
                    <a href="{{ route('books.create') }}" class="btn btn-custom-purple fw-bold">Add Book</a>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN</th>
                    <th>Available Copies</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->available_copies }} / {{ $book->total_copies }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-custom-blue">Edit</a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
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
                    <td colspan="5" class="text-center">No books found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection
