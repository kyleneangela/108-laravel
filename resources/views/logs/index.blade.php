@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Logs</h1>
    <!-- Nav Tabs -->
    <ul class="nav nav-tabs" id="logTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity" type="button" role="tab" aria-controls="activity" aria-selected="true">
                Activity Logs
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="system-tab" data-bs-toggle="tab" data-bs-target="#system" type="button" role="tab" aria-controls="system" aria-selected="false">
                System Logs
            </button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content mt-4" id="logTabsContent">
        <!-- Activity Logs Tab -->
        <div class="tab-pane fade show active" id="activity" role="tabpanel" aria-labelledby="activity-tab">
            <h5>Activity Logs</h5>
            <p>View user activities and interactions within the system.</p>
            <a href="{{ route('logs.activity') }}" class="btn btn-primary">View Activity Logs</a>
        </div>

        <!-- System Logs Tab -->
        <div class="tab-pane fade" id="system" role="tabpanel" aria-labelledby="system-tab">
            <h5>System Logs</h5>
            <p>View system events, errors, and other technical logs.</p>
            <a href="{{ route('logs.system') }}" class="btn btn-primary">View System Logs</a>
        </div>
    </div>
</div>
@endsection
