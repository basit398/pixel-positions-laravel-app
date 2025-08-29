<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function __invoke()
    {
        $jobs = job::with(['employer', 'tags'])->where('title', 'LIKE', '%' . request('q') . '%')->get();

        return view('results', ['jobs' => $jobs]);
    }
}
