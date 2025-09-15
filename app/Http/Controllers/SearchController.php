<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search()
    {
        $job=Job::where('Title', 'like', '%'.request('q').'%');
        return(view('results',['jobs'=>$job])->with('jobs',$job->paginate(10)))->render();
    }

    /**
     * Show the form for creating a new resource.
     */

}
