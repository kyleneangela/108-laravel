@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 pt-4">
        
        <div class="row mt-4 fw-bold">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">{{ App\Models\User::count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Books</h5>
                        <p class="card-text">{{ App\Models\Book::count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Books Borrowed</h5>
                        <p class="card-text">{{ App\Models\Loan::where('status', 'borrowed')->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Overdue Books</h5>
                        <p class="card-text">{{ App\Models\Loan::where('status', 'overdue')->count() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection