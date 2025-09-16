<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagsController;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    \Illuminate\Support\Facades\Mail::to('alvinakandwanaho3@gmail.com')->send(
        new \App\Mail\JobPosted()
    );
    return 'Mail sent';
});

Route::get('/', function () {
    $jobs = Job::latest()->get()->groupBy('Featured');
    return view('index', [
        'jobs' => $jobs->get(0, collect()),
        'FeaturedJobs' => $jobs->get(1, collect()),
        'tags' => Tag::all()
    ]);
})->name('/');
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/search',[SearchController::class,'search'])->name('search');
Route::get('/tags/{tag:name}',[TagsController::class,'tag'])->name('tag');



Route::get('/jobs', [JobsController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobsController::class, 'create'])->name('jobs.create')->middleware('auth');

Route::get('/jobs/{job}', [JobsController::class, 'show'])->name('jobs.show');
Route::post('/jobs', [JobsController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{job}/edit', [JobsController::class, 'edit'])->name('jobs.edit')->middleware(['auth', 'verified'])->can('edit', 'job');
Route::patch('/jobs/{job}', [JobsController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{job}', [JobsController::class, 'destroy'])->name('jobs.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
