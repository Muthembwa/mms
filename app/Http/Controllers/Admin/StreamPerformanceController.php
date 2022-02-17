<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class StreamPerformanceController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('stream_performance_access'), 403);

        return view('admin.streamPerformances.index');
    }
}
