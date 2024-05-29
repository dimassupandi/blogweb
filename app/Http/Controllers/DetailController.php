<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Member::with(['galleries'])
                ->where('slug',$slug)
                ->firstOrFail();

        return view('pages.detail',[
            'item'=> $item
        ]);
    }
}
