<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Member;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        
        return view('pages.admin.dashboard',[
            'member'=> Member::count(),
            'gallery'=> Gallery::count(),
        ]);
    }
}
