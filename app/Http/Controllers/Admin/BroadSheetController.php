<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BroadSheetController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('broad_sheet_access'), 403);

        return view('admin.broadSheets.index');
    }
}
