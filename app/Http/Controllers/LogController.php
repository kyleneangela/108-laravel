<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\SystemLog;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $activityLogs = ActivityLog::with('user')->latest()->get();
        $systemLogs = SystemLog::latest()->get();
        return view('logs.index', compact('activityLogs', 'systemLogs'));
    }

    public function activity()
    {
        $activityLogs = ActivityLog::with('user')->latest()->paginate(15);
        return view('logs.activity', compact('activityLogs'));
    }

    public function system()
    {
        $systemLogs = SystemLog::latest()->paginate(15);
        return view('logs.system', compact('systemLogs'));
    }
}