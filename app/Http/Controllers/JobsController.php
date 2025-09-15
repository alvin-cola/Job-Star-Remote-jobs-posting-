<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class JobsController extends Controller
{
    public function index(){
        return view('jobs.index',
            ['jobs'=>Job::with('employer')->latest()->simplePaginate(5),'tags'=>Tag::all()]);
    }
    public function create(){
        return view('jobs.create', );
            }
    public function store(){
        request()->validate([
            'title' => 'required','min:3',
            'description' => 'required',
            'employer-name' => 'required',
            'logo'=>'required|File|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required',
            'type' => ['required',Rule::in(['Full Time','Part Time'])],
            'url'=>['required','url'],
            'featured' =>'boolean',
             'tags' => 'nullable',

        ]);
        // 2. Get the authenticated user's ID
        $userId = Auth::id();

        // 3. Find or create the employer based on the user and company name.
        // This prevents duplicate employer records for the same user.

        $employer = Employer::firstOrCreate(
            [
                'user_id' => $userId,
                'name' => request('employer-name')
            ],

        );
        if (request()->hasFile('logo')) {
            $logoPath = request('logo')->store('logos');
            $employer->update(['logo' => $logoPath]);
        }
        $job=Job::create([
            'Title' => request('title'),
            'employer_id' => $employer->id,
            'Description' => request('description'),
            'Location'=>request('location'),
             'JobType' => request('type'),
            'Url' => request('url'),
            'Featured' => request('featured'),
            ]);

        $tags = explode(',', request('tags'));
        $tags = array_map('trim', $tags);

        foreach ($tags as $tagName) {
            if (!empty($tagName)) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $job->tags()->attach($tag);
            }
        }

        Mail::to($job->employer->user)->send(
            new JobPosted($job)
        );
        return redirect('/jobs')->with('success', 'Job created successfully!');
    }
    public function show(Job $job){
        return view('jobs.show',[ 'job'=>$job]);
    }
    public function edit(Job $job){
        return view('jobs.edit',[ 'job'=>$job]);
    }
    public function update(Job $job){
        request()->validate([
            'title' => 'required','min:3',
            'salary' => 'required',
        ]);

        $job->update([
            'Title' => request('title'),
            'Salary' => request('salary'),
        ]);

        return redirect('/jobs');
    }
    public function destroy(Job $job){
        $job->delete();
        return redirect('/jobs');
    }
}
