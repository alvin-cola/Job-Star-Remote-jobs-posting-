<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function tag(Tag $tag)
    {


        return(view('results',['jobs'=>$tag->jobs]));

    }
}
