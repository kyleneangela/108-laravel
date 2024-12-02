@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">System Logs</h1>
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">System Events</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($systemLogs as $log)
                    <tr>
                        <td>{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <span class="badge bg-{{ $log->type === 'error' ? 'danger' : ($log->type === 'warning' ? 'warning' : 'info') }}">
                                {{ ucfirst($log->type) }}
                            </span>
                        </td>
                        <td>{{ $log->message }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $systemLogs->links() }}
</div>
@endsection