<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = Member::with(['galleries'])->get();
        return view('pages.home',[
            'items'=>$items
        ]);
    }
}
